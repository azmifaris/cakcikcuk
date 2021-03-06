<?php 
header('Cache-Control: no cache');

?>
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
                                <h3 class="title">Daftar Pembayaran </h3>
                                <p class="category">STBA LIA</p>
                                 
                            </div>
                            <div class="header">
                                
                                <table class="col-md-12">
                                    <tr>
                                        <td style="width: 100px">
                                            <a href="<?php echo site_url('admin/keuangan/Keuangan_daftarPembayaran/index') ?>"><button class="btn btn-fill"></i> Kembali</button></a>
                                        </td>
                                        <td class="">
                                           <a href="<?php echo site_url('admin/keuangan/Keuangan_daftarPembayaran/tambah') ?>"> <button class="btn btn-info btn-fill"><i class="pe-7s-add-user"></i> Tambah</button></a>
                                        </td>
                                       
                                    </tr>
                                </table>    
                                
                            </div>

                            <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <th>Nomor</th>
                                        <th>Jurusan</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                         <?php
                                          $no=1;  
                                              if($tahun_list->num_rows() > 0)
                                              {
                                                  foreach ($tahun_list->result() as $row) {
                                              ?>
                                                  <tr>
                                                      <td><?php echo $no ;?></td>
                                                      <td><?php echo $row->nama_jurusan;?></td>
                                                      <td><?php echo $row->th_ajaran;?></td>
                                                      <td>  

                                                    <form action="<?php echo site_url('admin/keuangan/Keuangan_daftarPembayaran/index_semester')?>" method="POST">
                                                      
                                                      <div class="" hidden="">
                                                        <input type="text" name="id_jurusan" value="<?php echo $row->id_jurusan;?>">
                                                        <input type="text" name="th_ajaran" value="<?php echo $row->th_ajaran;?>">
                                                      </div>

                                                      <input class="btn btn-fill btn-info" type="submit" value="Detail">
                                                  </td>
                                                </form>
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
                                        
                                    </tbody>
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
