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
        $categoria = DB::table('categorias')->get();
        return view('produtos/fill', compact('categoria'));
    }

    public function uploadProductImage($imgRequest)
    {
        $img = $imgRequest;
        $img_name = md5(time()).'.'.$img->getClientOriginalExtension();
        $img->move('assets/img/produtos', $img_name);

        return $img_name;
    }

    public function creatSlug($nome_produto)
    {
        $search = strtolower($nome_produto);
        $search = str_replace(' ', '-', $search);

        return $search;
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
        $product->nome_img = $this->uploadProductImage($req->file('nome_img'));
        $product->categoria = $req->categoria;

        $product->search = $this->creatSlug($req->nome_produto);

        if ($product->save()) {

            sleep(2);
            return redirect()->route('listProducts');
        }   
    }   

    public function edit($id) 
    {
        $product = Product::find($id);
        $categoria = DB::table('categorias')->get();
        return view('produtos/edit', compact('product', 'categoria'));
    }

    public function update(Request $req, Product $product) 
    {
        $id = $req->id;
        $product = Product::find($id);
        $product->nome_produto = $req->nome_produto;
        $product->valor_custo = $req->valor_custo;
        $product->valor_venda = $req->valor_venda;
        $product->valor_lucro = $req->valor_lucro;
        $product->quantidade = $req->quantidade;
        $product->status = ($req->quantidade > 0)? 'Disponivel' : 'Esgotado';
        
        if ($req->file()) {
            $product->nome_img = $this->uploadProductImage($req->file('nome_img'));
        }

        $product->search = $this->creatSlug($req->nome_produto);

        $product->save();
        sleep(2);
        return redirect()->route('listProducts');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return redirect()->route('listProducts');
    }
}
