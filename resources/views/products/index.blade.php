@extends('layouts.app')

@section('content_header')
    <h1>Products</h1>
@stop
@section('content')

    <div class="row" id="products">

        <div class="col-md-4">
          <div class="card card-outline card-danger">
            <div class="card-header">
              <h3 class="card-title" id="models-title">Create new Product</h3>
            </div>

             <form method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
              @csrf
              <input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
              <input id="hdn-id" class="hdn-id" type="hidden" name="id" value="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="item-name">Item Name</label>
                      <input type="text" class="form-control" id="item-name" name="item_name" placeholder="Item Name">
                    </div>
                    <div class="form-group">
                      <label for="item-name">Price</label>
                      <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
	                    <label for="item_name" value="{{ __('Product Image') }}" />
	                        <input type="file" name="image" placeholder="Choose image" id="image">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-product-add" id="btn-product">Submit</button>
                    <button type="button" class="btn btn-primary btn-product-update" id="btn-product" hidden>Update</button>
                  </div>
            </form>

          </div>
        </div>


      <div class="col-md-8">
    		<div class="card card-outline card-danger">
		      <div class="card-header">
		        <h3 class="card-title">Products List</h3>
		      </div>
		      <div class="card-body">

		        <table id="tbl-applications" class="display table table-bordered" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Item Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($items as $item)
                	<tr>
                	    <td>{{$item->id}}</td>
                	    <td>{{$item->item_name}}</td>
                	    <td>{{$item->price}}</td>
                	</tr>
                	@endforeach
                </tbody>
            </table>

		      </div>
    		</div>
    	</div>
    </div>
@endsection