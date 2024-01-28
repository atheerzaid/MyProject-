<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function ShowItemGroup()
    {
        $data=Itemgroup::All();
        $count=$data->count();
        //dd($count);
        return view('welcome',['data'=>$data,'count'=>$count]);
    }
    public function ShowProduct($id)
    {
        $data=Items::where('Itemgroupno',$id)
         ->get();
         Session::put('id',$id);
        return view('showproduct',['data'=>$data]);
    }
    public function total()
    {
        $total=DB::table('items')
        ->join('cart','items.id','=','cart.iditem')
        ->sum('price');
        //dd($data);
        return view("checkout",['total'=>$total]);
    }
  
    public function AddtoCart($id,Request $request)
    {   //dd($request);
        $data=DB::table('cart')->insert(['iditem'=>$id,
        'date'=>$request->date
    ]);// save to cart table
        
        //DB::table('cart')->insert($date);
        //dd($data);
        
        //dd($date);
        $idgroup=Session::get('id');
        $count=DB::table('cart')->get()->count();

        Session::put('countitem',$count);
       //this->ShowProduct($id);
       return redirect('showproduct/'.$idgroup);// redirect to showproduct page blade
    }
    public function Checkout()
    {
        $data=DB::table('items')
        ->join('cart','items.id','=','cart.iditem')
        ->get();
        $count=DB::table('cart')->get()->count();
        //$total=$data[$count]->price;
        $subtotal=DB::table('items')
        ->join('cart','items.id','=','cart.iditem')
        ->sum('price');
        $VAT=$subtotal*(15/100);
        $total=$subtotal+$VAT;
        
        //return view('dashboard.addgroupsitem',['data'=>$data]);
        return view("checkout",['data'=>$data,'subtotal'=>$subtotal,'total'=>$total,'VAT'=>$VAT]);
    }
    public function GetItemGroup()
    {
        $data=Itemgroup::All();
        $issave=true;
        return view('itemgroup',['data'=>$data,'issave'=>$issave]);
        //return view('itemgroup',['data'=>$data]);
    }
   
                 //////////////////Itemgroups//////////

    public function SaveItemgroup(Request $request)
    {
       //$issave=false;
       dd($request);
       $data=Itemgroup::Create([
        'Itemgroupsname'=>$request->Itemgroupsname,
        'image'=>$request->image
       ]);
       $data->save();
       //$issave=true();
       return redirect('addgritem');
    }
    public function Del($x)
    {
        //-- step delete
       $item=Itemgroup::find($x);
       $item->delete();
       // end delete
       return  redirect()->route('addgritem');
    }
    public function Edit($x)
    {
        $item=Itemgroup::where('id',$x)->first();
        //dd($find);

        return view('editgroupitem',['item'=>$item]);
    }
    public function Update(Request $request)
    {
        $item=Itemgroup::find($request->id);
        $item->Itemgroupsname=$request->namegroup;
        $item->image=$request->image;
        
        $item->save();
        //dd($request);
        return  redirect('addgritem');
    }

           //////////// Items ///////////

    public function GetItems()
    {
        $data=Items::All();
        $issave=true;
        
        return view('items',['data'=>$data,'issave'=>$issave]);
    }
    public function SaveItems(Request $request)
    {
        //dd($request);
       //$issave=false;
       $data=Items::Create([
        'itemname'=>$request->itemname,
        'price'=>$request->price,
        'qty'=>$request->qty,
        'image'=>$request->image,
        'itemgroupno'=>$request->itemgroupno
       ]);
       $data->save();
       //$issave=true();
       //dd($data);
       return redirect('additem');
    }
    public function Delete($x)
    {
        //-- step delete
       $item=Items::find($x);
       $item->delete();
       // end delete
       return  redirect()->route('additem');
    }
    public function EditItems($x)
    {
        $item=Items::where('id',$x)->first();
        //dd($find);

        return view('edititems',['item'=>$item]);
    }
    public function UpdateItems(Request $request)
    {
        $item=Items::find($request->id);
        $item->itemname=$request->itemname;
        $item->price=$request->price;
        $item->qty=$request->qty;
        $item->image=$request->image;
        $item->itemgroupno=$request->itemgroupno;
        
        $item->save();
        //dd($request);
        return  redirect('additem');
    }

  /////////////////dashboard///////////////

   
    
}
