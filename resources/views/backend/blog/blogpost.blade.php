<link rel="stylesheet" href="{{ mix('backend/css/app.css') }}">

@include('backend.partials.header')


<div class="nk-content text-center">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>

                    </header>
                    <img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." />
                    <!-- Post content-->

                    <section class="mb-5 mt-5">
                        <div class="mb-2"> <h2>{{ $blog->title }}</h2></div>
                        <p class="fs-5 mb-4"> {{ $blog->description }} </p>
                    </section>
                </article>

            </div>
        </div>
    </div>
</div>

@include('backend.partials.footer')



<script src="{{ mix('backend/js/app.js') }}"></script>
