@extends('layout.layout')
@section('content')
    
@foreach ($product as $item)
<div class="panel panel-default">
    <div class="panel-body">
        <img src="{{$item['pgallery']}}" alt="">
    </div>
    <div class="panel-footer">Panel Footer</div>
  </div>
@endforeach
  

@endsection