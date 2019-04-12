<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-list" aria-hidden="true"></i> <?= '('.$mk->kode_mk.') '.$mk->nama_mk ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="int">Kelas</label>
                                        <input type="text" class="form-control" name="nama_kelas" id="sks_mk" placeholder="Kelas Matakuliah" value="" />
                                    </div>
                                    <input type="hidden" name="id_mk" value="<?php echo $id; ?>" />
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?php echo site_url('matakuliah/kelas/'.$id) ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
