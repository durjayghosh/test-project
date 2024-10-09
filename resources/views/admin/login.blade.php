<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin-login-assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('admin-login-assets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-login-assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('admin-login-assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Admin Login - {{ config('app.name')}}</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    {{--  <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('frontend/home/logo/RominusLogo.png') }}');"></div>  --}}
    <div class="bg order-1 order-md-2" style="align-items: center;
    justify-content: center;
    display: flex;">

    <div class="text-center">
        <div><img src="{{ asset('admin-login-assets/images/bg.webp') }}" alt="" class="w-100 h-100"></div>
    </div>


    </div>


    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>WIGOMANIA</strong> Dashboard</h3>
            {{--  <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>  --}}
            <div class="server-messages">
              @if( Session::has( 'success' ))
              <div class="alert alert-success">
                {{ Session::get( 'success' ) }}
              </div>
              @elseif( Session::has( 'error' ))
              <div class="alert alert-danger">
                {{ Session::get( 'error' ) }}
              </div>
              @endif
            </div>
            <form method="post" action="{{route('admin.login')}}" autocomplete="off" id="formSubmit">
              @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Your Email" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <span class="invalid-feedback">
                  {{ $errors->first('email') }}
                  </span>
                @endif
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Your Password" id="password" name="password">
                @if ($errors->has('password'))
                  <span class="invalid-feedback">
                  {{ $errors->first('password') }}
                  </span>
                @endif
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto">
                  <a href="#" class="forgot-pass" data-toggle="modal" data-target="#exampleModalCenter">Forgot Password</a>
                </span>
              </div>
              <button type="submit" class="btn btn-block btn-primary"><span style="display:none;" id="loadSpin"><i class="fa fa-spinner fa-spin"></i> Wait</span> <span id="hideButton">Login In</span></button>
              {{--  <input type="submit" value="Log In" class="btn btn-block btn-primary">  --}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('admin.forgetpassword') }}">
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

      </div>
    </div>
  </div>


    <script src="{{ asset('admin-login-assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin-login-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-login-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-login-assets/js/main.js') }}"></script>

    <script>
        $( "#formSubmit" ).submit(function( event ) {
            $('#loadSpin').show('pawan');
            $('#hideButton').hide('pawan');
        });
    </script>
  </body>
</html>
