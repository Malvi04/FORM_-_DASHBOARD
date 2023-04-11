<!DOCTYPE html>
<html lang="en">

<head>
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="asset/style.css" <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>DASHBOARD KAI KALOG</title>
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
</head>

<body>
  <header id="header" style="border-right: 1px solid gray">
    <div class="d-flex flex-row">
      <div class="p-2">
        <div class="profile">
          <img src="asset/img/biru-oren.png" alt="" class="img-fluid" />
          <br /><br />
          <h1 class="text-dark">MENU</h1>
        </div>

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li style="list-style: none">
              <a href="<?= base_url('/Dashboard_Penerima') ?>" class="nav-link scrollto active"><i class="bx bx-home"></i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"></path>
                </svg>
                <span>Penerima</span></a>
            </li>
            <li style="list-style: none">
              <a href="<?= base_url('/form') ?>" class="nav-link scrollto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"></path>
                </svg>
                <span>Pengirim</span></a>
            </li>
            <li style="list-style: none">
              <a href="<?= base_url('/Dashboard_Monitoring') ?>" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"></path>
                </svg>
                <span>Monitoring</span></a>
            </li>
            <!-- <li>
              <a href="#services" class="nav-link scrollto"
                ><i class="bx bx-server"></i> <span>Services</span></a
              >
            </li> -->
            <br /><br /><br /><br /><br /><br /><br />
            <li style="list-style: none">
              <a href="<?= base_url('/logout') ?>" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path d="M3 3.25c0-.966.784-1.75 1.75-1.75h5.5a.75.75 0 0 1 0 1.5h-5.5a.25.25 0 0 0-.25.25v17.5c0 .138.112.25.25.25h5.5a.75.75 0 0 1 0 1.5h-5.5A1.75 1.75 0 0 1 3 20.75Zm16.006 9.5H10.75a.75.75 0 0 1 0-1.5h8.256l-3.3-3.484a.75.75 0 0 1 1.088-1.032l4.5 4.75a.75.75 0 0 1 0 1.032l-4.5 4.75a.75.75 0 0 1-1.088-1.032Z"></path>
                </svg>
                <span>Log Out</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <br>
  <div class="container-field">
    <!-- <div class="row"> -->
    <div class="p-2">
      <!-- <div class="col-7 offset-5"><h1>HALLO SELAMAT DATANG</h1></div> -->
    </div>
    <div class="row">
      <div class="col-3 offset-3">
        <div class="card" style="width: 18rem">
          <div class="card-draft">
            <h5 class="card-title text-center">DOKUMEN DRAFT</h5>
            <hr style="color: red" />
            <p class="text-card text-center text-bold">12</p>
            <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem">
          <div class="card-proses">
            <h5 class="card-title text-center">DOKUMEN PROSES</h5>
            <hr style="color: red" />
            <p class="text-card text-center text-bold">12</p>
            <!-- <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a> -->
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem">
          <div class="card-diterima">
            <h5 class="card-title text-center">DOKUMEN DITERIMA</h5>
            <hr style="color: red" />
            <p class="text-card text-center">12</p>
            <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
          </div>
        </div>
      </div>
    </div>



    <br>
    <div class="row">
      <a href="<?= base_url('/form') ?>" class="btn btn-primary col-1 offset-3">
        <div class="btn-text">TAMBAH</div>
      </a>
      <!-- <div class="dropdown col-5 offset-3">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          EXPORT
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">PDF</button></li>
          <li><button id="excel" class="dropdown-item" type="button">EXCEL</button></li>
          <li><button class="dropdown-item" onclick="window.print()" type="button">PRINT</button></li>
        </ul>
      </div> -->
      <div class="col-5 offset-3">
        <button class="btn btn-primary" onclick="window.print()" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-printer" viewBox="0 0 18 18">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
          </svg> PRINT</button>
      </div>
      <div class="col-1 offset-10">
        <a href="<?= base_url('/PDF') ?>"><button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 18 18">
              <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
            </svg>PDF</button></a>
      </div>
      <div class="col-1 offset-9">
        <a href="<?= base_url('/export') ?>"><button class="btn btn-primary" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 18 18">
              <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
              <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
            </svg>EXCEL</button></a>
      </div>
    </div>

    <br>

    <div class="offset-3 table-responsive">
      <table id="tabel" class="table table-text">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Pengirim</th>
            <th scope="col">Perihal</th>
            <th scope="col">Tanggal Kirim</th>
            <th scope="col">Unit Pengirim</th>
            <th scope="col">Unit Penerima</th>
            <th scope="col">Nama Penerima</th>
            <th scope="col">Tanggal Terima</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          ?>
          <?php foreach ($all_data_book as $book) : ?>
            <tr>
              <!-- <th scope="row">1</th> -->
              <td scope="row"><?= $no; ?></td>
              <td><?= $book->nama_pengirim ?></td>
              <td><?= $book->perihal ?></td>
              <td><?= $book->tgl_kirim ?></td>
              <td><?= $book->unit_pengirim ?></td>
              <td><?= $book->unit_penerima ?></td>
              <td><?= $book->nama_penerima ?></td>
              <td><?= $book->tgl_terima ?></td>
              <td>
                <a style="text-decoration:none" href="<?= base_url('edit_data_book') . '/' . $book->id ?>">Edit </a>
              </td>
            </tr>
          <?php $no++;
          endforeach ?>
          </tr>
        </tbody>
      </table>
      <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script>
        $(document).ready(function() {
          $('#tabel').DataTable();
        });
      </script>
      <!-- </div>
</div> -->
      <!-- </div> -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
       
</body>
<!-- <script>
    $(document).ready(function() {
      $('#excel').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
      } );
  } );
</script> -->

</html>