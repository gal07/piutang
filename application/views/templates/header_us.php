<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/mystyle.js"></script>
    <script src="<?php echo base_url();?>assets/plugin/ckeditor/ckeditor.js"></script>
    <title><?php echo $title;?></title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url();?>user/index"><img src="<?php echo base_url();?>assets/picture_web/gg.png" height="95" width="90"/><span class="brand-text">Essen</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>user/index">Edit Content <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>user/logout">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container">
      <?php if ($this->session->flashdata('DelSuc')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo '<p class="alert alert-success">'.$this->session->flashdata('DelSuc').'</p>';?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('DelFail')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('DelFail').'</p>';?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <?php endif; ?>
    </div>
