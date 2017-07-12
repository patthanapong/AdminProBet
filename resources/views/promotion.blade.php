@extends('masterprobet')
@section('content')
    @foreach($contents as $con)
       <h1>{!! $con -> title !!}</h1> 
       <p>{!! $con -> body !!}</p>
        
    @endforeach
@endsection