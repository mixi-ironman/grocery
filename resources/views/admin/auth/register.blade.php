<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
  </style>
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
      
      @if(session('msg'))
      <p class="alert alert-success text-center mt-3">{{ session('msg') }}</p>
      @endif

        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>
                      @if(Session::get('account'))
                      <p style="margin-bottom: 10px;background-color: pink;display: inline-block;padding: 10px;border-radius: 5px;" class="text-danger">{{Session::get('account')}} </p>
                      @endif
                  
                      <form class="mx-1 mx-md-4" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Họ và tên</label>
                            <input type="text" id="form3Example1c" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Họ và tên"/>
                            {{-- @if($error->has('username'))
                                {{ $errors->first('username') }}
                            @endif --}}
                            @error('name')
                              <p class="error alert alert-danger" style="margin-top:5px">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Username</label>
                            <input type="text" id="form3Example1c" name="username" value="{{ old('username') }}" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="Username..."/>
                            {{-- @if($error->has('username'))
                                {{ $errors->first('username') }}
                            @endif --}}
                            @error('username')
                              <p class="error alert alert-danger" style="margin-top:5px">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Mật khẩu</label>
                            <input type="password" id="form3Example4c" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Nhập password"/>
                            @error('password')
                              <p class="error alert alert-danger" style="margin-top:5px">{{ $message }}</p>
                            @enderror
                          </div>
                        </div>
                        <a href="{{ route("admin-login") }}" style="padding-left: 13px;">Đăng nhập!</a>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg btn-register">Đăng ký</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@if($errors->any())
  <script>
      // Sử dụng JavaScript để đặt focus vào ô input đầu tiên không hợp lệ
      document.addEventListener('DOMContentLoaded', function() {
          let firstErrorInput = document.querySelector('.is-invalid');
          if (firstErrorInput) {
              firstErrorInput.focus();
          }
      });
  </script>
@endif
</body>
</html>