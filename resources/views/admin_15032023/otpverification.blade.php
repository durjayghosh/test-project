<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{background-image: url({{url('frontend/image/bg1.jpg')}});background-size: cover; background-position: center;} .height-100{height:100vh}.card{width:400px;border:none;height:400px;box-shadow: 0px 5px 20px 0px #d2dae3;z-index:1;display:flex;justify-content:center;align-items:center}.card h6{color:#0dcaf0;font-size:20px}.inputs input{width:40px;height:40px}input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button{-webkit-appearance: none;-moz-appearance: none;appearance: none;margin: 0}.card-2{background-color:#fff;padding:10px;width:350px;height:100px;bottom:-50px;left:20px;position:absolute;border-radius:5px}.card-2 .content{margin-top:50px}.card-2 .content a{color:red}.form-control:focus{box-shadow:none;border:2px solid red}.validate{border-radius:20px;height:40px;background-color:#0dcaf0;border:1px solid #ffc107;width:140px}.invalid-feedback{display: block}
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

    <title>Admin Login - {{ config('app.name')}}</title>
  </head>
  <body>
    <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="position-relative">
            <div class="card p-2 text-center">
                <form method="post" action="{{ route('admin.resetpassword')}}" autocomplete="off">
                    @csrf
                    <input type="hidden" name="email" value="{{$email}}">
                    <h6>Please enter the one time password <br> to verify your account</h6>
                    <div>
                        <span>A code has been sent to your mail</span> <small>{{Str::limit($email, 5, '***')}}</small>
                    </div>
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                        <input class="m-2 text-center form-control rounded" type="text" name="otp[]" autocomplete="off" value="" id="first" maxlength="1" />
                        <input class="m-2 text-center form-control rounded" type="text" name="otp[]" autocomplete="off" value="" id="second" maxlength="1" />
                        <input class="m-2 text-center form-control rounded" type="text" name="otp[]" autocomplete="off" value="" id="third" maxlength="1" />
                        <input class="m-2 text-center form-control rounded" type="text" name="otp[]" autocomplete="off" value="" id="fourth" maxlength="1" />
                        <input class="m-2 text-center form-control rounded" type="text" name="otp[]" autocomplete="off" value="" id="fifth" maxlength="1" />
                        <input class="m-2 text-center form-control rounded" type="text" name="otp[]" autocomplete="off" value="" id="sixth" maxlength="1" />
                    </div>
                    <div class="">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" autocomplete="new-password" value="" class="form-control" id="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="text" name="confirm_password" autocomplete="new-password"  value="" class="form-control" id="confirmPassword">
                        @if ($errors->has('confirm_password'))
                            <span class="invalid-feedback">
                            {{ $errors->first('confirm_password') }}
                            </span>
                        @endif
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-danger px-4 validate">Validate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

        function OTPInput() {
            const inputs = document.querySelectorAll('#otp > *[id]');
            for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();
        });

        var url = '{{route("admin.resetpassword")}}';
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
  </body>
</html>
