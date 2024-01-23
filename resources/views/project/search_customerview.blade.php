@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="container">
        <div class="row">
                <div class="col-6">
                    <div class="box">
                        <h3 class="text-center">Pencarian Data Customer</h3>
                        <form action="/search_customer" methods="GET">
                            <div class="form-floating">
                                    <input type="text" name = "namacustomer" class="form-control">
                                    <label for="namacustomer" class="form-label">Nama Customer</label>
                                    <br>
                            </div> 
                             <div>
                                <button name="submit" type="submit" class="btn btn-primary">Search Customer</button>
                            </div>
                        </form>
                   
                    </div>

                    <div class="col-6">
                        <div class="box">
                            <table class="table">
                                <thead class="table-dark">
                                    <th>ID Customer</th>
                                    <th>Nama Customer</th>
                                    <th> Adress </th>
                                    <th>City</th>  
                                </thead>
                                <tbody> 
                                @foreach($customer_search as $row)
                                    <tr>
                                        <th scope="row">{{$row->idcustomer}}</th>
                                        <td>{{ $row->namacustomer }}</td>
                                        <td> {{$row->adress}} </td>
                                        <td>{{ $row->city }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
      background-color:light;

      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

</style>