@extends('layouts.main')


@section('container')

<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="box">
                    <h3 class="text-center">Tambah Data Customer</h3>
                    <form action="/add_customer" method="POST">
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

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>
                                        @foreach($errors->all() as $error )
                                            {{ $error }}
                                        @endforeach
                                        </li>
                                    </ul>
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
                                <select class="form-control" id="city" name="city">
                                <option value="">Select a city</option>
                                @foreach($data as $row)
                                    @if($row->nama != null)
                                        <option value="{{ $row->codes }}">{{ $row->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                                <label for="city" class="form-label">Kota</label>
                           </div> 
                           <br>
                           <div class="form-floating">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div> 
            
            <div class="col-md-5">
                <div class="box">
                    <h3>Daftar Pelanggan</h3>
                    <br>
                        <table class="table">
                                <thead class="table-dark">
                                    <th>ID Customer</th>
                                    <th>Nama Customer</th>
                                    <th>Adress</th>
                                    <th>City</th>
                                </thead>
                                <tbody>
                                    @foreach($data as $row)
                                        @if($row->idcustomer != null)
                                            <tr>
                                                <th scope="row">{{ $row->idcustomer }}</th>
                                                <td>{{ $row->namacustomer }}</td>
                                                <td>{{ $row->adress }}</td>
                                                <td>{{ $row->city }}</td>
                                            </tr>
                                        @endif
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            
            
        </div>
    </div>
</div>



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

    .box2 {
      width: 100%;
      height: 100%;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color:light;
      justify-content: space-between;
      display : flex;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .col-md-5 {
    width: 48%; 
}


</style>

@endsection

