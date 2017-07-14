@extends('masterprobet')
@section('content')

<div class="head"><h1>PROMOTION</h1></div>
<div class="col-12 col-s-12 aside"><img src="/DataTemplate/image/promotion/promotion.jpg" alt="..."></div>

    <div class="col-12 col-s-12 aside"></div>
    @foreach($contents as $con)
        <div class="head"><h1>{!! $con -> title !!}</h1></div>
    <div class="col-12 col-s-12 aside">
        {{-- <div class="col-12 col-s-12 ">
            <p>{!! $con -> body !!}</p>
        </div> --}}
        
        <blockquote style="background-color: hsla(0, 0%, 100%, 0.5);color: black;">
         <p>{!! $con -> body !!}</p>
        <p>{!! $con -> keywords !!}</p>
        </blockquote>

    
        {{-- <div class="col-12 col-s-12 "></div> --}}
    </div> 
    @endforeach
    
@endsection