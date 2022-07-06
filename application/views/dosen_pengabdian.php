<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengabdian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h1><strong>SIDUL</strong></h1>
      <ul class="nav nav-pills nav-stacked">
      <li><a href="#section2">Kurikulum</a></li>
        <li><a href="#section2">Tugas Akhir</a></li>
        <li class="active"><a href="#section1">Pengabdian</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <hr>
      <h2><strong>Pengabdian</strong></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <br>
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-success btn-lg mb-4" data-toggle="modal" data-target="#myModal">
        <span class="glyphicon glyphicon-plus"></span> Create
      </button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel"> Data Dosen </h2>
          </div>
          <div class="modal-body">
          <form method="POST" action="<?= base_url('Dosen_pengabdian/dosen') ?>" class="form-horizontal">
            <div class="form-group">
              <label for="dosen" class="col-sm-2 control-label">Dosen Pengampu</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="dosen" name="nama_dosen" placeholder="Firman Asharudin, S.Kom, M.Kom">
              </div>
            </div>            
            <div class="form-group">
              <label for="NID" class="col-sm-2 control-label">NIDN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="NIDN" name="nidn" placeholder="19023182479104241842">
              </div>
            </div>            
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="closeForm()">Close</button>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
          </form>
      </div>
      
    </div>
  </div>
<?php
if($this->session->flashdata('flash')):
?>
<div class="alert alert-success alert-dismissible" role="alert" style="margin-top:15px;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Selamat!</strong> <?= $this->session->flashdata('flash')?>
</div>
<?php
unset($_SESSION['flash']);
endif
?>
<table class="table table-striped">
<thead>
 <tr>
    <th >Dosen Pengampu</th>
    <th >NIDN</p></th>
   <th >Action</th>

  </tr>
  </thead>
  <tbody>
<?php
foreach($dosen as $item):
?>
  <tr>
    <td><p><strong><?=$item->nama_dosen?></strong></p></td>
        <td><p><strong><?=$item->nidn?></strong></p></td>
    <td><a href="<?= site_url('Detail_pengabdian/index/'.$item->id)?>"><button class="btn btn-success">Detail</button></a></td>
    <td><div class="dropdown">
          <button class="btn-lg btn-link dropdown-toggle" type="button" data-toggle="dropdown">
          <span class="glyphicon glyphicon-option-vertical"></span></button>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('Dosen_pengabdian/edit/'.$item->id)?>"><span class="glyphicon glyphicon-edit"></span> Edit</a></li>
            <li><a href="<?=site_url('Dosen_pengabdian/delete/'.$item->id)?>"><span class="glyphicon glyphicon-trash"></span> Delete</a></li>
          </ul>
        </div>
    </td>
     </tr>
     <?php
endforeach
?> 
  </tbody>
</table>
</body>
</html>
