@extends('backend.layouts.app');

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="text-center">
                <h1 class=""> Create a Post </h1>
                </div>

                <form action="{{ route('blogs.store') }} " method="POST"> 
                  @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Title of Post</label>
                      <input type="text" class="form-control" id="title" name="title">
                      <span class="text-sm  ">@error('title'){{$message}}@enderror</span>

                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description"></textarea>
                      <span class="text-sm  ">@error('description'){{$message}}@enderror</span>

                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>




            </div>

          
   

  
           

            
        </div>
    </div>
</div>

@endsection




















