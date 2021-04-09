@extends('admin.layouts.index')
@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="min-height: 500px">
  <div class="section-block" id="basicform">
    <h3 class="section-title">Create post</h3>
</div>
<div class="card">
    <h5 class="card-header">Basic Form</h5>
    <div class="card-body">
        <form method="POST" action="{{route('admin.post.store')}}">
            @csrf
            <div class="form-group">
                <label for="inputText3" class="col-form-label">Title</label>
                <input id="inputText3" type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="inputEmail">Meta Title</label>
                <input id="inputEmail" type="text" placeholder="" class="form-control" name="metaTitle">
            </div>            
            {{-- <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">File Input</label>
            </div> --}}
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content"></textarea>
            </div>
            <div class="form-group">
              <label class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox"  class="custom-control-input" name="isBanner" value="isBanner"><span class="custom-control-label">Is Banner</span>
              </label>
              <label class="custom-control custom-checkbox custom-control-inline">
                  <input type="checkbox" class="custom-control-input" name="isDisplay" value="isDisplay"><span class="custom-control-label">Is Display</span>
              </label>
            </div>
            <div class="form-group text-center" >
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>    
</div>
</div>
@endsection