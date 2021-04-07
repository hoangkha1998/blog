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
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                      </tr>
                  </thead>
                  <tbody>
                      @for ($i =0; $i<10; $i++)
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                      @endfor
                      
                      
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection