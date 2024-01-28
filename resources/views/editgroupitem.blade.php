@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert text-center" style="background-color:#EEE9ED">تعديل بيانات مجموعات الاصناف</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{route('update')}}"  method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <label for="x1">اسم العنصر</label>
                        <input type="text" name="namegroup" id="x1" value="{{$item->Itemgroupsname}}">

                       
                        <label for="x1">الصورة </label>
                        <input type="text" name="image" id="x1" value="{{$item->image}}">

                        <div class="text-center">
                            <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                        </div>
                    </form>
                   
               </div>
           </div>
             
        </div>
    </div>


    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>
@endsection
