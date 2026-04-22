<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Mouse'],
            ['id' => 3, 'produk' => 'Keyboard'],
        ];

        return view('list_produk', compact('data'));
    }
}
