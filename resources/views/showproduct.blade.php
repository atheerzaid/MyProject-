@extends('layouts.app')


@section('content')
<div  class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-8 ">
    @foreach($data as $row)
    <div class="card mt-4 " >
        <div class="card-body">
            <div class="row">
                <div class="col">
                 <h1 class="alert text-dark" style="background-color:#f2eff1" >{{$row->itemname}}</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mt-4" >
                    <h4>باقة مميزة لاوقاتكم المميزة </h4>
                    <h4> لعدد:{{$row->qty}}</h4>
                    <h4>بقيمة: {{$row->price}} ريال</h4>
                    <h4 mt-2>
                        <form action="{{route('addtocart',['id'=>$row->id])}}" method="post">
                             @csrf
                              <label for="date mt-2">التاريخ:</label>
                              <input type="date" id="date" name="date">
                              
                        </form>
                    </h4>
                        
                        
                    
                   

                </div>
                <div class="col-sm-4 text-center">
                    <img src="/image/{{$row->image}}" width='220' hight='150'>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary  mt-2" type="submit">اضافة للسلة</button>

                </div>

            </div>
        </div>
    </div>
  @endforeach
    </div>
  </div>
  
</div>
@endsection
