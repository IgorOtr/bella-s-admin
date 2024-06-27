<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function listProducts()
    {
        $products = DB::table('products')->get();
        return $products;
    }

    public function TofillIn()
    {
        return view('produtos/fill');
    }

    public function create(Request $req, Product $product)
    {
        // dd($req->all());
        $product->nome_produto = $req->nome_produto;
        $product->valor_custo = $req->valor_custo;
        $product->valor_venda = $req->valor_venda;
        $product->valor_lucro = $req->valor_lucro;
        $product->quantidade = $req->quantidade;
        $product->id_fornecedor = '0';
        $product->status = ($req->quantidade > 0) ? 'Disponivel' : 'Esgotado';

        $img = $req->file('nome_img');
        $img_name = md5(time()).'.'.$img->getClientOriginalExtension();
        $img->move('assets/img/produtos', $img_name);
        $product->nome_img = $img_name;

        $search = strtolower($req->nome_produto);
        $search = str_replace(' ', '-', $search);
        $product->search = $search;

        if ($product->save()) {

            return redirect()->route('listProducts');
        }   
    }   
}
