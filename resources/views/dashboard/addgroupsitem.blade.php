@extends('layouts.dashboard')

@section('content')
<div claas="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class="alert text-center" style="background-color:#EEE9ED">اضافة مجموعات الأصناف</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('saveitemgroup')}}" method="post">
                        @csrf
                        <laber for="itemgrname">اسم المجموعة</laber>
                        <input type="text" name="Itemgroupsname" id="itemgrname">
                        <laber for="itemgrname">الصورة </laber>
                        <input type="text" name="image" id="image">
                        <div class="row mt-3">
                            <div class="col">
                                <button class="btn btn-primary" type="submit" >حفظ</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            
            
            
            <div class="card mt-3">
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                              <th>رقم المجموعة</th>
                              <th>اسم المجموعة</th>
                              <th>الصورة</th>
                              <th colspan="2">اجراء </th>
                            </tr>
        
                        </thead>
                        <tbody>
                          @foreach($data as $row)
                            <tr>
                              <td>{{$row->id}}</td>
                              <td>{{$row->Itemgroupsname}}</td>
                              <td><img src="/image/{{$row->image}}" width="50" hight="100"></td>
                              <td><a href="{{route('edit',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square" style="color:#c3a7b9"></i></a></td>
                              <td><a href="{{route('del',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
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