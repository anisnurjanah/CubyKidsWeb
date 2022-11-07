
<!--- modal hapus --->
<div id="myModalHapus<?php echo $data['id']; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- konten modal tambah data-->
                        <div class="modal-content">
                          <!-- heading modal -->
                          <div class="modal-header">
                            <h4 class="modal-title">Hapus Data </h4>
                          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                          </div>
                          <!-- body modal -->
                      <form action="edit.php" method="get">
                          <div class="text-left modal-body">

                            <?php
                              $id = $data['id']; 
                              $query_edit = mysqli_query($conn,"SELECT * FROM transaksi WHERE id='$id'");
                              //$result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($query_edit)) {  
                            ?>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <div class="form-group">
                               <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
                            </div>
                          </div>
                          <!-- footer modal -->
                          <div class="modal-footer">
                          
                          <a href="hapus.php?id=<?=$row['id'];?>" class="btn btn-danger">Hapus</a>
                      </form>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Keluar</button>
                          </div>
                          <?php 
                                 }
<!-- konten modal tambah data-->
                        <div class="modal-content">
                          <!-- heading modal -->
                          <div class="modal-header">
                            <h4 class="modal-title">Hapus Data </h4>
                          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                          </div>
                          <!-- body modal -->
                      <form action="edit_data.php" method="get">
                          <div class="text-left modal-body">

                            <?php
                              $id = $data['id']; 
                              $query_edit = mysqli_query($conn,"SELECT * FROM barang WHERE id='$id'");
                              //$result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($query_edit)) {  
                            ?>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <div class="form-group">
                               <h3>Apakah anda yakin ingin menghapus data ini?</h3>     
                            </div>
                          </div>
                          <!-- footer modal -->
                          <div class="modal-footer">
                          
                          <a href="hapus_stok.php?id=<?=$row['id'];?>" class="btn btn-danger">Hapus</a>
                      </form>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Keluar</button>
                          </div>
                          <?php 
                                 }
                  //mysql_close($host);
                          ?>
                        </div>

                      </div>
                  </div>
