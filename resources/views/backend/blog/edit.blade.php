@extends('backend.layouts.app');

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="text-center">
                <h1 class=""> Create a Post </h1>
                </div>

                <form action="{{ route('blogs.update',$blogs->id) }}" method="POST"> 
                  @csrf
                  @method("PATCH")
                    <div class="mb-3">
                      <label for="title" class="form-label">Title of Post</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ $blogs->title }}">
                      <span class="text-sm  ">@error('title'){{$message}}@enderror</span>

                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description" >{{ $blogs->description }}</textarea>
                      <span class="text-sm  ">@error('description'){{$message}}@enderror</span>

                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>




            </div>

          
   

  
           

            
        </div>
    </div>
</div>

@endsection






{{-- 
<form action="{{ route('blogs.update',$blogs->id) }}" method="POST">
  @csrf
  @method('PATCH')
  <div class="mb-3">
      <label for="title" class="form-label">Title of Post</label>
      <input type="text" class="form-control" id="title" name="title"  value="{{ $blogs->title }}">
      <span class="text-sm  ">@error('title'){{$message}}@enderror</span>

    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" id="description" name="description" value="{{ $blogs->description }}" ></textarea>
      <span class="text-sm  ">@error('description'){{$message}}@enderror</span>

    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
</form>
 --}}















{{-- <section class="ptb-150">
  <div class="container">
    <div class="row mb-none-30 justify-content-center">
              <div class="col-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
        <div class="blog-post hover--effect-1 has-link">
          <div class="card" style="width: 18rem;">
            <img src="https://aamearning.com/assets/images/default.png" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">{{ $blog->title }}</h5>
              <p class="card-text">{{ $blog->description }}</p>
              <a href="{{ route('post',$blog->id ) }}" class="btn btn-primary float-right">Read More</a>
            </div>
          </div>
      <div class="mb-4 mt-2">
              <a type="button" href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-primary">Edit</a>
              <a type="button" href="{{ route('lists.destroy',$blog->id) }}" class="btn btn-danger" >Delete</a>
      </div>
          </div>
        </div>
      </div>

    
  </div>
</section> --}}
