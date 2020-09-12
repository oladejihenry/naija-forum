@extends('adminlayout.master')


@section('title')
	All Posts | Naijaswift
@endsection



@section('content')

<?php 
$id = '1';

?>

<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title">All Posts</h4>
		    <form method="GET" action="{{ route('searchadmin') }}" accept-charset="UTF-8">
              <div class="input-group no-border">
                <input type="text" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search...">
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
			          <th>Posts ID</th>
			          <th>Subject</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@foreach ($post as $row)
			          <tr>
			          	<td>{{ $id++ }}</td>
			          	<td>{{ $row->id }}</td>
			            <td><a href="{{ route('post.show',$row->slug) }}" target="_blank">{{ $row->subject }}</a>
			            </td>
			            <td>
				        	<form action="/post-delete/{{ $row->id }}" method="post">
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
				{{ $post->onEachSide(1)->links() }} 
			</ul>
		</nav>
  	</div> 
</div>



@endsection


@section('scripts')

@endsection