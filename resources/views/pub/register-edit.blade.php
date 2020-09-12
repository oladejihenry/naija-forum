@extends('adminlayout.master')


@section('title')
Edit-Registered Users | Naijaswift
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Edit Role for Registered User.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="/role-register-update/{{ $users->id }}" Method="POST">
								{{ csrf_field() }}
								{{ method_field('PUT') }}

								<div class="form-group">
								    <label>Name</label>
								    <input type="text" name="name" value="{{ $users->name }}" class="form-control">
							  	</div>
							  	<div class="form-group">
								    <label>Give Role</label>
								    <select name="usertype" class="form-control">
								    	<option value=""></option>
								    	<option value="admin">Admin</option>
								    	<option value="">None</option>
								    </select>
							  	</div>
							  	<button type="submit" class="btn btn-success">Update</button>
							  	<a href="/role-register" class="btn btn-danger">Cancel</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection

@section('scripts')

@endsection