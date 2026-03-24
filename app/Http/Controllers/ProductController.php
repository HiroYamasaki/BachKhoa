<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Search
        $search = $request->get('s', '');
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        // Category filter
        $category = $request->get('category', '');
        if ($category) {
            $query->where('category', $category);
        }

        // Price filter
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');
        if ($minPrice !== null && $minPrice !== '') {
            $query->where(function ($q) use ($minPrice) {
                $q->where('sale_price', '>', 0)->where('sale_price', '>=', $minPrice)
                  ->orWhere(function ($q2) use ($minPrice) {
                      $q2->where(function ($q3) { $q3->where('sale_price', '<=', 0)->orWhereNull('sale_price'); })
                         ->where('price', '>=', $minPrice);
                  });
            });
        }
        if ($maxPrice !== null && $maxPrice !== '') {
            $query->where(function ($q) use ($maxPrice) {
                $q->where('sale_price', '>', 0)->where('sale_price', '<=', $maxPrice)
                  ->orWhere(function ($q2) use ($maxPrice) {
                      $q2->where(function ($q3) { $q3->where('sale_price', '<=', 0)->orWhereNull('sale_price'); })
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

        $products = $query->paginate(12)->appends($request->query());

        // Sidebar data
        $categories = Product::select('category')
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->groupBy('category')
            ->selectRaw('category, count(*) as count')
            ->orderBy('category')
            ->get();

        $priceRange = Product::selectRaw('MIN(CASE WHEN sale_price > 0 THEN sale_price ELSE price END) as min_price, MAX(price) as max_price')
            ->where('price', '>', 0)
            ->first();

        return view('shop', compact('products', 'orderby', 'search', 'category', 'categories', 'minPrice', 'maxPrice', 'priceRange'));
    }
}
