@extends('adminlayout.master')


@section('title')
	Add New Tag | Naijaswift
@endsection



@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-tag" method="POST">
      		{{ csrf_field() }}
	      <div class="modal-body">
	        
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Name:</label>
	            <input type="text" name="name" class="form-control" id="recipient-name">
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </div>
      </form>
    </div>
  </div>
</div>




<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title"> All Categories
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>	
		    </h4>
		  </div>
		  	<div class="card-body">
			    <div class="table-responsive">
			      <table class="table">
			        <thead class=" text-primary">
			          <th>ID</th>
			          <th>name</th>
			          <th>url</th>
			          <th>Edit</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@foreach ($category as $row)
			          <tr>
			            <td>{{ $row->id }}</td>
			            <td>{{ $row->name }}</td>
			            <td>{{ $row->url }}</td>
			            <td>
			            	<a href="/role-tagedit/{{ $row->id }}" class="btn btn-success">Edit</a>
			            </td>
			            <td>
			            	<form action="/tag-delete/{{ $row->id }}" method="post">
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
				{{ $category->onEachSide(1)->links() }} 
			</ul>
		</nav>
  	</div>         
</div>



@endsection


@section('scripts')

@endsection