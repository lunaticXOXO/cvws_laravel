@extends('layouts.main')

@section('container')
<div class="container-fluid bg-secondary-subtle">
    <div class="container-fluid">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Configurable Virtual Workstation</h1>
                    </div>
                </div>
        </div>
    </div>
   
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('picture/main.jpg') }}" alt="main" class="img-fluid-title">
                </div>

            </div>
        </div>
    </div>
</div>
    <div class="container-fluid py-7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h1 class="text-center">Apa itu CVWS?</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="lead text-start ">
                        CVWS merupakan konsep yang dikembangkan di FTMD-ITB yang bertujuan untuk menerapkan paradigma
                        I4.0 yang sesuai dengan kondisi industri manufaktur di Indonesia. 
                    </p>
                    <p class="lead text-start">
                    CVWS telah diterapkan di salah satu industri
                    manufaktur padat karya di Indonesia sebagai sistem pemantau dan pengendali produksi di unit produksi. Sistem
                    pemantau dan pengendali produksi dengan konsep CVWS diwujudkan dengan mengintegrasikan perangkat
                    keras dan perangkat lunak.
                    </p>
                </div>

                <div class="col-6">
                    <p class="lead text-start">
                    Perangkat keras berupa smart point ditempatkan di setiap stasiun kerja dan berfungsi
                    untuk mengamati perubahan kondisi unit produksi untuk disampaikan ke sistem pemantau serta menampilkan
                    instruksi kerja yang harus dilakukan oleh operator di stasiun kerja yang berasal dari sistem pengendali.
                    </p>

                    <p class="lead text-start">
                    Perangkat lunak ditempatkan di setiap smart point maupun di server dan berfungsi untuk mencatat perubahan
                    data yang dikirimkan oleh smart point dan memberi instruksi kerja ke setiap smart point.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Implementasi CVWS di Industri</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/ujicoba1.png') }}" alt="ujicoba1" class="img-fluid">
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/ujicoba2.png') }}" alt="ujicoba2" class="img-fluid">
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/ujicoba4.png') }}" alt="ujicoba4" class="img-fluid">
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/ujicoba5.png') }}" alt="ujicoba5" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid py-2">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/febby1.png') }}" alt="ujicoba1" class="img-fluid">
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/febby2.png') }}" alt="ujicoba2" class="img-fluid">
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/febby3.png') }}" alt="ujicoba4" class="img-fluid">
                    </div>
                </div>

                <div class="col-3">
                    <div class="box">
                    <img src="{{ asset('picture/febby4.png') }}" alt="ujicoba5" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid py-6">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Our Products</h1>
                     <img src="{{ asset('picture/program1.png') }}" alt="program1" class="img-fluid-program1">
                      <img src="{{ asset('picture/program2.png') }}" alt="program2" class="img-fluid-program2">
                       <img src="{{ asset('picture/program4.png') }}" alt="program2" class="img-fluid-program3">
                        <img src="{{ asset('picture/program5.png') }}" alt="program2" class="img-fluid-program5">
                        <img src="{{ asset('picture/program3.png') }}" alt="program2" class="img-fluid-program6">
                </div>

                <div class="col-6">
                    <h3>Features in CVWS</h3>
                    <h4 class="text-start">Engineering.</h4> 
                    <p class="lead text-start">
                    bertugas untuk menyiapkan data jenis produk maupun data material. Data jenis produk terdiri dari data struktur
                    produk maupun data urutan proses pembuatan produk. Data material merupakan data jenis material yang
                    diperlukan untuk membuat suatu jenis produk. Untuk menyiapkan data tersebut disediakan antar muka yang
                    terkait dengan data jenis produk maupun data jenis material.</p>

                    <h4 class="text-start">Project</h4>
                     <p class="lead text-start">
                    Bagian proyek bertugas untuk menambahkan data proyek ke sistem pemantau dan pengendali produksi. Data
                    proyek berisi informasi tantang pelanggan, jenis produk yang dipesan, jumlah produk yang dipesan serta waktu
                    penyelesaian proyek. Sesaat setelah data proyek berhasil dibuat, sistem pemantau dan pengendali akan secara
                    otomatis membuat jadwal operasi yang diperlukan untuk menyelesaikan proyek tersebut disesuaikan dengan
                    kondisi unit produksi terkini.</p>


                    <h4 class="text-start">Material</h4>
                    <p class="lead text-start">
                    Bagian pengadaan material bertugas melakukan pemesanan material dan mencatat material yang yang datang
                    ke unit produksi. Sistem pemantau dan pengendali mampu memberikan informasi kebutuhan material
                    berdasarkan data operasi yang telah dibuat oleh bagian proyek dan data material yang telah diterima oleh bagian
                    material.
                    </p>

                      <h4 class="text-start">General</h4>
                    <p class="lead text-start">
                    Bertugas untuk mempersiapkan data yang bersifat umum. Beberapa data yang bersifat umum
                    meliputi data pelanggan, data pemasok, data lini produksi, data stasiun kerja, dan data data operator. Untuk
                    menyiapkan data tersebut disediakan antar muka yang terkait dengan data pelanggan, data pemasok, data lini
                    produksi, data stasiun kerja, dan data operator.
                    </p>

                    <p class="lead text-start">
                        Semua data produksi disimpan dalam satu data base dan semua data tersbut saling terkait dan terintegrasi.
                        Berdasarkan data tersebut dapat diperoleh beberapi informasi seperti kemajuan proyek, kesesuaian rencana dan
                        pelaksanaan operasi, material yang sudah digunakan untuk operasi, stok material, kebutuhan material sampai
                        waktu tertentu, kondisi terkini unit produksi, dan beban operator.
                    </p>

                </div>

            </div>
        </div>
    </div>
 
<div class="container my-5">
  <section class="">
  <footer class="text-center text-white bg-secondary" >
    <div class="container p-4 pb-0">
      <section class="">
    
      </section>
     
    </div>
 
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright: Laboratorium Teknik Produksi Fakultas Teknik Mesin & Dirgantara
    
    </div>
    <!-- Copyright -->
  </footer>
 
</section>
  
</div>
<!-- End of .container -->


<style>    

    .img-fluid-title {
      max-width: 100%;
      height: 100%;
      margin-left:5px;
      margin-bottom:5px;
    }

    .img-fluid {
      max-width: 100%;
      height: 100%;
    }

    .img-fluid2{
        max-width: 90%;
        max-height : 70%;
    }

    

     .img-fluid-program1 {
      max-width: 100%;
      height: 20%;
    }

      .img-fluid-program2 {
      max-width: 100%;
      height: 20%;
    }

    .img-fluid-program3 {
      max-width: 100%;
      height: 20%;
    }

      .img-fluid-program5 {
      max-width: 100%;
      height: 20%;
    }

      .img-fluid-program6 {
      max-width: 100%;
      height: 19%;
    }


    .box {
      width: 100%;
      height: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      background-color:light;

      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }



  </style>

@endsection