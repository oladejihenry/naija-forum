@extends('adminlayout.master')


@section('title')
	Registered Users | Naijaswift
@endsection



@section('content')

<?php
$str = '1';
?>
<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title">Registered Users</h4>
			<form method="GET" action="{{ route('searchadmin') }}" accept-charset="UTF-8">
              <div class="input-group no-border">
                <input type="text" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search for users...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
		  </div>
		  	<div class="card-body">
			    <div class="table-responsive">
			      <table class="table">
			        <thead class=" text-primary">
			          <th>S/N</th>
			          <th>ID</th>
			          <th>Name</th>
			          <th>Username</th>
			          <th>Email</th>
			          <th>Usertype</th>
			          <th>Verified</th>
			          <th>Edit</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@foreach ($users as $row)
			          <tr>
			          	<td>{{ $str++ }}</td>
			          	<td>{{ $row->id }}</td>
			            <td>{{ $row->name }}</td>
			            <td>{{ $row->username }}</td>
			            <td>{{ $row->email }}</td>
			            <td>{{ $row->usertype }}</td>
			            <td>{{ $row->email_verified_at }}</td>
			            <td>
			            	<a href="/role-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
			        	</td>
			        	<td>
			        		<form action="/role-delete/{{ $row->id }}" method="post">
			        			{{ csrf_field() }}
			        			{{ method_field('DELETE') }}
			            		<button type="submit" class="btn btn-danger">Delete</button>
			            	</form>
			        	</td>
			          </tr>
			          @endforeach
			        </tbody>
			      </table>
			    </div>
			</div>
		</div>
		<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
				{{ $users->onEachSide(1)->links() }} 
			</ul>
		</nav>
  	</div>         
</div>



@endsection


@section('scripts')

@endsection