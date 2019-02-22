<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{
	public function Index(){
		$query = Stock::select('id','tipo','marca','modelo','precio')->get();
		return view("stock.stocklist")->with('stock', $query);	
	}
    
}