@extends('layouts.main')

@section('container2')

<div class="box bg-secondary-subtle">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                        <div class="col-md-5">
                        <h1 class="text-center">Register Form</h1>
                            <form action="/register_customer" method="POST">
                            @csrf
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    <label for="name" class="form-label">Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                    <label for="email" class="form-label">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    <label for="password" class="form-label">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input type="password" name="repassword" class="form-control @error('repassword') is-invalid @enderror">
                                    <label for="repassword" class="form-label">Re-Password</label>
                                    @error('repassword')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                                    
                                <br>
                                <div class="form-floating">
                                    <button name="submit" type="submit" class="btn btn-primary">Register</button>
                                </div>
                                
                            </form>
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
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      

      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .img-fluid {
      max-width: 120%;
      height: 90%;
    }




</style>

@endsection