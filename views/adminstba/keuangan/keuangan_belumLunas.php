<!doctype html>
<html lang="en">
<head>
   <?php $this->load->view("adminstba/layout/header/head") ?> 
</head>
<body>

<div class="wrapper">
    
<?php $this->load->view("adminstba/layout/sidelogo/sidelogo") ?>

        
        <div class="sidebar-wrapper">
            <div class="logo">
                <?php if($this->session->userdata('level')==='1'):?>
                  <?php $this->load->view("adminstba/layout/mainlogo/mainlogo") ?>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <?php $this->load->view("adminstba/layout/mainlogo/mainlogoBAK") ?>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php elseif($this->session->userdata('level')==='4'):?>
                  <?php $this->load->view("adminstba/layout/mainlogo/mainlogoKeuangan") ?>
                <?php else:?>
                  <?php $this->load->view("adminstba/layout/mainlogo/mainlogoBAK") ?>
                <?php endif;?>        
            </div>
         
                <?php if($this->session->userdata('level')==='1'):?>
                  <?php $this->load->view("adminstba/layout/menu/menukajur") ?>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <?php $this->load->view("adminstba/layout/menu/menubaak") ?>
                  
                <?php elseif($this->session->userdata('level')==='4'):?>
                  <?php $this->load->view("adminstba/layout/menu/menuKeuangan") ?>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <?php $this->load->view("adminstba/layout/menu/menubaak") ?>
                <?php endif;?>  
        </div>
    
   <div class="main-panel">
        
        <?php $this->load->view("adminstba/layout/mainpanel/mainpanel") ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h3 class="title">Rekap Pembayaran Belum Lunas</h3>
                                <p class="category">STBA LIA</p>
                                 
                            </div>
                            <div class="header">
                                
                                  
                                
                            </div>

                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <th>Nomor</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Jenjang</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Total</th>
                                        <th>Jumlah Dibayarkan</th>
                                        <th>Status</th>
                                        <th>Kurang</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>

                                    </thead>
                                    <tbody>
                                      <?php
                                              $no=1;
                                              if($belum_lunas->num_rows() > 0)
                                              {
                                                  foreach ($belum_lunas->result() as $row) {
                                              ?>
                                                  <tr>
                                                      <td><?php echo $no;?></td>
                                                      <td><?php echo $row->nim;?></td>
                                                      <td><?php echo $row->nama_mhs;?></td>
                                                      <td><?php echo $row->nama_jurusan;?></td>
                                                      <td><?php echo $row->nama_jenjang;?></td>
                                                      <td><?php echo $row->jenis_pembayaran;?></td>
                                                      <td><?php echo $row->th_ajaran;?></td>
                                                      <td><?php echo $row->nama_semester;?></td>
                                                      <td><?php echo $row->tanggal;?></td>
                                                      <td>Rp<?php echo  $row->jumlah;?></td>
                                                      <td>Rp<?php echo  $row->jumlah_dibayarkan;?></td>
                                                      <td>

                                                        <?php if($row->status_bayar == 0)
                                                          echo "Belum Bayar";
                                                          else if($row->status_bayar == 1)
                                                          echo "Belum Lunas";



                                                          ?>
                                                          

                                                        </td>
                                                      <td>Rp<?php 
                                                        $kurang = $row->jumlah-$row->jumlah_dibayarkan;
                                                      echo $kurang;?></td>
                                                      <td><?php echo $row->catatan;?></td>
                                                       
                                                       <td>
                                                          <a href="<?php echo site_url('admin/keuangan/Keuangan_rekap/edit_data/').$row->id_rekap ?>"><button class="btn btn-fill btn-success"><i class="pe-7s-pen"></i></button></a>
                                                      </td>
                                                        
                                                  </tr>
                                              <?php $no++;
                                                  }
                                              }
                                              else
                                              {
                                      ?>
                                                  <tr>
                                                      <td colspan="3">No data Found</td>
                                                  </tr>
                                      <?php
                                              }
                                      ?>
<!--                                         <?php $n=1; foreach ($as as $rekap): ?>
 -->                                        <tr>
                                            <<!-- td><?php echo $n; ?></td>
                                            <td><?php echo $rekap->nim ?></td>
                                            <td><?php echo $rekap->nama ?></td>
                                            <td><?php echo $rekap->prodi ?></td>
                                            <td><?php echo $rekap->jenjang ?></td>
                                            <td><?php echo $rekap->jenisP ?></td>
                                            <td><?php echo $rekap->tanggalBayar ?></td>
                                            <td><?php echo $rekap->jumlah ?></td> -->
                                            
                                        </tr>
<!--                                         <?php $n++; endforeach; ?>
 -->                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div></div>
        <footer class="footer">
            <?php $this->load->view("adminstba/layout/footer/footer") ?>
        </footer>

    </div>
</div>


</body>

    <?php $this->load->view("adminstba/layout/footer/js") ?>

</html>
    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                
                icon: 'pe-7s-gift',
                message: "Selamat datang di Admin Panel"

            },{
                type: 'info',
                timer: 2
            });

        });
    </script>
