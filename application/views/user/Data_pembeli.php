<div class="container">
  <h3 style="text-align:center">Data Pembeli</h3>
  <?php if (isset($MyVal) == '4'): ?>
    <?php
     $kode = md5('4');
     echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
        <table class="table table-light">
              <thead>
                <tr>
                    <th>Id Aktivitas</th>
                    <th>salt</th>
                    <th>IP</th>
                    <th>Host</th>
                    <th>URL_execution</th>
                    <th>Server</th>
                    <th>Device</th>
                    <th>Time</th>
                </tr>
              </thead>
              <?php foreach ($result as $key): ?>
              <tbody>
                <tr>
                  <td><small><?php echo $key['id_activity'];?></small></td>
                  <td><small><?php echo $key['salt'];?></small></td>
                  <td><small><?php echo $key['ip'];?></small></td>
                  <td><small><?php echo $key['host'];?></small></td>
                  <td><small><?php echo $key['path_exec'];?></small></td>
                  <td><small><?php echo $key['server_name'];?></small></td>
                  <td><small><?php echo $key['device'];?></small></td>
                  <td><small><?php echo $key['time'];?></small></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
  <?php else: ?>
    <?php
     $kode = md5('4');
     echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
        <table class="table table-light">
              <thead>
                <tr>
                    <th>Id Aktivitas</th>
                    <th>salt</th>
                    <th>IP</th>
                    <th>Host</th>
                    <th>URL_execution</th>
                    <th>Server</th>
                    <th>Device</th>
                    <th>Time</th>
                </tr>
              </thead>
              <?php foreach ($data as $key): ?>
              <tbody>
                <tr>
                  <td><small><?php echo $key['id_activity'];?></small></td>
                  <td><small><?php echo $key['salt'];?></small></td>
                  <td><small><?php echo $key['ip'];?></small></td>
                  <td><small><?php echo $key['host'];?></small></td>
                  <td><small><?php echo $key['path_exec'];?></small></td>
                  <td><small><?php echo $key['server_name'];?></small></td>
                  <td><small><?php echo $key['device'];?></small></td>
                  <td><small><?php echo $key['time'];?></small></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>


  <?php endif; ?>
    </div>
