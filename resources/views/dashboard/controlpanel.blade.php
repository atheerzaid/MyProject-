@extends('layouts.dashboard')

@section('content')
<div claas="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="alert  text-center" style="background-color:#EEE9ED">بيانات  الاصناف</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>رقم العنصر</th>
                                <th>اسم العنصر</th>
                                <th>اسم المجموعة</th>
                                <th>السعر</th>
                                <th>الكمية</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data!=null)
            
                            @foreach($data as $row)
                               <tr>
                                 <td>{{$row->id}}</td>
                                 <td>{{$row->itemname}}</td>
                                 <td>{{$row->Itemgroupsname}}</td>
                                 <td>{{$row->price}}</td>
                                 <td>{{$row->qty}}</td>
                               </tr>
                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection