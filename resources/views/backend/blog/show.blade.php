<style>
  #outer{
    text-align:center; 
  }
  .inner{
    display: inline-block;
  }
</style>
@extends('backend.layouts.app');

@section('content')


<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">


<div class="card card-default">
  <div class="card-header">
    <h2> All Blogs</h2>

  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $blog)
      <tr>
        <th scope="row">{{ $blog->id }}</th>
        <td>{{ $blog->title }}</td>
        <td>{{ Str::limit($blog->description, 15) }}</td>
        <td id="outer">
          <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-success inner" >View</a>
          <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-info inner" >Edit</a>
          <form method="POST" action="{{ route('blogs.destroy',$blog->id) }}" class="inner">
            @csrf
            @method('DELETE')
            <button type="submit"   class="btn btn-danger">Delete
            </button>
          </form>

        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>

  
</div>

        </div>
    </div>

     
</div>
</div>
</div>
@if(session()->has('success')) 
             <div class="fixed text-bg-success py-2 px-4  bottom-3 right-3 text-sm">
                <p>
                    {{ session('success') }}
                </p>
             </div>
             @endif

@endsection
