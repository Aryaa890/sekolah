<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div>
        <main>
            <div class="container-fluid px 4">
                <Ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="data">Home</a></li>
                    <li class="breadcrumb-item active">Guru</li>
                </Ol>
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-fw fa-solid fa-list"></i>Data Guru
                        <a href="data/tambah_guru" class="btn btn-sm btn-primary float-right"><i class="fa fa-fw fa-solid fa-plus"></i>Tambah Guru</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <center>No</center>
                                    </th>
                                    <th scope="col">
                                        <center>Foto</center>
                                    </th>
                                    <th scope="col">
                                        <center>Nip</center>
                                    </th>
                                    <th scope="col">
                                        <center>Nama</center>
                                    </th>
                                    <th scope="col">
                                        <center>Telpon</center>
                                    </th>
                                    <th scope="col">
                                        <center>Agama</center>
                                    </th>
                                    <th scope="col">
                                        <center>Alamat</center>
                                    </th>
                                    <th scope="col">
                                        <center>Operasi</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>O123213123</td>
                                    <td>Ajkjsdjkdjsadk</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td allign="center">
                                        <a href="" class="btn btn-sm btn-warning" title="update guru"><i class="fa fa-solid fa-pen"></i></a>
                                        <a href="" class="btn btn-sm btn-danger" title="hapus guru"><i class="fa fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->