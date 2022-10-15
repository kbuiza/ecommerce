@extends('layouts.app')
@section('content_header')
    <h1>Shop</h1>
@stop
@section('content')

    @can('view products')
        <div class="row" style="padding-top: 3rem;padding-left: 5rem;padding-right: 3rem; width: 100%;">
        	@foreach($items as $item) 

	          	<div class="col-md-3 mt-2">
	                <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions">
                                <img src="{{asset($item->path)}}" class="card-img img-fluid" width="96" height="350" alt="">
                            </div>
                        </div>

                        <div class="card-body bg-light text-center">
                            <div class="mb-2">
                                <h6 class="font-weight-semibold mb-2">
                                    <a href="#" class="text-default mb-2" data-abc="true">{{$item->item_name}}</a>
                                </h6>

                                <!-- <a href="#" class="text-muted" data-abc="true">Laptops & Notebooks</a> -->
                            </div>

                            <h3 class="mb-0 font-weight-semibold">{{$item->price}}</h3>

                            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>

                            
                        </div>
                    </div>

					</div> 
            @endforeach
    	</div>

    @endcan
@endsection
