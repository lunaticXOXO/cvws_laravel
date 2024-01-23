@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-WL3k/Z8nqagCxWOdPGo8lFX4c5g9dMUa8D8OQwN4p69eUUGMMdUuvA+U5dShF+7RZejsHsazqLBUlnC80qdXzA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="box">
  <div class="container-fluid">
      <div class="container">
          <h1 class="text-center">Daftar Pelanggan</h1>
        
        <div class="row">
              <div class="col-12">
              @if(session('success'))
                    <div class="alert alert-success">
                          {{ session('success') }}
                    </div>
              @endif
              <table class="table">
                  <thead class="table-dark">
                    <th>ID Customer</th>
                    <th>Nama Customer</th>
                    <th> Adress </th>
                    <th>City</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody> 
                    @foreach($customer as $row)
                      <tr>
                          <th scope="row">{{$row->idcustomer}}</th>
                          <td>{{ $row->namacustomer }}</td>
                          <td> {{$row->adress}} </td>
                          <td>{{ $row->city }}</td>

                          <td>
                
                              <a href="/get_customer/{{$row->idcustomer}}" class="btn btn-info fas fa-pen">
                                <i class="fa-regular fa-pen"></i>Update
                              </a>

                              <a href="/delete_customer/{{$row->idcustomer}}" class="btn btn-danger">Delete</a>

                          </td>
                      </tr>
                    @endforeach
                  </tbody> 
              </table>
          </div>
          </div>

      </div>
  </div>
  <a class="btn btn-outline-primary" href="/add_customer_view" role="button">Add New Customer</a>
</div>




<style>

.box {
      width: 100%;
      height: 30%;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color:#E6F3EB;

      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

</style>

@endsection
