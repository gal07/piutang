<!doctype html>
<html lang="en,ID">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="robots" content="index,follow">
    <?php foreach ($titles as $key => $value): ?>
    <meta name="<?php echo $key;?>" content="<?php echo $value;?>">
    <?php endforeach; ?>
    <meta name="author" content="galihkur29@gmail.com">
    <?php foreach ($titles as $key => $value): ?>
    <meta property="og:<?php echo $key;?>"   content="<?php echo $value;?>" />
    <?php endforeach; ?>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url().'assets/picture_assets/favicon';?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url().'assets/picture_assets/favicon';?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url().'assets/picture_assets/favicon';?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assets/picture_assets/favicon';?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/picture_assets/favicon';?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url().'assets/picture_assets/favicon';?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url().'assets/picture_assets/favicon';?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/mystyle.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title><?php echo str_replace('-',' ',$title);?></title>
    <style media="screen">
      body{
        font-family: 'Noto Serif', serif;
      }
      footer{
        padding: auto;
        margin: auto;
        height: 50px;
      }
      footer p{
        padding-top: 10px;
      }
      .Mynavbar ul ,.nav-item{
        margin-left: 20px;
        width: 60%;
        padding-bottom: 4px;
      }
      @media (min-width: 992px) {
        .produk{
          margin: 5px;
        }
        .produk:hover{
          background: #e0e0e0;
        }
        .words{
          border: 1px solid #dddddd;
          padding: 4px;
        }
        .words1{
          border: 1px solid #dddddd;
          padding: 10px;
          max-width: inherit;
        }
        .small_produk{
          display: none;
        }
        .brand-text{
          font-family: 'Ropa Sans', sans-serif;
          font-weight: bold;
          font-size: 30px;
        }
        .small_blog{
          display: none;
        }
        .view_small{
          display: none;
        }
        .VideoTips2{
          display: none;
        }
       }
      @media (max-width: 993px) {
           .VideoTips{
             display: none;
           }
           .small_produk{
             display: none;
           }
           .small_blog{
             display: none;
           }
           .view_small{
             display: none;
           }
           small,.description{
             font-size-adjust: auto;
             margin-left: 7px;
             padding: 5px;
           }
           .normal_blog_picture{
              padding: 10px;
           }
         }

      @media (max-width: 768px) {
        .VideoTips{
          display: none;
        }
        .VideoTips2{
          display: inherit;
        }
        .testi2{
          display: inherit;
        }
        .normal_blog{
          display: none;
        }
        .small_blog{
          display: inherit;
        }
      }
      @media screen and (max-width: 600px) {
        .words1{
          display: none;
        }
        .small_produk{
          display: inherit;
        }
        .words h2{
          font-size: 20px;
        }
        .words p{
          font-size: 12px;
          text-align: justify;
        }
        .testi{
          border: none;
        }
        .testi h2{
          font-size: 20px;
        }
        .contain_produk{
          padding-left: 70px;
        }
        .normal_blog{
          display: none;
        }
        .small_blog{
          display: inherit;
        }
        .view_normal{
          display: none;
        }
        .view_small{
          display: inherit;
        }
        .testi2{
          display: none;
        }
        .VideoTips2{
          display: none;
        }
        .VideoTips{
          display: inherit;
        }
      }
    </style>
  </head>
  <body>
    <nav class="Mynavbar navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/picture_web/new_logo.png" height="100" width="120"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>" style="color:white;font-size:18px;">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>blog" style="color:white;font-size:18px;">Tips & Trik</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>kontak" style="color:white;font-size:18px;">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>tentang" style="color:white;font-size:18px;">Tentang ALB</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container"><br>
      <?php if ($this->session->flashdata('error_submit')): ?>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
          <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('error_submit').'</p>';?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('s_saran')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo '<p>'.$this->session->flashdata('s_saran').'</p>';?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <?php endif; ?>
          <?php if ($this->session->flashdata('f_saran')): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo '<p>'.$this->session->flashdata('f_saran').'</p>';?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <?php endif; ?>
          <?php if ($this->session->flashdata('Fail_G')): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo '<p>'.$this->session->flashdata('Fail_G').'</p>';?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <?php endif; ?>
    </div>
