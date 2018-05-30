@extends('admin.layout.admin')

 @section('content')
   <div class="row">
     <div class="">
  <h3>Products</h3>

  <ul>
  	@forelse($products as $product)
  	<li>
  		<h5>Name of product:{{$product->name}}</h5>
      <h5>Name of category:{{$product->category->name}}</h5>
      <form action="{{ route('product.destroy',$product->id) }}" method="POST">
        {{ csrf_field()}}
        {{ method_field('DELETE')}}
        <input type="submit"  value="Delete" class="btn btn-danger">
        
      </form>
  	</li>
  	 @empty
  	 <h3>NO product</h3>

  	@endforelse
  </ul>
</div>
</div>

 @endsection