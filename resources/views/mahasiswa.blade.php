<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAHASISWA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  
  <div class="container" style="margin-left: 30px">

    <h1>Ini adalah halaman Mahasiswa</h1>

    {{-- 
      ROWSPAN = MENGGABUNGKAN BARIS
      COLSPAN = MENGGABUNGKAN KOLOM
      --}}


      <div class="row">
      <div class="col-sm-6">
        <h4>Table Mahasiswa</h4>
        <table class="table table-danger table-sm table-hover table-striped table-bordered text-center">
          <thead>
            <tr>
              <th>NPM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th colspan="2">TTL</th>
              
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < $jumlah; $i++)
            <tr>
              <td>{{ $npm [$i]}}</td>
              <td>{{ $nama [$i]}}</td>
              <td> Perempuan</td>
              <td> Kota Medan</td>
            </tr>
             
            @endfor
    
    
            
            {{--<//?php $nilai_awal = 0; ?>
            @while ($nilai_awal < $jumlah)
                
            <tr>
              <td>{{ $npm[$nilai_awal]}}</td>
              <td>{{ $nama[$nilai_awal]}}</td>
              <td>Perempuan</td>
              <td>10-3-2002</td>
              <td>Medan</td>
            </tr>
    
            <//?php $nilai_awal++ ?>
            @endwhile
            --}}
            
    
    
    
            {{--
            <tr>
              <td>124</td>
              <td>Lala</td>
              <td>Perempuan</td>
              <td>27-7-2003</td>
              
            </tr>
    
            <tr>
              <td>125</td>
              <td>Rani</td>
              <td>Perempuan</td>
              <td>15-5-2005</td>
              
            </tr>
            --}}
    
          </tbody>
        </table>

      </div>

      <div class="col-sm-6">
        <h4>Form Mahasiswa</h4>
        <form action="" method="GET">
          <div class="row">
            <div class="col-sm-6">
              <label for="">NPM</label>
              <input type="number" name="npm" class="form-control" placeholder="Input NPM">

            
          </div>
          <div class="col-sm-6">
            <label for="">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama">

          </div>
      </div>
    
    <div class="row">
      <div class="com-sm-6">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">

      </div>
      <div class="col-sm-6">
        <label for="">Prodi</label>
        <select name="prodi" class="form-control">
        <option>Sistem Informasi</option>
        <option>Teknik Informasi</option>
        <option>Sains Data</option>
      </select>
      </div>

      
    </div>

    <div class="row mt-2">
      <div class="col-sm-12">
        <div class="form-group">
          <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>

        </div>
      </div>
    </div>
    

    


  </div>
        </form>
      </div>




 
   </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>