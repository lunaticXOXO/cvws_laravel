@extends('layouts.main')

@section('container')


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1>Pesan Proyek</h1>
            @isset($project_id)
                
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-align">ID Project : {{$project_id->idproject}}</h1>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('picture/'.$project_id->picture) }}" class="img">
                                <p class="lead text-start">Project Name : {{$project_id->projectname}}</p>
                                <p class="lead text-start">Description : {{$project_id->description}}</p>
                            </div>
                            <div class="card-footer">
                            <p class="lead text-start">Start Date : {{$project_id->start_date}}</p>
                            <p class ="lead text-start">Finish Date : {{$project_id->finish_date}}</p>

                      
                            <a href="#" class="btn btn-primary">
                                Order
                            </a>

                            </div>
                        </div>
                        
                    </div>
            @endisset
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