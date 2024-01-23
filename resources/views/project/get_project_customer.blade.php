@extends('layouts.main')

@section('container')


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1>Daftar Proyek</h1>
            @foreach($projects_customer as $row)
                
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-align">ID Project : {{$row->idproject}}</h4>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('picture/'.$row->picture) }}" class="img">
                                <p class="text-start">Project Name : {{$row->projectname}}</p>
                                <p class="text-start">Description : {{ Str::limit($row->description, 10)}}</p>
                            </div>
                            <div class="card-footer">
                            <p class="text-start">Start Date : {{$row->start_date}}</p>
                            <p class ="text-start">Finish Date : {{$row->finish_date}}</p>

                      
                            <a href="/project_customer/{{$row->idproject}}" class="btn btn-primary">
                                Show Details
                            </a>

                            </div>
                        </div>
                        
                    </div>
            @endforeach
        </div>
    </div>
</div>


@endsection

<style>


    .img{
        max-width:55%;
        max-height:65%;
    }

    .card{
        max-width:100%;
        max-height:100%;
    }   

</style>