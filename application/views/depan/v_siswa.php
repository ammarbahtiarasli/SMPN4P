<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siswa - SMPN 4 Pamarican</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/iconsmp4.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
  <!--============================= HEADER =============================-->
  <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smpn4pamarican@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>smpn4_pamarican@yahoo.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>JL. Wiryo Taruno No.1 Desa Sukamukti Kecamatan Pamarican Kab Ciamis, Jawa Barat 46382
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logosmp-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil Sekolah
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="visi_misi">Visi & Misi Sekolah</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="struktur_organisasi">Struktur Organisasi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="prestasi_siswa">Prestasi Sekolah</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="about">About</a>
                                </div>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GTK & Siswa
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="guru">Data Guru</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="siswa">Data Siswa</a>
                                </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
    <section>
</section>
<!--//END HEADER -->
<div class="carousel-inner" role="listbox">
    <section class="our-teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5">Siswa Kami</h2>
                </div>
            </div>
             <!-- Main content -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
    <tbody>
         <?php
            $no=0;
            foreach ($data->result_array() as $i) :
                $no++;
                $id=$i['siswa_id'];
                $nis=$i['siswa_nis'];
                $nama=$i['siswa_nama'];
                $jenkel=$i['siswa_jenkel'];
                $kelas_id=$i['siswa_kelas_id'];
                $kelas_nama=$i['kelas_nama'];
                $photo=$i['siswa_photo'];
        ?>
         <tr>
                  <?php if(empty($photo)):?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
                  <?php else:?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$photo;?>"></td>
                  <?php endif;?>
                  <td><?php echo $nis;?></td>
                  <td><?php echo $nama;?></td>
                  <?php if($jenkel=='L'):?>
                  <td>Laki-Laki</td>
                  <?php else:?>
                  <td>Perempuan</td>
                  <?php endif;?>
                  <td><?php echo $kelas_nama;?></td>
                </tr>
                  <?php endforeach;?>
    </tbody>
</table>
<nav><?php echo $page;?></nav>
</section>
<!--============================= FOOTER =============================-->
<?php
    $this->load->view('depan/v_footer');
    ?>