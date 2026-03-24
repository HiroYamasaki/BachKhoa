<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

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

        return view('shop', compact('products', 'orderby'));
    }
}
