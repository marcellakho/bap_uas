<link rel="stylesheet" type="text/css" href="/css/style.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

<script type="text/javascript" src="/js/app.js"></script>

<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<html>
    <title></title>
    <head></head>
    <body>
        <img src="images/Logo-UPH.png" alt=""width="100">
        <p>Nama: Marcella</p>
        <p>NIM: 03081200007</p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Berat</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Vendor</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
              </tr>
            </thead>
            <tbody>
                <?php
          $rows = \DB::select('select Nama, Deskripsi, Berat, Kategori, name_vendor, alamat, no_telp from detail_vendor_product');
          foreach($rows as $row)
          echo'
              <tr>
                <td scope="row">'.$row->Nama.'</td>
                <td>'.$row->Deskripsi.'</td>
                <td>'.$row->Berat.'</td>
                <td>'.$row->Kategori.'</td>
                <td>'.$row->name_vendor.'</td>
                <td>'.$row->alamat.'</td>
                <td>'.$row->no_telp.'</td>
              </tr>'; 
              ?>
            </tbody>
          </table>
          <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cetak PDF</a>
          <a target="_blank" href="/detailvendorproduct/pdf" class="btn btn-primary">Cetak PDF</a>
    </body>
</html>