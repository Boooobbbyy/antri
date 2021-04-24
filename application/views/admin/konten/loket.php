
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Loket</h1>
                        <a href="#add" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Loket</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">

                                <div class="card-body">
                                        <table class="table table-bordered" style="text-align:center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="3px">No.</th>
                                                    <th>Nama Loket</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Loket 1</td>
                                                    <td>Kosong</td>
                                                    <td><a href="#id_loket" data-toggle="modal" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> <a href="" data-toggle="modal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Loket 2</td>
                                                    <td>Kosong</td>
                                                    <td><a href="#id_loket" data-toggle="modal" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> <a href="" data-toggle="modal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                
                                                <tr>
                                                    <td>3</td>
                                                    <td>Loket 3</td>
                                                    <td>Kosong</td>
                                                    <td><a href="#id_loket" data-toggle="modal" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> <a href="" data-toggle="modal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Loket 4</td>
                                                    <td>Kosong</td>
                                                    <td><a href="#id_loket" data-toggle="modal" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> <a href="" data-toggle="modal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                            </tbody>

                                            <!-- Modal -->
                                            <div id="id_loket" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Loket</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="" enctype="multipart/form-data">
                                                        <div class="col-md-12">
                                                            <label for="sel1"><strong>Nama Loket</label>
                                                            <input type="text" name="loket" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="" required="" maxlength="50">
                                                            <label for="sel1">Status Loket</label></strong>
                                                            <select name="status" class="form-control">
                                                                <option value="0" >Kosong</option>
                                                                <option value="1" >Sedang digunakan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <br>
                                                            <button type="submit" class="btn btn-primary" name="s_buku">Simpan</button>
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!--    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
                                                    </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<!-- Modal -->
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Loket</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="sel1"><strong>Nama Loket</label>
              <input type="text" name="loket" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" placeholder="Contoh: A, B, C atau 1, 2, 3" required="" maxlength="50">
            <label for="sel1">Status Loket</label></strong>
              <select name="status" class="form-control">
                <option value="0">Kosong</option>
                <option value="1">Sedang digunakan</option>
              </select>
          </div>
          <div class="col-md-12">
            	<br>
              <button type="submit" class="btn btn-primary" name="s_buku">Simpan</button>
              <button type="reset" class="btn btn-danger">Reset</button>
           </div>
        </form>
      </div>
      <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>