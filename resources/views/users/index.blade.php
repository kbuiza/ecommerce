@extends('layouts.app')

@section('content_header')
    <h1>Users</h1>
@stop
@section('content')

    <div class="row" id="products">

        <div class="col-md-4">
          <div class="card card-outline card-danger">
            <div class="card-header">
              <h3 class="card-title" id="models-title">Create new User</h3>
            </div>

          <form method="POST" action="{{ route('users.store') }}" autocomplete="off">
              @csrf
              <input id="hdn-token" class="hdn-token" type="hidden" name="_token" value="{{csrf_token()}}">
              <input id="hdn-id" class="hdn-id" type="hidden" name="id" value="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <label for="Role">Role</label>
                      <select class="form-control" name="roles" aria-label="Default select example">
                        <option selected>Select Role</option>
                        <option value="ADM">Admin</option>
                        <option value="USR">User</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation">Confirm Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-user-add" id="btn-user">Submit</button>
                    <button type="button" class="btn btn-primary btn-user-update" id="btn-user" hidden>Update</button>
                  </div>
            </form>

          </div>
        </div>


      <div class="col-md-8">
    		<div class="card card-outline card-danger">
		      <div class="card-header">
		        <h3 class="card-title">Users List</h3>
		      </div>
		      <div class="card-body">

		        <table id="tbl-applications" class="display table table-bordered" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{ $user->roles()->first()->name}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

		      </div>
    		</div>
    	</div>
    </div>
@endsection