@extends('admin.layouts.index')
@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="min-height: 500px">
  <div class="card">
      <h5 class="card-header">List Post </h5>
      <div class="card-body">
          <div class="table-responsive ">
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Meta</th>
                          <th scope="col">Content</th>
                          <th scope="col" colspan="2">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->metaTitle}}</td>
                            <td>{{$post->content}}</td>
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