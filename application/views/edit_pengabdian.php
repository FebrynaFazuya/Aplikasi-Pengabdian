<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 25px"></div>

      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel"> Edit Data Dosen </h2>
          </div>
          <div class="modal-body">
          <form method="post" action="<?=site_url('Detail_pengabdian/edit_action')?>" class="form-horizontal">
          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" value="<?= $pengabdian->id_tbl?>">
                                <input type="hidden" name="id_dosen" value="<?= $dosen?>">
                              <input type="text" class="form-control" id="inputJudul" placeholder="Judul" name="judul" value="<?= $pengabdian->judul?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Topik</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTopik" placeholder="Topik" name="topik" value="<?= $pengabdian->topik?>">
                            </div>
                          </div>   
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Link</label>
                            <div class="col-sm-10">
                              <input type="url" class="form-control" id="inputTopik" placeholder="https://" name="link" value="<?= $pengabdian->link_publikasi?>">
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Waktu</label>
                            <div class="col-sm-3">
                              <input type="date" class="form-control" id="inputWaktu" placeholder="dd mm yyyy" name="waktu" value="<?= $pengabdian->waktu?>">
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Tempat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTempat" placeholder="Alamat" name="alamat" value="<?= $pengabdian->tempat?>">
                            </div>
                          </div>                          
                          <div class="form-inline ">
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label ">Mahasiswa</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Tatang Suratang" name="mahasiswa1" value="<?= $pengabdian->nama_mahasiswa1?>">
                            </div>
                            </div>                            
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label">NIM</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNIM" placeholder="xx.xx.xxxx" name="nim1" value="<?= $pengabdian->nim1?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-inline ">
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label ">Mahasiswa</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Tatang Suratang" name="mahasiswa2" value="<?= $pengabdian->nama_mahasiswa2?>">
                            </div>
                            </div>                            
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label">NIM</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNIM" placeholder="xx.xx.xxxx" name="nim2" value="<?= $pengabdian->nim2?>">
                              </div>
                            </div>
                          </div>
          <div class="modal-footer">
          <a href="<?= site_url('Detail_pengabdian/index/'.$dosen)?>"><button type="button" class="btn ">Close</button></a>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
          </form>
      </div>
</body>
</html>
