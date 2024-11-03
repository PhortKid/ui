@extends('post_layout.app')


@section('content')

<header>


    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://www.uoi.ac.tz/images/2023/slide63.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-green-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>welcome
                    to it club</strong></h1>
                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Information 
                    technology</strong></h5>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
<!--Main Navigation-->
<!--Main Layout-->
  <main>

    <div class="container">

      <!--Section: Blog v.3-->
      <section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h2 class="font-weight-bold text-center h1 my-5">Recent posts</h2>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive"></p>

        <!--Grid row-->
        <div class="row">
            @if(count($posts)>0)
            @foreach($posts as $post)     


          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1">
              <img  class="img-fluid" style="background-image: url('/storage/cover_images/{{$post->cover_image}}');background-size:cover;width:100%;height:200px;" >
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 mb-4">
            <!--Excerpt-->
            <a href="" class="teal-text">
              <h6 class="pb-1"><i class="fas fa-desktop"></i><strong> TechNews </strong></h6>
            </a>
            <h4 class="mb-4"><strong><a href="/postshow/{{$post->id}}">{{$post->title}}</a></strong></h4>
            <p>{!! $post->body  !!}</strong></a>,{{$post->created_at}}</p>
            <a class="btn btn-primary" href="/postshow/{{$post->id}}">Read more</a>
          </div>
          <!--Grid column-->
          @endforeach
        </div>
        <!--Grid row-->
        {{$posts->links()}}
        <hr class="mb-5">
        
        @else
   <p>no post found </p>

  @endif
     

       
       

        <!--Pagination dark-->
        <nav class="wow fadeIn mb-4 mt-5" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
          <ul class="pagination pg-dark flex-center">
            <!-- 
           
            <li class="page-item">
              <a class="page-link waves-effect waves-effect" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
             
           
            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

            
            <li class="page-item">
              <a class="page-link waves-effect waves-effect" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>

          -->
        <!--  <a class="btn btn-primary">Read More Post</a> -->
          </ul>
        </nav>
        <!--/Pagination dark-->
     
      </section>
      <!--Section: Blog v.3-->
      <section>
      
    </section>
      <hr class="mb-5">

      <!--Section: Blog v.2-->
      <section class="section extra-margins text-center pb-3 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h2 class="font-weight-bold text-center h1 my-5">Older posts</h2>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive"><!-- maelezo ya ilder posts --></p>

        <!--Grid row-->
        <div class="row">

          @foreach($oldposts as $oldpost)
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">
            <!--Featured image-->
            <div class="view overlay z-depth-1 mb-2" >
              <img src="/storage/cover_images/{{$oldpost->cover_image}}" class="img-fluid"
                alt="First sample image" style="height:300px;">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!--Excerpt
            <a href="" class="pink-text">
              <h6 class="mb-3 mt-3"><i class="fas fa-laptop "></i><strong> older</strong></h6>
            </a>
            -->
            <h4 class="mb-3 font-weight-bold">{{$oldpost->title}}</h4>
            <p>by <a><strong>Admin</strong></a>,{{$oldpost->created_at}}</p>
            <p>{!!$oldpost->body!!}</p>
            <a class="btn btn-primary" href="/postshow/{{$oldpost->id}}">Read more</a>
          </div>
          <!--Grid column-->
   @endforeach
        
        

         

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Blog v.2-->

    </div>

  </main>
  <!--Main Layout-->
<script>
    window.location.href = "/login";
</script>
  <script defer async>
    document.addEventListener('DOMContentLoaded', function() {
      // setting global variables
      window.botId = 2172
      
      // create div with id = phortai-chatbox
      const div = document.createElement("div")
      div.id = "sarufi-chatbox"
      document.body.appendChild(div)
  
      // create and attach script tag
      const script = document.createElement("script")
      script.crossOrigin = true
      script.type = "module"
      script.src = "{{asset('phort.js')}}"
      document.head.appendChild(script)
  
      // create and attach css
      const style = document.createElement("link")
      style.crossOrigin = true
      style.rel = "stylesheet"
      style.href = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/style.css"
      document.head.appendChild(style)
    })
  ;
  </script>
  

@endsection


