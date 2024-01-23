@extends('layouts.main')

@section('container2')

<div class="box">
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h1 class="text-center">Login Form</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        <label for="email" class="form-label">Email</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        <label for="password" class="form-label">Password</label>
                    </div>

                    <br>
                    <div class="form-floating">
                        <button name="submit" type="submit" class="btn btn-primary">Login</button>
                            <a class="btn btn-outline-dark" href="auth/google" role="button" style="text-transform:none">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="{{ asset('picture/google.png') }}" />
                            Login with Google
                            </a>
                    </div>
                  

                </form>
                <!-- <div class="form-floating">
                       <a href="auth/google">Login with Google</a>
                </div> -->
            </div>
            <div class="col-md-6">
            <img src="{{ asset('picture/train.jpg') }}" alt="train" class="img-fluid">
            </div>
        </div>
    </div>
</div>
</div>

<style>

.box {
      width: 100%;
      height: 30%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color:#E6F3EB;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .img-fluid {
      max-width: 120%;
      height: 90%;
    }

</style>


@endsection