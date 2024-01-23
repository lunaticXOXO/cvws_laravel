@extends('layouts.main')

@section('container')


<div class="container-fluid">
    <div class="container">
        <div class="row">
        @isset($customer_session)

            <div class="col-5">
                <div class="box">
                    <h3>Account Information</h3>
                        <p class="lead text-start">Email    : {{$customer_session->email}}</p>
                        <p class="lead text-start">Username : {{$customer_session->name}}</p>
                           
                </div>
            </div>

            <div class="col-5">
                <div class="box">
                    <h3>Profile Customer</h3>
                        <p class="lead text-start">ID Customer   : {{$customer_session->idcustomer}} </p>
                        <p class="lead text-start">Nama Customer : {{$customer_session->namacustomer}}</p>
                        <p class="lead text-start">Adress        : {{$customer_session->adress}}</p>
                        <p class="lead text-start">City          : {{$customer_session->city}}</p>
                </div>
            </div>
                
        @endisset

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