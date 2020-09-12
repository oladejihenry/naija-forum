@extends('adminlayout.master')


@section('title')
	All Posts Search | Naijaswift
@endsection



@section('content')


<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title">All Posts Results</h4>
		    <form method="GET" action="{{ route('searchpost') }}" accept-charset="UTF-8">
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
			          <th>ID</th>
			          <th>Subject</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@foreach ($search as $search)
			          <tr>
			          	<td>{{ $search->id }}</td>
			            <td>{{ $search->subject }}</td>
			            <td>
				        	<form action="/post-delete/{{ $search->id }}" method="post">
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