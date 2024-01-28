@extends('layouts.dashboard')

@section('content')
<div claas="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class="alert text-center" style="background-color:#EEE9ED">اضافة الأصناف</h1>
            <div class="card">
                <div class="card-body">
                <form action="{{route('saveitems')}}" method="post" >
                    @csrf
                    <div class="row ">
                        <div class="col " display="inline-block">
                           <label for="itemname"  > اسم العنصر</label>
                           <input type="text"   class="form-control-sm "name="itemname" id="itemname">
                        </div>
                        <div class="col" display="inline-block">
                           <label for="price" >سعر العنصر</label>
                           <input type="text"  class="form-control-sm "name="price" id="price">
                        </div>
                        <div class="col " display="inline-block">
                          <label for="qty" >عدد العنصر</label>
                          <input type="text"  class="form-control-sm "name="qty" id="qty">
                        </div>
                    </div>
                    <div class="row mt-2">
                    
                        <div class="col " display="inline-block">
                         <label for="itemgroupno" >لصورة</label>
                         <input type="text" class="form-control-sm " name="image" id="image">
                        </div>
                        <div class="col " display="inline-block">
                         <label for="itemgroupno" >رقم مجموعة العنصر</label>
                         <input type="text" class="form-control-sm " name="itemgroupno" id="itemgroupno">
                        </div>
                        <div class="col " display="inline-block">
                         
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                             <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            
            
            
            <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center" style="background-color:#EEE9ED">
                <thead >
                    <tr>
                     <th>رقم العنصر</th>
                     <th>اسم العنصر</th>
                     <th>سعر العنصر</th>
                     <th>عدد العنصر</th>
                     <th>الصورة </th>
                     <th>رقم مجموعة العنصر</th>
                     <th colspan="2">اجراء </th>
                    </tr>

                </thead>
                <tbody>
                 @foreach($data as $row)
                   <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->itemname}}</td>
                     <td>{{$row->price}}</td>
                     <td>{{$row->qty}}</td>
                     <td><img src="/image/{{$row->image}}" width="50" hight="100"></td>
                     <td>{{$row->itemgroupno}}</td>
                     <td><a href="{{route('edititems',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square" style="color:#c3a7b9"></i></a></td>
                     <td><a href="{{route('delete',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                   </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</div>

@endsection