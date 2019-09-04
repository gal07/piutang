<div class="container">
  <?php if(isset($MyVal) == '1'): ?>
    <?php
    $kode = md5('1');
    echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
    <a href="<?php echo base_url().'user/create_blog'?>" class="btn btn-warning"><strong>+</strong> New Blog</a>
        <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Thumbnails</th>
                    <th>Judul</th>
                    <th>Body</th>
                    <th>Description</th>
                    <th>Time Upload</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
              </thead>
              <?php foreach ($result as $key): ?>
              <tbody>
                <tr>
                  <td><?php echo $key['id']; ?></td>
                  <td><img class="img_frame" style="float:left;" src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" alt="<?php echo $key['thumb'];?>" height="150" width="100" title="<?php echo $key['thumb'];?>"></td>
                  <td><?php echo $key['title']; ?></td>
                  <td><?php echo word_limiter($key['text'],20);?></td>
                  <td><?php echo word_limiter($key['description'],20); ?></td>
                  <td><?php echo $key['create_at']; ?></td>
                  <td><a href="<?php echo base_url();?>user/edit_blog/<?php echo $key['id'];?>"><button class="btn btn-warning btn-sm">Edit</button></a></td>
                  <td><a href="<?php echo base_url();?>user/delete_blog/<?php echo $key['id'];?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
            <a href="<?php echo base_url().'user/list_blog';?>" class="blue-text"><p style="text-align:center;"> Back </p></a>
  <?php else: ?>
    <?php
    $kode = md5('1');
    echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
    <a href="<?php echo base_url().'user/create_blog'?>" class="btn btn-warning"><strong>+</strong> New Blog</a>
        <table class="table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Thumbnails</th>
                    <th>Judul</th>
                    <th>Body</th>
                    <th>Description</th>
                    <th>Time Upload</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
              </thead>
              <?php foreach ($data as $key): ?>
              <tbody>
                <tr>
                  <td><?php echo $key['id']; ?></td>
                  <td><img class="img_frame" style="float:left;" src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" alt="<?php echo $key['thumb'];?>" height="150" width="100" title="<?php echo $key['thumb'];?>"></td>
                  <td><?php echo $key['title']; ?></td>
                  <td><?php echo word_limiter($key['text'],20);?></td>
                  <td><?php echo word_limiter($key['description'],20); ?></td>
                  <td><?php echo $key['create_at']; ?></td>
                  <td><a href="<?php echo base_url();?>user/edit_blog/<?php echo $key['id'];?>"><button class="btn btn-warning btn-sm">Edit</button></a></td>
                  <td><a href="<?php echo base_url();?>user/delete_blog/<?php echo $key['id'];?>"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
  <?php endif; ?>
  </div>
