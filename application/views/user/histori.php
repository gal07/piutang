<div class="container4">
  <?php if (isset($MyVal) == '2'): ?>
    <?php
     $kode = md5('2');
     echo form_open('user/Search?key='.$kode.'');?>
    <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
    <h3 style="text-align:center">List Fix Beli</h3>
        <table class="table table-dark">
              <thead>
                <tr>
                    <th>Id Aktivitas</th>
                    <th>Nama Pembeli</th>
                    <th>Alamat</th>
                    <th>Kode Barang Dibeli</th>
                    <th>Harga</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
              </thead>
              <?php foreach ($history as $key): ?>
              <tbody>
                <tr>
                  <td><?php echo $key['id']; ?></td>
                  <td><?php echo $key['nama'] ?></td>
                  <td><?php echo $key['alamat'].','.$key['kelurahan'].','.$key['kecamatan'].','.$key['kako']; ?></td>
                  <td><?php echo $key['barang'];?></td>
                  <td><?php echo 'Rp. '.number_format($key['harga']);?></td>
                  <td><?php echo $key['waktu'];?></td>
                  <td><?php echo $key['status'] ?></td>
                <?php endforeach; ?>
                <?php foreach ($total as $key): ?>
                  <td class="scope"><br><br>Rp. <?php echo number_format($key['harga']);?></td>
                <?php endforeach; ?>
                </tr>
              </tbody>
            </table><br>
            <a href="<?php echo base_url().'user/getFixCustomer';?>" class="blue-text"><p style="text-align:center;">Back</p></a>
            <br>
            <button id="triger" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cek Barang</button>
            <br>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Isi Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Barang</th>
                          <th>Terjual</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php foreach ($g1 as $value): ?>
                            <td><?php echo $value['nama'];?></td>
                            <td><?php echo $value['jumlah'];?></td>
                          <?php endforeach; ?>
                        </tr>
                        <tr>
                          <?php foreach ($g2 as $value): ?>
                            <td><?php echo $value['nama'];?></td>
                            <td><?php echo $value['jumlah'];?></td>
                          <?php endforeach; ?>
                        </tr>
                        <tr>
                          <?php foreach ($g3 as $value): ?>
                            <td><?php echo $value['nama'];?></td>
                            <td><?php echo $value['jumlah'];?></td>
                          <?php endforeach; ?>
                        </tr>
                        <tr>
                          <?php foreach ($g4 as $value): ?>
                            <td><?php echo $value['nama'];?></td>
                            <td><?php echo $value['jumlah'];?></td>
                          <?php endforeach; ?>
                        </tr>
                        <tr>
                          <?php foreach ($g5 as $value): ?>
                            <td><?php echo $value['nama'];?></td>
                            <td><?php echo $value['jumlah'];?></td>
                          <?php endforeach; ?>
                        </tr>
                        <tr>
                          <?php foreach ($g6 as $value): ?>
                            <td><?php echo $value['nama'];?></td>
                            <td><?php echo $value['jumlah'];?></td>
                          <?php endforeach; ?>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
    <?php else: ?>
      <?php
       $kode = md5('2');
       echo form_open('user/Search?key='.$kode.'');?>
      <input type="search" name="kunci" value="" class="float-right" placeholder="Search..." required><input type="submit" name="submit" value="Cari" class="float-right"></form>
      <h3 style="text-align:center">List Fix Beli</h3>
          <table class="table table-dark">
                <thead>
                  <tr>
                      <th>Salt</th>
                      <th>Nama Pembeli</th>
                      <th>Alamat</th>
                      <th>Kode Barang Dibeli</th>
                      <th>Harga</th>
                      <th>Waktu</th>
                      <th>Total</th>
                  </tr>
                </thead>
                <?php foreach ($history as $key): ?>
                <tbody>
                  <tr>
                    <td><?php echo $key['salt']; ?></td>
                    <td><?php echo $key['nama'] ?></td>
                    <td><?php echo $key['alamat'].','.$key['kelurahan'].','.$key['kecamatan'].','.$key['kako']; ?></td>
                    <td><?php echo $key['barang'];?></td>
                    <td><?php echo 'Rp. '.number_format($key['harga']); ?></td>
                    <td><?php echo $key['waktu'];?></td>
                  <?php endforeach; ?>
                  <?php foreach ($total as $key): ?>
                    <td class="scope"><br><br>Rp. <?php echo number_format($key['harga']);?></td>
                  <?php endforeach; ?>
                  </tr>
                </tbody>
              </table>
              <button id="triger" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cek Barang</button>
              <br>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Isi Pesanan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Nama Barang</th>
                            <th>Terjual</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php foreach ($g1 as $value): ?>
                              <td><?php echo $value['nama'];?></td>
                              <td><?php echo $value['jumlah'];?></td>
                            <?php endforeach; ?>
                          </tr>
                          <tr>
                            <?php foreach ($g2 as $value): ?>
                              <td><?php echo $value['nama'];?></td>
                              <td><?php echo $value['jumlah'];?></td>
                            <?php endforeach; ?>
                          </tr>
                          <tr>
                            <?php foreach ($g3 as $value): ?>
                              <td><?php echo $value['nama'];?></td>
                              <td><?php echo $value['jumlah'];?></td>
                            <?php endforeach; ?>
                          </tr>
                          <tr>
                            <?php foreach ($g4 as $value): ?>
                              <td><?php echo $value['nama'];?></td>
                              <td><?php echo $value['jumlah'];?></td>
                            <?php endforeach; ?>
                          </tr>
                          <tr>
                            <?php foreach ($g5 as $value): ?>
                              <td><?php echo $value['nama'];?></td>
                              <td><?php echo $value['jumlah'];?></td>
                            <?php endforeach; ?>
                          </tr>
                          <tr>
                            <?php foreach ($g6 as $value): ?>
                              <td><?php echo $value['nama'];?></td>
                              <td><?php echo $value['jumlah'];?></td>
                            <?php endforeach; ?>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
              </div>
  <?php endif; ?>

  </div>
