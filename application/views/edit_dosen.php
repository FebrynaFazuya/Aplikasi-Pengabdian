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
          <form method="post" action="<?=site_url('Dosen_pengabdian/edit_action')?>" class="form-horizontal">
            <div class="form-group">
              <label for="dosen" class="col-sm-2 control-label">Dosen Pengampu</label>
              <div class="col-sm-10">
                  <input type="hidden" name="id" value="<?=$dosen->id?>">
                <input type="text" class="form-control" id="dosen" name="nama_dosen" value="<?=$dosen->nama_dosen?>">
              </div>
            </div>            
            <div class="form-group">
              <label for="NID" class="col-sm-2 control-label">NIDN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="NIDN" name="nidn" value="<?=$dosen->nidn?>" >
              </div>
            </div>            
          </div>
          <div class="modal-footer">
          <a href="<?= site_url('Dosen_pengabdian')?>"><button type="button" class="btn ">Close</button></a>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
          </form>
      </div>
</body>
</html>
