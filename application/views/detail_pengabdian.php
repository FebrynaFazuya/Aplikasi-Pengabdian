<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengabdian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <li class="active"><a href="<?=site_url('Dosen_pengabdian')?>">Pengabdian</a></li>
      </ul><br>
    </div>

        <!--Button -->
        <style>
        .btn {
          border: none;
          color: white;
          padding: 10px 30px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 4px;
          cursor: pointer;
        }

        .button1 {background-color: #4CAF50;} /* Green */
        .button2 {background-color: #008CBA;} /* Blue */
        </style>

        <!--POP UP -->
        <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
          background-color: #555;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 90px;
          right: 28px;
          width: 280px;
        }

        /* The popup form - hidden by default */
        .form-popup {
          display: none;
          position: fixed;
          bottom: 40;
          right: 450px;
          border: 3px solid #f1f1f1;
          z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
          max-width: 500px;
          padding: 10px;
          background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }

        .form-inline {
          margin-left: 5% ;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
          </style>

    <body>
      <div class="col-sm-9">
        <hr>
        <h1><strong><?= $dosen->nama_dosen?></strong></h1>
        <p>NIDN : <?= $dosen->nidn?></p>
        
        <style>
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }

          td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }

          tr:nth-child(even) {
            background-color: #dddddd;
          }
          </style>

              <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-lg" onclick="openForm()" data-toggle="modal" data-target="#myModal">
                  <span class="glyphicon glyphicon-plus"></span>
                  Create
                </button>
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
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title" id="myModalLabel"> Create Data </h2>
                      </div>
                      <div class="modal-body">
                        <form action="<?= site_url('Detail_pengabdian/simpan_pengabdian')?>" class="form-horizontal" method="POST">
                            <input type="hidden" name="nama_dosen" value="<?= $dosen->nama_dosen?>">
                            <input type="hidden" name="nidn" value="<?= $dosen->nidn?>">
                            <input type="hidden" name="id" value="<?= $dosen->id?>">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputJudul" placeholder="Judul" name="judul">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Topik</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTopik" placeholder="Topik" name="topik">
                            </div>
                          </div>   
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Link</label>
                            <div class="col-sm-10">
                              <input type="url" class="form-control" id="inputTopik" placeholder="https://" name="link">
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Waktu</label>
                            <div class="col-sm-3">
                              <input type="date" class="form-control" id="inputWaktu" placeholder="dd mm yyyy" name="waktu">
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label for="inputtext" class="col-sm-2 control-label">Tempat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputTempat" placeholder="Alamat" name="alamat">
                            </div>
                          </div>                          
                          <div class="form-inline ">
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label ">Mahasiswa</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Tatang Suratang" name="mahasiswa1">
                            </div>
                            </div>                            
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label">NIM</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNIM" placeholder="xx.xx.xxxx" name="nim1">
                              </div>
                            </div>
                          </div>
                          <div class="form-inline ">
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label ">Mahasiswa</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" placeholder="Tatang Suratang" name="mahasiswa2">
                            </div>
                            </div>                            
                            <div class="form-group control-label">
                              <label for="inputtext" class="col-sm-2 control-label">NIM</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNIM" placeholder="xx.xx.xxxx" name="nim2">
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
              </div>

              <table class="table table-condensed table-hover">
                <tr class="info">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Topik</th>
                  <th>Waktu</th>
                  <th>Tempat</th>
                  <th>Mahasiswa</th>
                  <center> <th>Action</th></center>

                  </tr>
                  <?php $x=0;foreach($pengabdian as $item) :?>
                  <tr>
                    <td><?= ++$x?></td>
                    <td><?= $item->judul?></td>
                    <td><?= $item->topik?></td>
                    <td><?= date('d-m-Y', strtotime($item->waktu))?></td>
                    <td><?= $item->tempat?></td>
                    <td>
                        <ul>
                            <li><?= $item->nama_mahasiswa1?> (<?= $item->nim1?>)</li>
                            <li><?= $item->nama_mahasiswa2?> (<?= $item->nim2?>)</li>
                        </ul>
                    </td>
                    <td> 
                      <a href="<?= $item->link_publikasi?>"class="btn btn-primary btn-sm" target="_BLANK">Publish</a>
                      <br>
                    <!-- Button trigger modal -->
                      <a href="<?= site_url('Detail_pengabdian/edit/'.$item->id_tbl.'/'.$dosen->id)?>" class="btn btn-success btn-sm">
                        Update
                      </a>
                      <!-- Modal -->
                      
                      <br>
                      <a href="<?= site_url('Detail_pengabdian/delete/'.$item->id_tbl.'/'.$dosen->id)?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <?php endforeach?>
                </table>
        </div>

          <script>
          function openForm() {
            document.getElementById("myForm").style.display = "block";
          }

          function closeForm() {
            document.getElementById("myForm").style.display = "none";
          }
          </script>
      </body>
    </div>
  </div>
</html>
