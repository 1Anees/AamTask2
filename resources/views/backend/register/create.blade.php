<link rel="stylesheet" href="{{ mix('backend/css/app.css') }}">







<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

            <form method="POST" action="/register">
                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg"  >Your Name</label>

                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="name" value="{{ old('name') }}"/>
                  @error('name') <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>@enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>

                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"  value="{{ old('email')}}"/>
                  @error('email') <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>@enderror
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>

                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" value="{{ old('password') }}"/>

                  @error('password') <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>@enderror

                </div>

               

               

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








@include('backend.partials.footer')










<script src="{{ mix('backend/js/app.js') }}"></script>
