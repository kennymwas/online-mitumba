@extends('layout.main')

@section('content')
    <br>
<div class="row">
    <div class="col-md-6 small-centered">
    	@if(count($errors)>0)
    	 @foreach($errors as $error)
    	   <div class="alert alert-danger">
    	   	 {{ $error }}
    	   </div>
    	 @endforeach
    	@endif
        <h3>Shipping Info</h3>

      <form action="{{ route('address.store')}}" method="post" >

        {{ csrf_field()}}

          <div class="form-group">
            <label id="addressline">Address Line</label>
            <input type="text" name="addressline" class="form-control">
          </div>
          <div class="form-group">
            <label id="town">Town</label>
            <input type="text" name="town" class="form-control">
          </div>
          <div class="form-group">
            <label id="county">County</label>
            <input type="text" name="county" class="form-control">
          </div>
          <div class="form-group">
            <label id="phone">Phone</label>
            <input type="text" name="phone" class="form-control">
          </div>
          <div class="form-group">
            <label id="alt_phone">Phone 2</label>
            <input type="text" name="alt_phone" class="form-control">
          </div>
          <input type="submit" value="Proceed to payment" name="submit" class="button button success">

      </form>
    </div>


</div>


@endsection