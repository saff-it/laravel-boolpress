@extends('layouts.app')

@section('content')

<form action="{{ route('admin.posts.update', $post->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <label for="input-title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control">
      </div>

    <div class="col-12">
      <label for="input-post_content" class="form-label">Post Content</label>
      <input type="text" class="form-control" id="post_content" name="post_content" required>
    </div>

    <div class="col-12">
        <label for="input-post_date" class="form-label">Post date</label>
        <input type="date" class="form-control" id="post_date" name="post_date" required>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  <input type="file" name="post_image_uploaded" required>
@endsection