@extends('layouts.app')

@section('content_header')
    <h1>Products</h1>
@stop
@section('content')

    <div class="row" id="products">

        <div class="col-md-4">
          <div class="card card-outline card-danger">
            <div class="card-header">
              <h3 class="card-title" id="models-title">Create new model</h3>
            </div>

     
              @csrf
              <input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
              <input id="hdn-id" class="hdn-id" type="hidden" name="id" value="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="model">Model</label>
                      <input type="text" class="form-control" id="model" name="model" placeholder="Model">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="button" class="btn btn-primary btn-model-add" id="btn-model">Submit</button>
                    <button type="button" class="btn btn-primary btn-model-update" id="btn-model" hidden>Update</button>
                  </div>
            <!-- </form> -->

          </div>
        </div>


      <div class="col-md-8">
    		<div class="card card-outline card-danger">
		      <div class="card-header">
		        <h3 class="card-title">Models List</h3>
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
                    <tr>
                        <td>1</td>
                        <td>Item Name 1</td>
                        <td>65</td>
                    </tr>
                </tbody>
            </table>

		      </div>
    		</div>
    	</div>
    </div>
@endsection