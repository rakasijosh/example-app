@extends('layout.layout')
@section('content')
    
<div class="container-fliud" style="margin-top:20px; ">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

      @if ($errors->any())
      <ul>
            
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
      @endif

      <form class="form-horizontal" action="product" method="POST">
        @csrf
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Product Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="pname" placeholder="Enter email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Product Price:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" name="pprice" placeholder="Enter password">
          </div>
        </div>
  
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Product Image:</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" id="pwd" name="pgallery" placeholder="upload file">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
  
</div>
@endsection