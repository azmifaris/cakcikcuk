<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-list" aria-hidden="true"></i> Kelas</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-4">
                                        
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <form action="<?php echo site_url('plot_kelas/index'); ?>" class="form-inline" method="get">
                                            
                                        </form>
                                    </div>
                                </div>
        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
            <tr>
                <th>No</th>
		<th>Kode Mk</th>
		<th>Nama Mk</th>
		<th>Sks Mk</th>
		<th>Id Jurusan</th>
		<th>Tahun Ajaran</th>
		<th>Semester</th>
        <th>Jumlah Kelas</th>
        <th>Action</th>
    </thead>
            </tr><?php
            foreach ($plot_kelas_data as $plot_kelas)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $plot_kelas->kode_mk ?></td>
			<td><?php echo $plot_kelas->nama_mk ?></td>
			<td><?php echo $plot_kelas->sks_mk ?></td>
			<td><?php echo $plot_kelas->id_jurusan ?></td>
			<td><?php echo $plot_kelas->tahun_ajaran ?></td>
			<td><?php echo $plot_kelas->semester_prodi ?></td>
			
            <td><?php echo $plot_kelas->jml_kelas ?></td>
            <td><a class="btn btn-primary" href="<?= site_url('matakuliah/kelas/'.$plot_kelas->id_makul)?>"><i class="fa fa-plus"></i></a></td>
		  </tr>
                <?php
            }
            ?>
        </table>
    </thead>
       <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary">Total Record :
                                            <?php echo $total_rows ?></a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <?php echo $pagination ?>
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
