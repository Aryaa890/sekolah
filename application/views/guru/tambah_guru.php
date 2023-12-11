<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div>
        <main>
            <div class="container-fluid px 4">
                <Ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Guru</a></li>
                    <li class="breadcrumb-item active">Tambah Guru</li>
                </Ol>
            </div>
        </main>
    </div>
    <div class="card">
        <div class="card-header">
            <span class="h5 my-2"></i>Tambah Guru</span>
            <button type="submit" name="simpan" class="btn btn-primary float-right"><i class="fa fa-fw fa-solid fa-bookmark"></i>Simpan</button>
            <button type="reset" name="reset" class="btn btn-danger float-right mr-1">Reset</button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div class="mb-3 row">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <label for="nip" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="text" name="nip" pattern="[0-9]{18,}" title="minimal 18 angka" class="form-control ps-2 border-0 border-bottom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <label for="nama" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="text" name="nama" class="form-control ps-2 border-0 border-bottom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telpon" class="col-sm-2 col-form-label">Telpon</label>
                        <label for="telpon" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="tel" name="telpon" pattern="[0,9]{5,}" title="Minimal 5 angka" class="form-control ps-2 border-0 border-bottom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <label for="agama" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <select name="agama" id="agama" class="form-select border-0 border-bottom" required>
                                <option value="" selected>Pilih Agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="hindu">Hindhu</option>
                                <option value="budha">Budha</option>
                                <option value="katholik">Katholik</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <label for="alamat" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-center px-5">
                    <img src="assets/img/profile/default.jpg" class="mb-3" widht="40%" alt="">
                    <input type="file" name="image" class="form-control form-control-sm">
                    <small class="text-secondary">Pilih foto png, jpg atau jpeg</small>
                    <div><small class="text-secondary">widht = height</small></div>
                </div>
            </div>
        </div>
    </div>