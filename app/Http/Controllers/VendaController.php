<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function TofillIn()
    {
        return view('vendas/fill');
    }

    public function create()
    {
        return 'route to add new sale at db';
    }
}
