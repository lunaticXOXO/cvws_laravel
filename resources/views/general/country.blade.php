@extends('layouts.main')

@section('container')

<table class="table">
  <thead class="table-light">
    <th>ID Country</th>
    <th>Country Name</th>
    <th>Action</th>
  </thead>
  <tbody>
    
  @foreach($countries as $row)
    <tr>
        <th scope="row">{{$row->codes}}</th>
        <td>{{ $row->nama }}</td>
       
        <td>
            <button type="button" class="btn btn-info">Update</button>
            <button type="button" class="btn btn-danger">Delete</button>

        </td>
    </tr>
  @endforeach
  </tbody>

    
    @section('container2')
    <a class="btn btn-primary" href="/addcountry" role="button">Add New Country</a>
    @endsection
</table>

@endsection