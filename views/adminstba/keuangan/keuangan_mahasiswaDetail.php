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
                                <h3 class="title">Data Pembayaran </h3>
                                <p class="category">STBA LIA</p>
                                <a href="<?php echo site_url('admin/keuangan/Keuangan_rekap/data_pembayaran') ?>"><button class="btn btn-fill"></i> Kembali</button></a> 
                            </div>

                            <div class="header">
                                
                                <table class="col-md-4">
                                  <?php if($mahasiswa->num_rows() > 0)
                                              {
                                                  foreach ($mahasiswa->result() as $row) {
                                              ?>
                                    <tr>
                                      <td>NIM</td>
                                      <td>:</td>
                                      <td><?php echo $row->nim;?></td>  
                                    </tr>
                                    <tr>
                                      <td>Nama</td>
                                      <td>:</td>
                                      <td><?php echo $row->nama_mhs;?></td>  
                                    </tr>
                                    <tr>
                                      <td>TTL</td>
                                      <td>:</td>
                                      <td><?php echo $row->tempat_lahir_mhs, $row->tgl_lahir_mhs;?></td>  
                                    </tr>
                                    <tr>
                                      <td>Jurusan</td>
                                      <td>:</td>
                                      <td><?php echo $row->nama_jurusan;?></td>  
                                    </tr>
                                    <tr>
                                      <td>Jenjang</td>
                                      <td>:</td>
                                      <td><?php echo $row->nama_jenjang;?></td>  
                                    </tr>
                                    <tr>
                                      <td>Angkatan</td>
                                      <td>:</td>
                                      <td><?php echo $row->angkatan;?></td>  
                                    </tr>
                                    <?php };}; ?>
                                </table>   
                                
                            </div>
                        <table></table>    
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                      <tr>
                                        <th>Nomor</th>
                                        
                                        <th>Jenis Pembayaran</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Kekurangan</th>
                                        <th>Keterangan</th>
                                        <th>Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                              $no=1;
                                              if($detail_mahasiswa->num_rows() > 0)
                                              {
                                                  foreach ($detail_mahasiswa->result() as $row) {
                                              ?>
                                                  <tr>
                                                      <td><?php echo $no;?></td>
                                                      
                                                      <td><?php echo $row->jenis_pembayaran;?></td>
                                                      <td><?php echo $row->th_ajaran;?></td>
                                                      <td><?php echo $row->nama_semester;?></td>
                                                      <td><?php echo $row->tanggal;?></td>
                                                      <td>Rp<?php 
                                                        if($row->jenis_pembayaran =='SPP Variabel'){
                                                          $total = ($row->jumlah*$row->sks);
                                                          echo  $total;
                                                        }else{
                                                          $total = $row->jumlah;
                                                          echo $total;}
                                                        ?>
                                                        </td>
                                                      <td>
                                                      <?php 
                                                          if($row->status_bayar == 2){
                                                          echo "Lunas";
                                                          }else if($row->status_bayar == 1){
                                                          echo "Belum Lunas";
                                                          };



                                                          ?>
                                                      </td>

                                                      <?php
                                                        if($row->jenis_pembayaran == 'SPP Variabel')
                                                          $kurang = abs(($row->jumlah*$row->sks)-$row->jumlah_dibayarkan);
                                                        else
                                                          $kurang = abs(($row->jumlah)-$row->jumlah_dibayarkan);
                                                      ?>
                                                      <td>Rp<?php echo $kurang;?></td>
                                                      <td><?php echo $row->catatan;?></td>
                                                      <td>
                                                          <a href="<?php echo site_url('admin/keuangan/Keuangan_rekap/edit_data/').$row->id_rekap ?>"><button class="btn btn-fill btn-warning"><i class="pe-7s-pen"></i></button></a>
                                                      
                                                          <a style="float: left" href="<?php echo site_url('admin/keuangan/Keuangan_rekap/cetak_data/').$row->id_rekap ?>"><button class="btn btn-fill "><i class="pe-7s-print"></i></button></a>
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
                                </div>

                                
                            </div>
                        </div>
                    </div>

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

            

