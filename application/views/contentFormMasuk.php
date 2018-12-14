    <!--Disini Content-->
<div id="page-wrapper">
      <div class="main-page">
          <div class="clearfix"> </div>     
      </div>
      <!--isi disini-->
        <div class="row calender widget-shadow">
          <div class="container" style="position: relative;width: 100%;">
    <div class="row">
        <div class="col-md-20 col-md-offset-0">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h1 class="panel-title"><b>Data Formulir Masuk</b></h1>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="<?php echo base_url() ?>/index.php/admin/add_form"><button type="button" class="btn btn-sm btn-primary btn-create" style="margin-top: -13px;">Tambah Formulir</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list" style="position: relative;width: 100%;">
                  <thead>
                    <tr>
                        <th align="center" style="width: 5%"><font size="2">No</font></th>
                        <th style="text-align: center;"><font size="2">Nama</font></th>
                        <th style="text-align: center;"><font size="2">Tempat, Tanggal Lahir</font></th>
                        <th style="text-align: center;"><font size="2">Agama</font></th>
                        <th style="text-align: center;"><font size="2">Alamat</font></th>
                        <th style="text-align: center;"><font size="2">Email</font></th>
                        <th style="text-align: center;"><font size="2">Angkatan</font></th>
                        <th style="text-align: center;"><font size="2">Program Studi</font></th>
                        <th style="text-align: center;"><font size="2">Pekerjaan</font></th>
                        <th style="text-align: center;"><font size="2">Judul Skripsi</font></th>
                        <th style="text-align: center;"><font size="2">Aksi</font></th>
                    </tr> 
                  </thead>
                  <tbody>

                        <?php foreach($getForm->result() as $key) { ?>
                          <tr>
                            <td align="center"><font size="2"><?php echo $key->id_formulir; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->nama_depan; ?> <?php echo $key->nama_belakang; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->tempat_lahir; ?>, <?php echo $key->tanggal_lahir; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->agama; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->alamat; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->email; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->tahun_masuk; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->prodi; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->pekerjaan; ?></font></td>
                            <td align="center"><font size="2"><?php echo $key->judul; ?></font></td>
                            <td align="center">
                              <a onclick="return confirm('Ingin menghapus?')" class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/del/<?php echo $key->id_formulir ?>"><em class="fa fa-trash"><font size="2">Hapus</font></em></a>
                            </td>
                          </tr>
                        <?php } ?>

                        </tbody>
                </table>
            
              </div>
            </div>

</div></div></div>


        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
