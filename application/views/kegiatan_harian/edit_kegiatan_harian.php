<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    

 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Kegiatan Sales</h1>
    <?php echo form_open('skegiatan/edit_data'); ?>
    <?php echo form_hidden('id_kegiatan',$this->uri->segment(3)); ?>
    
<form>
	<div class="form-group">
    		<label for="tgl_kegiatan">Tanggal Input</label>
    		<input type="text" class="form-control" name="tgl_kegiatan" id="tgl_kegiatan" aria-describedby="tgl_kegiatan" value="<?php echo tanggal('helpers/tanggal_helper'); ?>" readonly>
  		  </div>
	<div class="form-group">
    		<label for="nmsales">Nama Sales</label>
    		<input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name']?>" readonly required>
  		  </div>
   
        <?php 
              $tr1 = $kegiatan['keterangan1'];
              $tr2 = $kegiatan['keterangan2'];
              $tr3 = $kegiatan['keterangan3'];
              $tr4 = $kegiatan['keterangan4'];
              $tr5 = $kegiatan['keterangan5'];
              $tr6 = $kegiatan['keterangan6'];
              $tr7 = $kegiatan['keterangan7'];
              $tr8 = $kegiatan['keterangan8'];
              $tr9 = $kegiatan['keterangan9'];
              $tr10 = $kegiatan['keterangan10'];
              $tr11 = $kegiatan['keterangan11'];
              $tr12 = $kegiatan['keterangan12'];
              $tr13 = $kegiatan['keterangan13'];
              $tr14 = $kegiatan['keterangan14'];
              $tr15 = $kegiatan['keterangan15'];
              $tr16 = $kegiatan['keterangan16'];
              $tr17 = $kegiatan['keterangan17'];
              $tr18 = $kegiatan['keterangan18'];

        ?>

        <?php 
              $f1 = (explode(", ", $tr1));
              $f2 = (explode(", ", $tr2));
              $f3 = (explode(", ", $tr3));
              $f4 = (explode(", ", $tr4));
              $f5 = (explode(", ", $tr5));
              $f6 = (explode(", ", $tr6));
              $f7 = (explode(", ", $tr7));
              $f8 = (explode(", ", $tr8));
              $f9 = (explode(", ", $tr9));
              $f10 = (explode(", ", $tr10));
              $f11 = (explode(", ", $tr11));
              $f12 = (explode(", ", $tr12));
              $f13 = (explode(", ", $tr13));
              $f14 = (explode(", ", $tr14));
              $f15 = (explode(", ", $tr15));
              $f16 = (explode(", ", $tr16));
              $f17 = (explode(", ", $tr17));
              $f18 = (explode(", ", $tr18));
         ?>           

  <div class="row">
        <div class="col">

        <!-- Jam 08.00 - 08.30-->
        <label>Jam</label>
            <input type="text" name="waktu1" class="form-control" value="08.00-08.30" readonly> <br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox1" name="keterangan1[]" class="custom-control-input" value="Copy Writing" <?php echo in_array("Copy Writing", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox1" >Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox2" name="keterangan1[]" class="custom-control-input" value="Brodcast WA" <?php echo in_array("Brodcast WA", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox3" name="keterangan1[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox8" name="keterangan1[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox28" name="keterangan1[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox4" name="keterangan1[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox26" name="keterangan1[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox26">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox27" name="keterangan1[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox27">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox5" name="keterangan1[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f1)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="1checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan1" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan1', $kegiatan['catatan1']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
        

        <label>Jam</label>
            <input type="text" name="waktu3" class="form-control" value="09.00-09.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox1" name="keterangan3[]" class="custom-control-input" value="Copy Writing" <?php echo in_array("Copy Writing", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox2" name="keterangan3[]" class="custom-control-input" value="Brodcast WA" <?php echo in_array("Brodcast WA", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox3" name="keterangan3[]" class="custom-control-input" value="Facebook" <?php echo in_array("Facebook", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox8" name="keterangan3[]" class="custom-control-input" value="Youtube" <?php echo in_array("Youtube", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox28" name="keterangan3[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f3)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="3checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox4" name="keterangan3[]" class="custom-control-input" value="Telpon" <?php echo in_array("Telpon", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox26" name="keterangan3[]" class="custom-control-input" value="Ishoma" <?php echo in_array("Ishoma", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox26">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox27" name="keterangan3[]" class="custom-control-input" value="Corporate" <?php echo in_array("Corporate", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox27">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox5" name="keterangan3[]" class="custom-control-input" value="Lainnya" <?php echo in_array("Lainnya", $f3)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="3checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan3" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan3', $kegiatan['catatan3']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
  
  

        <label>Jam</label>
            <input type="text" name="waktu5" class="form-control" value="10.00-10.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox1" name="keterangan5[]" class="custom-control-input" value="Copy Writing" <?php echo in_array("Copy Writing", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox2" name="keterangan5[]" class="custom-control-input" value="Brodcast WA" <?php echo in_array("Brodcast WA", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox3" name="keterangan5[]" class="custom-control-input" value="Facebook" <?php echo in_array("Facebook", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox8" name="keterangan5[]" class="custom-control-input" value="Youtube" <?php echo in_array("Youtube", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox28" name="keterangan5[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f5)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="5checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox4" name="keterangan5[]" class="custom-control-input" value="Telpon" <?php echo in_array("Telpon", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox6" name="keterangan5[]" class="custom-control-input" value="Ishoma" <?php echo in_array("Ishoma", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox7" name="keterangan5[]" class="custom-control-input" value="Corporate" <?php echo in_array("Corporate", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox5" name="keterangan5[]" class="custom-control-input" value="Lainnya" <?php echo in_array("Lainnya", $f5)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="5checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan5" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan5', $kegiatan['catatan5']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
   
  

        <label>Jam</label>
            <input type="text" name="waktu7" class="form-control" value="11.00-11.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox1" name="keterangan7[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f7)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="7checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox2" name="keterangan7[]" class="custom-control-input" value="Brodcast WA" <?php echo in_array("Brodcast WA", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox3" name="keterangan7[]" class="custom-control-input" value="Facebook" <?php echo in_array("Facebook", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox8" name="keterangan7[]" class="custom-control-input" value="Youtube" <?php echo in_array("Youtube", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox28" name="keterangan7[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f7)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="7checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox4" name="keterangan7[]" class="custom-control-input" value="Telpon" <?php echo in_array("Telpon", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox6" name="keterangan7[]" class="custom-control-input" value="Ishoma" <?php echo in_array("Ishoma", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox7" name="keterangan7[]" class="custom-control-input" value="Corporate" <?php echo in_array("Corporate", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox5" name="keterangan7[]" class="custom-control-input" value="Lainnya" <?php echo in_array("Lainnya", $f7)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="7checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan7" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan7', $kegiatan['catatan7']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu9" class="form-control" value="12.00-12.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox1" name="keterangan9[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox2" name="keterangan9[]" class="custom-control-input" value="Brodcast WA" <?php echo in_array("Brodcast WA", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox3" name="keterangan9[]" class="custom-control-input" value="Facebook" <?php echo in_array("Facebook", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox8" name="keterangan9[]" class="custom-control-input" value="Youtube" <?php echo in_array("Youtube", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox28" name="keterangan9[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f9)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="9checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox4" name="keterangan9[]" class="custom-control-input" value="Telpon" <?php echo in_array("Telpon", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox6" name="keterangan9[]" class="custom-control-input" value="Ishoma" <?php echo in_array("Ishoma", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox7" name="keterangan9[]" class="custom-control-input" value="Corporate" <?php echo in_array("Corporate", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox5" name="keterangan9[]" class="custom-control-input" value="Lainnya" <?php echo in_array("Lainnya", $f9)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="9checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan9" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan9', $kegiatan['catatan9']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu11" class="form-control" value="13.00-13.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox1" name="keterangan11[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox2" name="keterangan11[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox3" name="keterangan11[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox8" name="keterangan11[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox28" name="keterangan11[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f11)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="11checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox4" name="keterangan11[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox6" name="keterangan11[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox7" name="keterangan11[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox5" name="keterangan11[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f11)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="11checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan11" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan11', $kegiatan['catatan11']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu13" class="form-control" value="14.00-14.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox1" name="keterangan13[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox2" name="keterangan13[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox3" name="keterangan13[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox8" name="keterangan13[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox28" name="keterangan13[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f13)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="13checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox4" name="keterangan13[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox6" name="keterangan13[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox7" name="keterangan13[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox5" name="keterangan13[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f13)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="13checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan13" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan13', $kegiatan['catatan13']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu15" class="form-control" value="15.00-15.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox1" name="keterangan15[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox2" name="keterangan15[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox3" name="keterangan15[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox8" name="keterangan15[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox28" name="keterangan15[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f15)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="15checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox4" name="keterangan15[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox6" name="keterangan15[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox7" name="keterangan15[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox5" name="keterangan15[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f15)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="15checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan15" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan15', $kegiatan['catatan15']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu17" class="form-control" value="16.00-16.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox1" name="keterangan17[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox2" name="keterangan17[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox3" name="keterangan17[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox8" name="keterangan17[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox28" name="keterangan17[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f17)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="17checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox4" name="keterangan17[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox6" name="keterangan17[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox7" name="keterangan17[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox5" name="keterangan17[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f17)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="17checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan17" id="" class="form-control" maxlength="255" cols="30" rows="4"<?php echo form_textarea('catatan17', $kegiatan['catatan17']) ?></textarea><br>
        

     </div>


    <div class="col">


        <!-- Jam 08.30 - 09.00-->
        <label>Jam</label>
            <input type="text" name="waktu2" class="form-control" value="08.30-09.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox1" name="keterangan2[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox2" name="keterangan2[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox3" name="keterangan2[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox8" name="keterangan2[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox28" name="keterangan2[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f2)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="2checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox4" name="keterangan2[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox6" name="keterangan2[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox7" name="keterangan2[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox5" name="keterangan2[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f2)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="2checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan2" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan2', $kegiatan['catatan2']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu4" class="form-control" value="09.30-10.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox1" name="keterangan4[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox2" name="keterangan4[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox3" name="keterangan4[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox8" name="keterangan4[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox28" name="keterangan4[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f4)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="4checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox4" name="keterangan4[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox6" name="keterangan4[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox7" name="keterangan4[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox5" name="keterangan4[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f4)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="4checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan4" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan4', $kegiatan['catatan4']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
 

        <label>Jam</label>
            <input type="text" name="waktu6" class="form-control" value="10.30-11.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox1" name="keterangan6[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox2" name="keterangan6[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox3" name="keterangan6[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox8" name="keterangan6[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox28" name="keterangan6[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f6)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="6checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox4" name="keterangan6[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox6" name="keterangan6[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox7" name="keterangan6[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox5" name="keterangan6[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f6)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="6checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan6" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan6', $kegiatan['catatan6']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
 

        <label>Jam</label>
            <input type="text" name="waktu8" class="form-control" value="11.30-12.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox1" name="keterangan8[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox2" name="keterangan8[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox3" name="keterangan8[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox8" name="keterangan8[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox28" name="keterangan8[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f8)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="8checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox4" name="keterangan8[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox6" name="keterangan8[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox7" name="keterangan8[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox5" name="keterangan8[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f8)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="8checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan8" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan8', $kegiatan['catatan8']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
 

        <label>Jam</label>
            <input type="text" name="waktu10" class="form-control" value="12.30-13.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox1" name="keterangan10[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox2" name="keterangan10[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox3" name="keterangan10[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox8" name="keterangan10[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox28" name="keterangan10[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f10)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="10checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox4" name="keterangan10[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox6" name="keterangan10[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox7" name="keterangan10[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox5" name="keterangan10[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f10)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="10checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan10" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan10', $kegiatan['catatan10']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">



        <label>Jam</label>
            <input type="text" name="waktu12" class="form-control" value="13.30-14.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox1" name="keterangan12[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox2" name="keterangan12[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox3" name="keterangan12[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox8" name="keterangan12[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox28" name="keterangan12[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f12)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="12checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox4" name="keterangan12[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox6" name="keterangan12[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox7" name="keterangan12[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox5" name="keterangan12[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f12)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="12checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan12" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan12', $kegiatan['catatan12']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
  

        <label>Jam</label>
            <input type="text" name="waktu14" class="form-control" value="14.30-15.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox1" name="keterangan14[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox2" name="keterangan14[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox3" name="keterangan14[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox8" name="keterangan14[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox28" name="keterangan14[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f14)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="14checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox4" name="keterangan14[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox6" name="keterangan14[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox7" name="keterangan14[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox5" name="keterangan14[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f14)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="14checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan14" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan14', $kegiatan['catatan14']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">
   

        <label>Jam</label>
            <input type="text" name="waktu16" class="form-control" value="15.30-16.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox1" name="keterangan16[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox2" name="keterangan16[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox3" name="keterangan16[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox8" name="keterangan16[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox28" name="keterangan16[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f16)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="16checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox4" name="keterangan16[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox6" name="keterangan16[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox7" name="keterangan16[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox5" name="keterangan16[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f16)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="16checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan16" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan16', $kegiatan['catatan16']) ?></textarea>
        <hr class="divider" style="border-top-color: red;">

    
        <label>Jam</label>
            <input type="text" name="waktu18" class="form-control" value="16.30-17.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox1" name="keterangan18[]" class="custom-control-input" value="Copy Writing"<?php echo in_array("Copy Writing", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox2" name="keterangan18[]" class="custom-control-input" value="Brodcast WA"<?php echo in_array("Brodcast WA", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox3" name="keterangan18[]" class="custom-control-input" value="Facebook"<?php echo in_array("Facebook", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox8" name="keterangan18[]" class="custom-control-input" value="Youtube"<?php echo in_array("Youtube", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox28" name="keterangan18[]" class="custom-control-input" value="Email"<?php echo in_array("Email", $f18)? 'checked' : ' ';?> >
          <label class="custom-control-label" for="18checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox4" name="keterangan18[]" class="custom-control-input" value="Telpon"<?php echo in_array("Telpon", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox6" name="keterangan18[]" class="custom-control-input" value="Ishoma"<?php echo in_array("Ishoma", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox7" name="keterangan18[]" class="custom-control-input" value="Corporate"<?php echo in_array("Corporate", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox5" name="keterangan18[]" class="custom-control-input" value="Lainnya"<?php echo in_array("Lainnya", $f18)? 'checked' : ' ';?>>
          <label class="custom-control-label" for="18checkbox5">Lainnya</label>
        </div>
    <textarea name="catatan18" id="" class="form-control" maxlength="255" cols="30" rows="4" <?php echo form_textarea('catatan18', $kegiatan['catatan18']) ?></textarea><br>
    </div>
    </div>
    <div>
    <label>Berapa kali sudah telpon hari ini?</label>
      <input type="number" class="form-control" name="calling_telp" placeholder="Isi Angka Saja" required <?php echo form_input('calling_telp', $kegiatan['calling']); ?>
  </div><br>
  <button type="submit" name="ubah" class="btn btn-primary btn-lg btn-block">Simpan</button>
  <a type="cancel" href="<?php echo base_url('skegiatan');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
  <?php echo form_close()?>
</form>
</div>
