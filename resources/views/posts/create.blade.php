@extends('layouts.app')

@section('content')
  <div class="row m-5">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5>Add Post</h5>
          <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3 mt-5">
              <label class="from-label" for="title">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label class="from-label" for="image">Image</label>
              <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
              <label class="from-label" for="content">Content</label>
              <textarea class="from-control" name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
          </form>
        </div>
      </div>
    </div>
  @endsection
