@extends('adminlayout.master')

@section('title')
	Dashboard | Naijaswift
@endsection



@section('content')

<?php
	$sum = DB::table('posts')->count();
	$total = DB::table('users')->count();
  
?>
<div class="row">
  	<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Registered Users</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$total}}</p>
      </div>
    </div>
  </div> 


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Posts</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$sum}}</p>
      </div>
    </div>
  </div> 

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Announcement</h5>
        <br>
        <hr>
        <p class="btn btn-primary"></p>
      </div>
    </div>
  </div>       
</div>



@endsection


@section('scripts')

@endsection