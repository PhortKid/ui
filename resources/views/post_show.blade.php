@extends('post_layout.app')


@section('content')


<div class="div" style="padding-top: 100px"></div>
<div class="container ">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="Post Image">
          <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{!!$post->body!!}</p>
            <!-- Social Media Share Buttons -->
            <div class="mb-3">
              <span>Share:</span>
              <a href="#" class="btn btn-sm btn-primary"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="btn btn-sm btn-info"><i class="fab fa-twitter"></i></a>
              <a href="#" class="btn btn-sm btn-danger"><i class="fab fa-pinterest"></i></a>
            </div>
            <p>By Admin</p>
            <a href="{{url('/')}}" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Recent Posts Section -->
        <div class="recent-posts">
          <h3>Recent Posts</h3>
      @foreach($recentposts as $recentpost)
          <div class="recent-post-item">
            <div class="card mb-3">
                <img src="/storage/cover_images/{{$recentpost->cover_image}}" class="card-img-top" alt="Post Image">
                <div class="card-body">
                  <h5 class="mb-4"><strong><a href="/postshow/{{$recentpost->id}}">{{$recentpost->title}}</a></strong></h5>

                  <a href="/postshow/{{$recentpost->id}}" class="btn btn-primary">Read</a>
                </div>
              </div>
          </div>
   @endforeach
         
          <!-- Add more recent posts as needed -->
        </div>
      </div>
    </div>
  </div>




@endsection