<div class="container">
  <h3 style="text-align:center">List Belum Fix Beli</h3>
      <table class="table table-dark responsive">
            <thead>
              <tr>
                  <th>Id Aktivitas</th>
                  <th>Nama Pembeli</th>
                  <th>Alamat</th>
                  <th>Kode Barang Dibeli</th>
                  <th>Harga</th>
                  <th>Action</th>
              </tr>
            </thead>
            <?php foreach ($history as $key): ?>
            <tbody>
              <tr>
                <?php echo form_open('user/save?q=fix');?>
                <td><input type="number" value="<?php echo $key['id']; ?>" name="id1" disabled><input type="hidden" name="id" value="<?php echo $key['id']; ?>"></td>
                <td><input type="text" disabled value="<?php echo $key['nama'];?>"></td>
                <td><input type="text" disabled value="<?php echo $key['alamat'].','.$key['kelurahan'].','.$key['kecamatan'].','.$key['kako']; ?>"></td>
                <td><input type="text" disabled value="<?php echo $key['barang'];?>"></td>
                <td><input type="number" disabled value="<?php echo $key['harga']; ?>"></td>
                <td><input type="submit" name="accept" value="Fix" class="btn btn-success btn-sm"> | <a href="<?php echo base_url();?>user/deleteHis/<?php echo $key['id'];?>" class="btn btn-danger btn-sm"><strong>X</strong></a></td>
                </form>
              <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
  </div>
