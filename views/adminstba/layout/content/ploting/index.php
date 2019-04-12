<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-book" aria-hidden="true"></i> Ploting Matakuliah</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form class="form-inline" action="<?= site_url('ploting/search') ?>" method="get">
                                    <div class="form-group">
                                        <label class="" for="email">Prodi </label> &nbsp;
                                        <select class="form-control" name="prodi">
                                            <option value="">- Prodi -</option>
                                            <?php
                                            foreach($prodi as $data_prodi){
                                            ?>
                                            <option value="<?= $data_prodi->id_jurusan ?>"><?= $data_prodi->nama_jenjang." ".$data_prodi->nama_jurusan ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    
                                </form>
                                <br>
                                <br>
                                 <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <th>No</th>
                                        <th>Matakuliah</th>
                                        <th>Prodi</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Kelas</th>
                                        <th>Dosen</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        foreach($mk_daftar as $data){
                                            
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_mk ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_jenjang." ".$data->nama_jurusan ?>
                                            </td>
                                            <td>
                                                <?= $data->tahun_ajaran ?>
                                            </td>
                                            <td>
                                                <?= $data->semester_prodi ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_kelas ?>
                                            </td>
                                            <td>
                                                <?php
                                                if($data->id_ploting){
                                                    if($data->ploting_status=='Y'){
                                                ?>
                                                <?= $data->nidn.' - '.$data->nama ?>
                                                <?php  
                                                    }else{
                                                ?>
                                                <?= $data->nidn.' - '.$data->nama ?>
                                                <?php  
                                                    }
                                                }else{
                                                ?>
                                                <form class="form-inline" action="<?= site_url('ploting/single_plot') ?>" method="post">
                                                    <input type="hidden" value="<?= $data->id_kelas ?>" name="id_mk" />
                                                    <select class="form-control" name="id_dosen" style="border-color:rgba(0,0,0,0.3);width:20em">
                                                        <option>- Dosen -</option>
                                                        <?php
                                                        foreach($dosen as $d_dosen){
                                                        ?>
                                                        <option value="<?= $d_dosen->id_dosen ?>">
                                                            <?= $d_dosen->nama ?>
                                                        </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right"></i></button>
                                                </form>
                                                <?php   
                                                }
                                                ?>

                                            </td>
                                            <td align="center">

                                                <?php
                                                if($data->id_ploting){
                                                    if($data->ploting_status=='Y'){
                                                ?>
                                                <div class="alert alert-success">ACC</div>
                                                <?php  
                                                    }else{
                                                ?>
                                                <div class="alert alert-primary">Belum ACC</div>
                                                <?php  
                                                    }
                                                }else{
                                                ?>
                                                <div class="alert alert-warning">Belum diset</div>
                                                <?php   
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if($data->id_ploting){
                                                    if($data->ploting_status=='Y'){
                                                ?>
                                                <a class="btn btn-warning" href="<?= site_url('ploting/deny/'.$data->id_ploting)?>"><i class="fa fa-times"></i></a>
                                                <?php  
                                                    }else{
                                                ?>
                                                <a class="btn btn-danger" onclick="javasciprt: return confirm('Anda yakin akan menghapus data ploting ini? ')" href="<?= site_url('admin/kajur/ploting/delete/'.$data->id_ploting)?>"><i class="fa fa-trash"></i></a>
                                                <a class="btn btn-primary" href="<?= site_url('admin/kajur/ploting/acc/'.$data->id_ploting)?>"><i class="fa fa-check-circle"></i></a>
                                                <?php  
                                                    }
                                                }else{
                                                ?>

                                                <?php   
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
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

        </div>
    </div>
</div>
