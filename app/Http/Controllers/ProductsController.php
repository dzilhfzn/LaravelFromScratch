<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $message = 'Welcome to Products';
        
        $data = [
            'iPhone',
            'Samsung',
            'Oppo',
            'Xiaomi',
            'OnePlus',
            'Honor',
            'Asus',
        ];

        return view('products.index', [
            'message' => $message,
            'phone' => $data
        ]);
    }

    public function display($id) {
        $data = [
            'iPhone',
            'Samsung',
            'Oppo',
            'Xiaomi',
            'OnePlus',
            'Honor',
            'Asus',
        ];

        return view('products.index', [
            'message' => $data[$id] ?? 'ID number of ' . $id . ' is not in the system.'
        ]);
    }
}
