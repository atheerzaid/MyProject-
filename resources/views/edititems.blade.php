@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert text-center"style="background-color:#EEE9ED">تعديل بيانات العناصر </h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{route('updateitems')}}"  method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="itemname">اسم العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="itemname" id="itemname" value="{{$item->itemname}}">
                        
                        <label for="xprice1">سعر العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="price" id="price" value="{{$item->price}}">

                        <label for="qty">عدد العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="qty" id="qty" value="{{$item->qty}}">

                        <label for="color">الصورة </label>
                        <input type="text" class="form-control form-control-sm " name="image" id="image" value="{{$item->image}}">


                        <label for="itemgroupno">رقم مجموعة العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="itemgroupno" id="itemgroupno" value="{{$item->itemgroupno}}">

                        <div class="text-center">
                            <button class="btn btn-primary mt-2" onclick="showmessage()" type="submit">حفظ</button>
                        </div>
                    </form>
                   
               </div>
           </div>
             
        </div>
    </div>


    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>
<script >
    function showmessage(){
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "تم التعديل بنجاح",
    showConfirmButton: false,
    timer: 1500
  });
  }
  </script>
 
@endsection
