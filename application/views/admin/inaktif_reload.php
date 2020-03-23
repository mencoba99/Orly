<?
defined('SYSPATH') or die('No direct script access.');
?>
<table width="100%" class="table table-striped table-bordered">
  <thead>
      <tr>
        <th width="5%" align="center" bgcolor="#D6D6D6" class="text-center">No</th>
        <th width="10%" align="center" bgcolor="#D6D6D6" class="text-center">Action</th>
        <th width="9%" align="center" bgcolor="#D6D6D6" class="text-center">Pelaksana</th>
        <th width="9%" align="center" bgcolor="#D6D6D6" class="text-center">Hasil</th>
        <th width="15%" align="center" bgcolor="#D6D6D6" class="text-center">Bulan / Tahun</th>
        <th width="21%" align="left" bgcolor="#D6D6D6">Kode Lembaga</th>
        <th width="23%" align="left" bgcolor="#D6D6D6">Isi</th>
        <th width="8%" align="left" bgcolor="#D6D6D6" class="text-center">OP</th>
    </tr>
  </thead>   
  <tbody>
    <?
    foreach($results as $inaktif) {
        $file = "";
        if(is_file($dir_doc.$separator.$inaktif->file) && $inaktif->file) {
            $file = "<a class='conbtn btn btn-warning btn-sm' data-fancybox-type='iframe' href='".URL::base()."assets/doc/".$inaktif->file."' title='File'> <i class='fa fa-file'></i> </a>";
        }		
        ?>
        <tr>
            <td align="center"><? echo $i; ?></td>
            <td align='center'>						
                <div class="action">
                <?
                if($instansi->status->id == 1) {
                    echo "<a class='btn btn-success btn-sm' href='".URL::base()."admin/inaktif/edit/".$inaktif->id."'><i class='fa fa-edit'></i></a> ";
                }
                else {
                    echo "<a class='btn btn-success btn-sm' href='#'><i class='fa fa-edit'></i></a> ";
                }
                echo $file; 
                ?>
                </div></td>
            <td align="center"><? echo $inaktif->pelaksana; ?></td>
            <td align="center"><? echo $inaktif->hasil; ?></td>
            <td align="center"><? echo $inaktif->bulan." / ".$inaktif->tahun; ?></td>
            <td align="left"><? echo $inaktif->instansi->name; ?></td>
            <td align="left"><? echo $inaktif->isi; ?></td>
            <td align="center"><? echo $inaktif->user->kode; ?></td>
        </tr>
        <?
        $i++;
    }
    ?>
  </tbody>
  <tr>
      <td colspan="8">
        <? if($num_rows==0) {echo "";} else {echo $page_links;} 
        if($instansi->status->id == 1) {
            ?>
            <div class="btn-right">
            <a class="btn btn-primary pull-right"href="<? echo URL::base().'admin/inaktif/new/'.$instansi_id; ?>">Tambah Data</a>
            <a class="btn btn-danger pull-right" data-fancybox data-type="ajax" data-src="<? echo URL::base()."admin/inaktif/search"; ?>">Cari Data</a>
            <a class="btn btn-warning pull-right"href="<? echo URL::base()."admin/inaktif"; ?>">Reset</a>
            </div>
            <?
        }
        ?>
        </td>
    </tr>
</table>