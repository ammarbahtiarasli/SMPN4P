<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About - SMPN 4 Pamarican</title>
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
     <!--NAVBAR ------>
    <?php
    $this->load->view('depan/v_navbar');
    ?>
<!--============================ WELCOME TITLE =============================--> 
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><br>
                <img src="<?php echo base_url().'theme/images/kepsek.png'?>" class="img-fluid" alt="#">
                <p></p>
                <h4>Wahyu S.Pd M.Pd</h4>
            </div>
            <div class="col-md-6">
            <h2>Kata Sambutan Kepala Sekolah</h2>
                <p>Bismillahirohmannirrohim
                Assalamualaikum Warahmatullah Wabarakatuh
                Alhamdulillahi robbilalamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat www.smpn4pamarican.sch.id dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Pertama Negeri (SMPN) 4 Pamarican yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.
                </p>
                <p>Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.
                </p>
                <p>Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.Terima kasih semoga Allah ‘Azza Wa Jalla menyertai doa kita semua……amin.
                </p>
            </div>
        </div>
    </div>
    </section>
    <!--//END WELCOME TITLE --> 
    <!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">     
                </div>
                <div class="chart-text">
                    <p></span> 
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru?></span> Guru
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa;?></span> Siswa
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-text">
                    <p> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->

<!--============================= FOOTER =============================-->
<?php
    $this->load->view('depan/v_footer');
    ?>