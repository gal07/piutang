<div class="container">
  <h3 style="text-align:center">Kritik dan saran</h3>
      <table class="table table-light">
            <thead>
              <tr>
                  <th>Id Aktivitas</th>
                  <th>Email</th>
                  <th>Saran / Kritik</th>
                  <th>Device</th>
                  <th>Host</th>
                  <th>Time</th>
              </tr>
            </thead>
            <?php foreach ($data as $key): ?>
            <tbody>
              <tr>
                <td><small><?php echo $key['id'];?></small></td>
                <td><small><?php echo $key['email'];?></small></td>
                <td><small><?php echo $key['saran'];?></small></td>
                <td><small><?php echo $key['device'];?></small></td>
                <td><small><?php echo $key['host'];?></small></td>
                <td><small><?php echo $key['time'];?></small></td>
              </tr>
            </tbody>
            <?php endforeach; ?>
          </table>

  </div>
