    <!--Disini Content-->
<div id="page-wrapper">
      <div class="main-page">
          <div class="clearfix"> </div>     
      </div>
      <!--isi disini-->
        <div class="row calender widget-shadow">
          <div class="container" style="position: relative;width: 100%;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h1 class="panel-title"><b>Daftar Admin</b></h1>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="<?php echo base_url(); ?>index.php/Admin/add_admin"><button type="button" class="btn btn-sm btn-primary btn-create" style="margin-top: -13px;">Tambah Admin</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list" style="position: relative;width: 100%;">
                  <thead>
                    <tr>
                        <th align="center" style="width: 5%;">Id</th>
                        <th class="hidden-xs" style="text-align: center;">Nama Admin</th>
                        <th align="center" style="text-align: center;">Pilihan</th>
                    </tr> 
                  </thead>
                  <tbody>
                         <?php foreach($data as $key) { ?>      
                          <tr>
                            <td class="hidden-xs" align="center" style="vertical-align: middle;"><?php echo $key ['id_adm']; ?></td>
                            <td align="center" style="vertical-align: middle;"><?php echo $key ['nama']; ?></td>
                            <td align="center" style="vertical-align: middle;">
                              <a class="btn btn-default" href="<?php echo site_url('admin/pilih/'.$key ['id_adm'])  ?>"> <em class="fa fa-trash">Edit</em></a>
                              <a onclick="return confirm('Ingin menghapus admin?')" class="btn btn-primary" href="<?php echo base_url(); ?>index.php/admin/do_delete_admin/<?php echo $key ['id_adm']; ?>"><em class="fa fa-trash"> Hapus</em></a>
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
