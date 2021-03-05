<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Visi Misi - SMPN 4 Pamarican</title>
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
                                <a class="dropdown-item" href="#">About</a>
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
<!---- VISI MISI---->
<div class="carousel-inner" role="listbox">
<section class="our_courses">
<div class="container">
        <div class="row">
            <div class="col-md-32">
            <img src="<?php echo base_url().'theme/images/slidersmp.jpg'?>" class="img-fluid" width="1700px"><br>
                            <br><h2>Visi & Misi Sekolah</h2>
                            <p>1. Disiplin Berprestasi Dengan Dilandasi Iman dan taqwa</p>
                            <h2>Tujuan</h2>
                            <p> 1. Mengembangkan potensi peserta didik agar menjadi manusia yang beriman dan bertakwa, berakhlak mulia, sehat, berilmu, <br> kreatif, mandiri dan bertanggung jawab.</p>
            </div>
        </div>
</div>
    </section>
<!--========================== End Content ======================================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--============================= FOOTER =============================-->
<?php
    $this->load->view('depan/v_footer');
    ?>