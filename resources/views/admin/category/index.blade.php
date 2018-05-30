@extends('admin.layout.admin')

@section('content')
<div class="navbar">
	<a href="#" class="navbar-brand">Categories</a>
	<ul class="nav navbar-nav">
		@if(count($categories)>0)  <!--if categories is not empty-->
		 @forelse($categories as $category)

		<li>
			<a href="{{route('category.show',$category->id)}}">{{ $category->name }}</a>
		</li>

		@empty
		<h3>No data to display</h3>

		@endforelse
		@endif
	</ul>
</div>

	<!--modal to add category-->
	<a href="#modal-id" class="btn btn-primary" data-toggle="modal">Add Category</a>
	<div class="modal fade" id="modal-id">
	  <div class="modal-dialog" role="document">

	  	{!! Form::open(['route'=>'category.store','method'=>'post']) !!}
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Add Category</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
	        <div class="form-group">
	        	{{ Form::label('name','Name') }}
	        	{{ Form::text('name',null,array('class'=>'form-control') )}}
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Create</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	    {!! Form::close() !!}
	  </div>
	</div>

	<!--products display according to category-->
	@if(!empty($products))
	<section>
	    <h4>Products</h4>
	    <table class="table table-hover">
	    	<thead>
	    		<tr>
	    			<th>Products</th>
	    		</tr>
	    		
	    	</thead>
	    	<tbody>
	    		@forelse($products as $product)
	    		<tr>
	    			<td>{{$product->name}}</td>
	    		</tr>
	    		@empty
	    		<tr><td>No product to display</td></tr>

	    		@endforelse
	    	</tbody>
	    </table>
	</section>
	@endif
    
@endsection