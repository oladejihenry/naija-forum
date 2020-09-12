@extends('adminlayout.master')


@section('title')
	Search Result | Naijaswift
@endsection



@section('content')
<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title">Registered Users</h4>
		  </div>
		  	<div class="card-body">
			    <div class="table-responsive">
			      <table class="table">
			        <thead class=" text-primary">
			          <th>ID</th>
			          <th>Name</th>
			          <th>Username</th>
			          <th>Email</th>
			          <th>Usertype</th>
			          <th>Edit</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@foreach ($search as $search)
			          <tr>
			          	<td>{{ $search->id }}</td>
			            <td>{{ $search->name }}</td>
			            <td>{{ $search->username }}</td>
			            <td>{{ $search->email }}</td>
			            <td>{{ $search->usertype }}</td>
			            <td>
			            	<a href="/role-edit/{{ $search->id }}" class="btn btn-success">Edit</a>
			        	</td>
			        	<td>
			        		<form action="/role-delete/{{ $search->id }}" method="post">
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
  	</div>         
</div>



@endsection


@section('scripts')

@endsection