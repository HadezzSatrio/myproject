<?php
    include "functions.php";
    if (isset($_POST["submit"])){
        if(tambah($_POST)>0){
            echo "<script>
            alert('Data Berhasil Ditambah');
            document.location.href = 'index.php'
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Ditambah');
            document.location.href = 'index.php'
            </script>";
        }
    }
?>
<?php
include 'template/header.php';
include 'template/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Master</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Data Master</li>
                        <li class="breadcrumb-item active">Data Atlet</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Input Data Atlet
                            </h3>
                            <div class="card-tools">

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="idatlet" class="col-sm-2 col-form-label">ID Atlet</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="idatlet" id="idatlet" placeholder="Masukkan ID Atlet" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namaatlet" class="col-sm-2 col-form-label">Nama Atlet</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namaatlet" name="namaatlet" placeholder="Masukkan Nama Atlet" autocomplete="off">
                                    </div>
                                </div>
                            </div> 
                            <!-- koding tanggal lahir -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tgllahir" name="tgllahir" placeholder="Masukkan Tanggal Lahir (tahun-bulan-lahir)" autocomplete="off">
                                    </div>
                                </div>
                            </div> 
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <SELECT class="form-control" name="jenkel" id="jenkel">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </SELECT>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="tinggibadan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tinggibadan" name="tinggibadan" placeholder="Masukkan Tinggi Badan" autocomplete="off">
                                    </div>
                                </div>
                            </div> 
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="namacabor" class="col-sm-2 col-form-label">Cabang Olahraga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namacabor" name="namacabor" placeholder="Masukkan Nama Cabang Olahraga" autocomplete="off">
                                    </div>
                                </div>
                            </div> 
                            <div class="card-footer">
                                <button class="btn btn-info" onclick="history.back()">Kembali</button>
                                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
include 'template/footer.php';
?>