<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>-----Login Cuy---</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style media="screen">
        .io{
          margin: auto;
          padding: auto;
          width: 400px;
          height: 300px;
          float: inherit;
        }
      </style>
  </head>
  <body>
    <div class="container io row">
      <h2>Admin Essen ALB</h2>
      <br>
      <?php if ($this->session->flashdata('f_login')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('f_login').'</p>';?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php endif; ?>
      <br>
      <?php
       echo validation_errors();
       echo form_open('user/get_user');?>
       <div class="col-sm-12">
      <div class="form-group">
        <label for="recipient-name" class="col-form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username">
      </div>
      <div class="form-group">
        <label for="message-text" class="col-form-label">Password</label>
        <input type="password" class="form-control"  name="password" id="password">
      </div>
      <input type="submit" name="submit" value="Log In" class="btn btn-primary btn-sm">
    </form>
    </div>
  </div>
  </body>
</html>
