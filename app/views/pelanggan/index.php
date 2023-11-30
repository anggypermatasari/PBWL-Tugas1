<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb">
  <thead>
      <tr>
            <th>NO</th>
            <th>ID Golongan</th>
            <th>No Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>KTP</th>
            <th>Seri</th>
            <th>Meteran</th>
            <th>Aktif</th>
            <th>ID User</th>
            <th>Edit</th>
            <th>Delete</th>
      </tr>
  </thead>
  <tbody>
      <?php
      usort($data['rows'], function($a, $b) {
          return $a['pel_no'] <=> $b['pel_no'];
      });
      $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['gol_id']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['gol_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>
  </tbody>
</table>