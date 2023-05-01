<link rel="stylesheet" href="{{ mix('backend/css/app.css') }}">

@include('backend.partials.header')



  <div class="nk-content text-center " >
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <article > 
                    <!-- Post header-->
                    <header class="mb-5">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1  ">Welcome to Blog Post!</h1>

                    </header>
                    <div class="row mx-3">
                    @foreach($blogs as $blog)
                        <div class="col-3 mb-5"> 
                    <div class="card " style="width: 18rem;">
                        <img src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title">{{ $blog->title }}</h5>
                          <p class="card-text">{{ $blog->description }}</p>
                          <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                </article>


             

            </div>
        </div>
  </div>

  @include('backend.partials.footer')



  <script src="{{ mix('backend/js/app.js') }}"></script>
