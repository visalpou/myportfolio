<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
class HomeController extends Controller
{
    
    public function index()
    {
        $data['row']= DB::table('products')->get();
        $data['aboutus']= DB::table('portfolio')->first();
        $data['service']= DB::table('service')->get();
        $data['news']= DB::table('news')->get();

        return view('client.pages.hero-area',$data);
    }
}
