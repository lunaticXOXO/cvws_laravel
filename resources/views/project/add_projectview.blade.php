@extends('layouts.main')

@section('container')


<div class="container-head py-3">
    <div class="container">
        <div class="row">
                <div class="col-7">
                <div class="box">
                    <h3 class="text-center">Tambah Data Project</h3>
                    
                    <form action="/add_project" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                           <div class="form-floating">
                                <input type="text" name = "idproject" class="form-control">
                                <label for="idproject" class="form-label">ID Project</label>
                           </div> 
                           <br>

                           <div class="form-floating">
                                <input type="text" name = "projectname" class="form-control">
                                <label for="projectname" class="form-label">Nama Project</label>
                           </div> 
                           <br>

                           <div class="form-floating">
                                <!-- <input type="text" name = "description" class="form-control"> -->
                                <textarea name="description" class="form-control" rows="4"></textarea>
                                <label for="description" class="form-label">Deskripsi</label>
                           </div> 
                           <br>

                           <div class="form-floating">
                                <input type="file" name="picture" class="form-control">
                                <label for="file" class="form-label">Upload Picture</label>
                          </div>
                           <br>

                           <div class="form-floating">
                                <input type="datetime-local" name="start_date" class="form-control">
                                <label for="start_date" class="form-label">Mulai Berlaku</label>
                           </div>
                           <br>

                           <div class="form-floating">
                                <input type="datetime-local" name="finish_date" class="form-control">
                                <label for="finsih_date" class="form-label">Habis Berlaku</label>
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
      max-width: 100%;
      max-height: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color:#E6F3EB;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

.container-head{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
}



</style>