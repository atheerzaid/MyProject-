<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }


    public function DisplayItems()
    {
        $data=DB::table('itemgroups')
        ->join('items','itemgroups.id','=','items.itemgroupno')
        ->get();
        return view('dashboard.controlpanel',['data'=>$data]);

    }
    public function displayadditemsgroup()
    {
        $data=Itemgroup::All();
        
        return view('dashboard.addgroupsitem',['data'=>$data]);
    }
    public function displayadditems()
    {
        $data=Items::All();
        
        return view('dashboard.additems',['data'=>$data]);
    }
}

