@extends('admin.layouts.index')
@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="min-height: 500px">
  <div class="card">
      <h5 class="card-header">List User </h5>
      <div class="card-body">
          <div class="table-responsive ">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col" colspan="2">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a class="btn btn-primary" href="">Edit</a></td>
                            <td><a class="btn btn-danger" href="">Delete</a></td>
                        </tr>
                      @endforeach                     
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection