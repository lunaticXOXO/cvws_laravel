@extends('layouts.main')

@section('container')

<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-12">
                    <h1 class="text-center">Tambah Data Customer</h1>
                    
                    <form action="/addcustomer_session" method="POST">
                        @csrf
                        <div class="container">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if(session('failed'))
                                    <div class="alert alert-danger">
                                        {{ session('failed') }}
                                    </div>
                                @endif
                        </div>

                           <div class="form-floating">
                                <input type="text" name = "idcustomer" class="form-control">
                                <label for="idcustomer" class="form-label">ID Customer</label>
                           </div> 
                           <br>

                           <div class="form-floating">
                                <input type="text" name = "namacustomer" class="form-control">
                                <label for="namacustomer" class="form-label">Nama Customer</label>
                           </div> 
                           <br>

                           <div class="form-floating">
                                <input type="text" name = "adress" class="form-control">
                                <label for="adress" class="form-label">Alamat</label>
                           </div> 
                           <br>

                           <div class="form-floating">
                                <input type="text" name = "city" class="form-control">
                                <label for="city" class="form-label">Kota</label>
                           </div> 
                           <br>
                           <div class="form-floating">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                           
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

<style>

.box {
      width: 100%;
      height: 100%;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color:#E6F3EB;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

</style>