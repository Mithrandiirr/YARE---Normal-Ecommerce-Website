<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class LinksController extends Controller
{
    public function getEuw(request $request)
    {
$products = Product::get();
return view('products',compact('products'));
    }
}
