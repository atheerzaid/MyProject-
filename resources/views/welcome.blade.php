@extends('layouts.app')


@section('content')
<?php
$c=0;
?>
<div class="container">

   
   
   <div class="row-sm-4 mt-1">
      <h1 class="alert text-center mt-4 p-4"style="background-color:#EEE9ED">كل ماتحتاجة لمناسباتك تجده هنا </h1>

   </div>

   @while($c <$count)
  
   <div class="row  mt-20 text-center d-flex align-items-center justify-content-center">
        
   @if($c<$count)
         <div class="col-sm-5 mt-8  text-center">
            <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
               <div class="card mt-6 p-7" style="background-color: #f8f6f7">
                  <div class="card-body mt-8 d-flex justify-content-center">
                     <img src="/image/{{$data[$c]->image}}" width="400" hight="360">   
                  </div>
               </div>
            </a>
         </div>

         <?php $c++?>
         @endif


         @if($c<$count)
         <div class="col-sm-5 mt-8 text-center">
            <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
               <div class="card mt-6 p-7" style="background-color: #f8f6f7">
                  <div class="card-body mt-8 d-flex justify-content-center">  
                     <img src="/image/{{$data[$c]->image}}" width="400" hight="360">
                  </div>
               </div>
            </a>
         </div>

     
         <?php $c++?>
         @endif


       

        
   </div>
      
      @endwhile
  
</div>


@endsection
