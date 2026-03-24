<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = $this->buildQuery($request);
        $orderby = $request->get('orderby', 'default');

        $products = $query->paginate(12)->appends($request->query());

        // Return JSON for AJAX requests
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'html' => view('partials.product-grid', compact('products'))->render(),
                'pagination' => view('partials.pagination', compact('products'))->render(),
                'result_count' => $products->total() > 0
                    ? 'Showing ' . $products->firstItem() . '–' . $products->lastItem() . ' of ' . $products->total() . ' results'
                    : 'No products found',
                'total' => $products->total(),
                'last_page' => $products->lastPage(),
                'current_page' => $products->currentPage(),
            ]);
        }

        // Get unique categories and tags for sidebar
        $categories = Product::whereNotNull('category')->where('category', '!=', '')
            ->selectRaw('category, COUNT(*) as count')
            ->groupBy('category')
            ->orderBy('category')
            ->get();

        $tags = Product::whereNotNull('tag')->where('tag', '!=', '')
            ->pluck('tag')
            ->flatMap(fn($t) => array_map('trim', explode(',', $t)))
            ->filter()
            ->countBy()
            ->sortKeys();

        $maxPrice = Product::max('price') ?: 0;

        return view('shop', compact('products', 'orderby', 'categories', 'tags', 'maxPrice'));
    }

    private function buildQuery(Request $request)
    {
        $query = Product::query();

        // Search
        $search = $request->get('s', '');
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('sku', 'like', '%' . $search . '%')
                  ->orWhere('short_description', 'like', '%' . $search . '%');
            });
        }

        // Category filter
        $category = $request->get('category', '');
        if ($category) {
            $query->where('category', $category);
        }

        // Tag filter
        $tag = $request->get('tag', '');
        if ($tag) {
            $query->where('tag', 'like', '%' . $tag . '%');
        }

        // Price range filter
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');
        if ($minPrice !== null && $minPrice !== '') {
            $query->where(function ($q) use ($minPrice) {
                $q->where('sale_price', '>', 0)->where('sale_price', '>=', $minPrice)
                  ->orWhere(function ($q2) use ($minPrice) {
                      $q2->where(function ($q3) { $q3->where('sale_price', 0)->orWhereNull('sale_price'); })
                         ->where('price', '>=', $minPrice);
                  });
            });
        }
        if ($maxPrice !== null && $maxPrice !== '') {
            $query->where(function ($q) use ($maxPrice) {
                $q->where('sale_price', '>', 0)->where('sale_price', '<=', $maxPrice)
                  ->orWhere(function ($q2) use ($maxPrice) {
                      $q2->where(function ($q3) { $q3->where('sale_price', 0)->orWhereNull('sale_price'); })
                         ->where('price', '<=', $maxPrice);
                  });
            });
        }

        // Sorting
        $orderby = $request->get('orderby', 'default');
        switch ($orderby) {
            case 'date':
                $query->orderBy('created_at', 'desc');
                break;
            case 'price':
                $query->orderByRaw('CASE WHEN sale_price > 0 THEN sale_price ELSE price END ASC');
                break;
            case 'price-desc':
                $query->orderByRaw('CASE WHEN sale_price > 0 THEN sale_price ELSE price END DESC');
                break;
            case 'name':
                $query->orderBy('name', 'asc');
                break;
            case 'name-desc':
                $query->orderBy('name', 'desc');
                break;
            default:
                $query->orderBy('id', 'asc');
                break;
        }

        return $query;
    }

    public function show(Request $request)
    {
        $id = $request->get('id');
        if (!$id) {
            abort(404);
        }

        $product = Product::findOrFail($id);

        // Related: same category, else random
        if ($product->category) {
            $related = Product::where('category', $product->category)
                ->where('id', '!=', $product->id)
                ->inRandomOrder()
                ->limit(4)
                ->get();
        } else {
            $related = Product::where('id', '!=', $product->id)
                ->inRandomOrder()
                ->limit(4)
                ->get();
        }

        return view('product_detail', compact('product', 'related'));
    }
}
