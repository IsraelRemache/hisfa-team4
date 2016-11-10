<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resources = DB::table('stocks')->join('resources', 'resources.id', '=', 'stocks.resource_id')->get();
        $qualities = DB::table('products')->join('qualities', 'qualities.id', '=', 'products.quality_id')->join('lengths', 'lengths.id', '=', 'products.length_id')->orderBy('name', 'asc')->orderBy('lengths.length', 'asc')->get();
        $wastes = DB::table('resources')->join('wastes', 'resources.id', '=', 'wastes.resource_id')->orderBy('wastes.name')->get();
        $primes = DB::table('resources')->join('primes', 'resources.id', '=', 'primes.resource_id')->orderBy('primes.name')->get();
        $input = [];
        foreach ($qualities as $quality) {
            array_push($input, $quality->name);
        }
        $results = array_unique($input);
        return view('welcome', compact('resources', 'qualities', 'wastes', 'primes', 'results'));
    }
}
