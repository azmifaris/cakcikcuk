            <ul class="nav">
                <li>
                    <a href="<?php echo site_url('admin/home') ?>">
                        <i class="pe-7s-home"></i>
                        <p>HOME</p>
                    </a>
                </li>
                
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-news-paper"></i><p>DATA MASTER<b class="caret"></b></p></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('jurusan') ?>"><font color="black"><i class="pe-7s-science"></i><p>Jurusan</p></a></font></li>
                <li><a href="<?php echo site_url('jenjang') ?>"><font color="black"><i class="pe-7s-shuffle"></i><p>Jenjang</p></a></font></li>
                <li><a href="<?php echo site_url('admin/kajur/matakuliah') ?>"><font color="black"><i class="pe-7s-paperclip"></i><p>Mata Kuliah</p></a></font></li>
              </ul>
                </li>
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-notebook"></i><p>PLOTING<b class="caret"></b></p></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('admin/kajur/ploting') ?>"><font color="black"><i class="pe-7s-door-lock"></i><p>Kelas</p></a></font></li>
                <li><a href="<?php echo site_url('admin/kajur/plot_kelas') ?>"><font color="black"><i class="pe-7s-paperclip"></i><p>Mata Kuliah</p></a></font></li>
              </ul>
                </li>
                
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-date"></i><p>PENJADWALAN<b class="caret"></b></p></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('krs/jadwal') ?>"><font color="black"><i class="pe-7s-file"></i><p>KRS</p></a></font></li>
                <li><a href="<?php echo site_url('jadwal') ?>"><font color="black"><i class="pe-7s-paperclip"></i><p>Mata Kuliah</p></a></font></li>
              </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('akun/konfig') ?>">
                        <i class="pe-7s-config"></i>
                        <p>KONFIGURASI</p>
                    </a>
                </li>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/kajur/laporan') ?>">
                        <i class="pe-7s-graph2"></i>
                        <p>LAPORAN</p>
                    </a>
                </li>

              </ul>
            </li>
            </ul>
        </div>