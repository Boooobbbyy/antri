<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
    <a href="#add" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Karyawan</a>
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
                <th>Nama Karyawan</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($karyawan as $ars) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $ars['nama']; ?></td>
                  <td><?= $ars['telp']; ?></td>
                  <td><?= $ars['alamat']; ?></td>
                  <td><?= $ars['username']; ?>

                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>

            <div id="username" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <label for="sel1"><strong>Username</label>
                        <input type="text" name="username" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="" readonly>
                        <label for="sel1">Nama</label>
                        <input type="text" name="nama" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" required="" maxlength="50" value="">
                        <label for="sel1">Nomer Telp</label>
                        <input type="text" name="telp" class="form-control" pattern="[0-9]{0,50}" required="" maxlength="50" value="">
                        <label for="sel1">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="sel1">Level</label>

                        <select name="level" class="form-control" required="" onchange="" id="lev">
                          <option value="">--Pilih Level--</option>
                          <option>Admin</option>
                          <option value="Penjaga">Penjaga Loket</option>
                        </select>
                        <label for="sel1" id="l">Loket</label>

                        <select name="id_loket" class="form-control" id="id_loket">
                          <option>Loket 1</option>

                          <option>Loket 2</option>

                        </select>
                        <label for="sel1">Password</strong></label>
                        <input type="password" name="password" class="form-control">
                        <p>*Kosongkan bila tidak ingin mengganti password</p>
                        <label for="sel1"><strong>Retype Password</strong></label>
                        <input type="password" name="password" class="form-control">
                        <input type="hidden" name="password_lama" value="">
                        <br><br>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <!--   <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
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

<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Karyawan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="sel1"><strong>Username</label>
            <input type="text" name="username" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" required="" maxlength="50" placeholder="Masukan Username">
            <label for="sel1">Nama</label>
            <input type="text" name="nama" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" required="" maxlength="50" placeholder="Masukan Nama">
            <label for="sel1">Nomer Telp</label>
            <input type="text" name="telp" class="form-control" pattern="[0-9]{0,50}" required="" maxlength="50" placeholder="Masukan Nomer Telp">
            <label for="sel1">Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Masukan Nama"></textarea>
          </div>
          <div class="col-md-12">
            <label for="sel1">Level</label>
            <select name="level" class="form-control" required="" onchange="" id="lev1">
              <option value="">--Pilih Level--</option>
              <option>Admin</option>
              <option value="Penjaga">Penjaga Loket</option>
            </select>
            <label for="sel1" id="l1">Loket</label>
            <select name="id_loket" class="form-control" id="id_loket1">
              <option value="0">--Pilih Loket--</option>

              <option>Loket 1</option>

            </select>
            <label for="sel1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" id="p" onkeyup=>
            <label for="sel1">Retype Password</label></strong>
            <input type="password" name="re_password" class="form-control" placeholder="Ketik Ulang Password" id="up" onkeyup=>
            <p id="pesan"></p>

            <br>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
      </div>
      <div class="modal-footer">
        <!--   <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>