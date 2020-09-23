    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('Pegawai_c') ?>">Pegawai</a></li>
              <li class="breadcrumb-item active">Tambah Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Tambah Pegawai Baru</h5>
              </div>
              <form class="form-horizontal" method="POST" action="<?php echo site_url('Pegawai_c/addPegawaiProses') ?>">
                <div class="card-body">

                  <!-- Form-part input Nomor Induk Pegawai -->
                    <div class="form-group row">
                      <label for="inputNIP" class="col-sm-3 col-form-label">NIP <a class="float-right"> : </a></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control float-right" name="postNIP" id="inputNIP" placeholder="Nomor Induk Pegawai" required>
                      </div>
                    </div>

                  <!-- Form-part input Nama Pegawai -->
                    <div class="form-group row">
                      <label for="inputNama" class="col-sm-3 col-form-label">Nama Pegawai<a class="float-right"> : </a></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control float-right" name="postNama" id="inputNama" placeholder="Nama Lengkap Pegawai" required>
                      </div>
                    </div>

                  <!-- Form-part input Bagian -->
                    <div class="form-group row" id="dateMingguan">
                      <label for="inputBagian" class="col-sm-3 col-form-label">Bagian <a class="float-right"> : </a></label>
                      <div class="col-sm-5">
                        <select class="form-control float-right" name="postBagian" id="inputBagian">
                          <option> -- Pilih Bagian -- </option>
                          <option> AMBIL DARI DATABASE </option>
                        </select>
                      </div>
                    </div>

                  <!-- Form-part input Sub - Bagian -->
                    <div class="form-group row" id="dateMingguan">
                      <label for="inputSubBagian" class="col-sm-3 col-form-label">Sub-Bagian <a class="float-right"> : </a></label>
                      <div class="col-sm-5">
                        <select class="form-control float-right" name="postSubBagian" id="inputSubBagian">
                          <option> -- Pilih Sub-Bagian -- </option>
                          <option> AMBIL DARI DATABASE </option>
                        </select>
                      </div>
                    </div>

                  <!-- Form-part input Jabatan Pegawai -->
                    <div class="form-group row" id="dateMingguan">
                      <label for="inputJabatan" class="col-sm-3 col-form-label">Jabatan <a class="float-right"> : </a></label>
                      <div class="col-sm-5">
                        <select class="form-control float-right" name="postJabatan" id="inputJabatan">
                          <option> -- Pilih Jabatan -- </option>
                          <option> AMBIL DARI DATABASE </option>
                        </select>
                      </div>
                    </div>

                  <!-- Form-part input Golongan Pegawai -->
                    <div class="form-group row">
                      <label for="inputGolongan" class="col-sm-3 col-form-label">Golongan <a class="float-right"> : </a></label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control float-right" name="postGolongan" id="inputGolongan" placeholder="Golongan Pegawai" required>
                      </div>
                    </div>

                  <!-- Form-part input Maximal SPT -->
                    <div class="form-group row" id="dateMingguan">
                      <label for="inputMaxSPT" class="col-sm-3 col-form-label">SPT Maks <a class="float-right"> : </a></label>
                      <div class="col-sm-3">
                        <input type="number" class="form-control float-right" name="postMaxSPT" id="inputMaxSPT" placeholder="SPT Maksimal" required>
                      </div>
                    </div>

                  <!-- Form-part input Status Keaktifan -->
                    <div class="form-group row" id="dateMingguan">
                      <label for="inputStatus" class="col-sm-3 col-form-label">Status <a class="float-right"> : </a></label>
                      <div class="col-sm-3">
                        <select class="form-control float-right" name="poststatus" id="inputstatus">
                          <option> AKTIF </option>
                          <option> TIDAK AKTIF </option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <div class="float-right">
                    <button type="reset" class="btn btn-secondary"><b> Reset </b></button>
                    <button type="submit" class="btn btn-success"><b> Simpan </b></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->