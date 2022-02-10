
 <div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
         <div class="flash-datas" data-flashdata="<?= $this->session->flashdata('flasha');?>"></div>
          <?php if($this->session->flashdata('flash')) : ?>
          <?php endif;  ?>
          <?php if($this->session->flashdata('flasha')) : ?>
          <?php endif;  ?> 
     
    <button type="button" style="float: right; margin: 1px;" class="btn btn-primary" data-toggle="modal" data-target="#dataCorporate">Tambah Data Telpon Corporate</button>
    <button type="button" style="float: right; margin: 1px;" class="btn btn-primary" data-toggle="modal" data-target="#dataPublik">Tambah Data Telpon Publik</button>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Input Kegiatan Sales</h1>
    <?php echo form_open_multipart('skegiatan/tambah_data') ?>
<form>
	<div class="form-group">
            <label for="tgl_kegiatan">Tanggal Input</label>
            <input type="text" class="form-control" name="tgl_kegiatan" id="tgl_kegiatan" aria-describedby="tgl_kegiatan" value="<?php echo tanggal('helpers/tanggal_helper'); ?>" readonly>
          </div>
    <div class="form-group">
            <label for="nmsales">Nama Sales</label>
            <input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name']?>" readonly required>
          </div>
          <div class="form-group">
  <hr class="divider">
  <div class="row">
        <div class="col">
          
        <!-- Jam 08.00 - 08.30-->
        <label>Jam</label>
            <input type="text" name="waktu1" class="form-control" value="08.00-08.30" readonly> <br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox1" name="keterangan1[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="1checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox2" name="keterangan1[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="1checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox3" name="keterangan1[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="1checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox8" name="keterangan1[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="1checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox28" name="keterangan1[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="1checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox4" name="keterangan1[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="1checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox26" name="keterangan1[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="1checkbox26">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox27" name="keterangan1[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="1checkbox27">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="1checkbox5" name="keterangan1[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="1checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan1" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
        

        <label>Jam</label>
            <input type="text" name="waktu3" class="form-control" value="09.00-09.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox1" name="keterangan3[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="3checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox2" name="keterangan3[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="3checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox3" name="keterangan3[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="3checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox8" name="keterangan3[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="3checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox28" name="keterangan3[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="3checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox4" name="keterangan3[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="3checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox26" name="keterangan3[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="3checkbox26">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox27" name="keterangan3[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="3checkbox27">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="3checkbox5" name="keterangan3[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="3checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan3" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
  
  

        <label>Jam</label>
            <input type="text" name="waktu5" class="form-control" value="10.00-10.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox1" name="keterangan5[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="5checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox2" name="keterangan5[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="5checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox3" name="keterangan5[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="5checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox8" name="keterangan5[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="5checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox28" name="keterangan5[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="5checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox4" name="keterangan5[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="5checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox6" name="keterangan5[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="5checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox7" name="keterangan5[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="5checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="5checkbox5" name="keterangan5[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="5checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan5" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
   
  

        <label>Jam</label>
            <input type="text" name="waktu7" class="form-control" value="11.00-11.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox1" name="keterangan7[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="7checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox2" name="keterangan7[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="7checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox3" name="keterangan7[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="7checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox8" name="keterangan7[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="7checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox28" name="keterangan7[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="7checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox4" name="keterangan7[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="7checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox6" name="keterangan7[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="7checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox7" name="keterangan7[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="7checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="7checkbox5" name="keterangan7[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="7checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan7" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu9" class="form-control" value="12.00-12.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox1" name="keterangan9[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="9checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox2" name="keterangan9[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="9checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox3" name="keterangan9[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="9checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox8" name="keterangan9[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="9checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox28" name="keterangan9[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="9checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox4" name="keterangan9[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="9checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox6" name="keterangan9[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="9checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox7" name="keterangan9[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="9checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="9checkbox5" name="keterangan9[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="9checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan9" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu11" class="form-control" value="13.00-13.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox1" name="keterangan11[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="11checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox2" name="keterangan11[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="11checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox3" name="keterangan11[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="11checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox8" name="keterangan11[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="11checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox28" name="keterangan11[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="11checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox4" name="keterangan11[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="11checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox6" name="keterangan11[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="11checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox7" name="keterangan11[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="11checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="11checkbox5" name="keterangan11[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="11checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan11" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu13" class="form-control" value="14.00-14.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox1" name="keterangan13[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="13checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox2" name="keterangan13[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="13checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox3" name="keterangan13[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="13checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox8" name="keterangan13[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="13checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox28" name="keterangan13[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="13checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox4" name="keterangan13[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="13checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox6" name="keterangan13[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="13checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox7" name="keterangan13[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="13checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="13checkbox5" name="keterangan13[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="13checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan13" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu15" class="form-control" value="15.00-15.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox1" name="keterangan15[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="15checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox2" name="keterangan15[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="15checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox3" name="keterangan15[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="15checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox8" name="keterangan15[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="15checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox28" name="keterangan15[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="15checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox4" name="keterangan15[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="15checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox6" name="keterangan15[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="15checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox7" name="keterangan15[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="15checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="15checkbox5" name="keterangan15[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="15checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan15" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu17" class="form-control" value="16.00-16.30" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox1" name="keterangan17[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="17checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox2" name="keterangan17[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="17checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox3" name="keterangan17[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="17checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox8" name="keterangan17[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="17checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox28" name="keterangan17[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="17checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox4" name="keterangan17[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="17checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox6" name="keterangan17[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="17checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox7" name="keterangan17[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="17checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="17checkbox5" name="keterangan17[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="17checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan17" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea><br>


     </div>


    <div class="col">


        <!-- Jam 08.30 - 09.00-->
        <label>Jam</label>
            <input type="text" name="waktu2" class="form-control" value="08.30-09.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox1" name="keterangan2[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="2checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox2" name="keterangan2[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="2checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox3" name="keterangan2[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="2checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox8" name="keterangan2[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="2checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox28" name="keterangan2[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="2checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox4" name="keterangan2[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="2checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox6" name="keterangan2[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="2checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox7" name="keterangan2[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="2checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="2checkbox5" name="keterangan2[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="2checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan2" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">


        <label>Jam</label>
            <input type="text" name="waktu4" class="form-control" value="09.30-10.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox1" name="keterangan4[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="4checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox2" name="keterangan4[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="4checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox3" name="keterangan4[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="4checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox8" name="keterangan4[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="4checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox28" name="keterangan4[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="4checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox4" name="keterangan4[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="4checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox6" name="keterangan4[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="4checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox7" name="keterangan4[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="4checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="4checkbox5" name="keterangan4[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="4checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan4" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
 

        <label>Jam</label>
            <input type="text" name="waktu6" class="form-control" value="10.30-11.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox1" name="keterangan6[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="6checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox2" name="keterangan6[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="6checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox3" name="keterangan6[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="6checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox8" name="keterangan6[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="6checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox28" name="keterangan6[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="6checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox4" name="keterangan6[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="6checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox6" name="keterangan6[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="6checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox7" name="keterangan6[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="6checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="6checkbox5" name="keterangan6[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="6checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan6" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
 

        <label>Jam</label>
            <input type="text" name="waktu8" class="form-control" value="11.30-12.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox1" name="keterangan8[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="8checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox2" name="keterangan8[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="8checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox3" name="keterangan8[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="8checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox8" name="keterangan8[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="8checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox28" name="keterangan8[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="8checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox4" name="keterangan8[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="8checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox6" name="keterangan8[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="8checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox7" name="keterangan8[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="8checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="8checkbox5" name="keterangan8[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="8checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan8" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
 

        <label>Jam</label>
            <input type="text" name="waktu10" class="form-control" value="12.30-13.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox1" name="keterangan10[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="10checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox2" name="keterangan10[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="10checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox3" name="keterangan10[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="10checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox8" name="keterangan10[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="10checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox28" name="keterangan10[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="10checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox4" name="keterangan10[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="10checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox6" name="keterangan10[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="10checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox7" name="keterangan10[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="10checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="10checkbox5" name="keterangan10[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="10checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan10" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">



        <label>Jam</label>
            <input type="text" name="waktu12" class="form-control" value="13.30-14.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox1" name="keterangan12[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="12checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox2" name="keterangan12[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="12checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox3" name="keterangan12[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="12checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox8" name="keterangan12[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="12checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox28" name="keterangan12[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="12checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox4" name="keterangan12[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="12checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox6" name="keterangan12[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="12checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox7" name="keterangan12[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="12checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="12checkbox5" name="keterangan12[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="12checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan12" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
  

        <label>Jam</label>
            <input type="text" name="waktu14" class="form-control" value="14.30-15.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox1" name="keterangan14[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="14checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox2" name="keterangan14[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="14checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox3" name="keterangan14[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="14checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox8" name="keterangan14[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="14checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox28" name="keterangan14[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="14checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox4" name="keterangan14[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="14checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox6" name="keterangan14[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="14checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox7" name="keterangan14[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="14checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="14checkbox5" name="keterangan14[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="14checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan14" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">
   

        <label>Jam</label>
            <input type="text" name="waktu16" class="form-control" value="15.30-16.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox1" name="keterangan16[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="16checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox2" name="keterangan16[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="16checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox3" name="keterangan16[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="16checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox8" name="keterangan16[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="16checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox28" name="keterangan16[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="16checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox4" name="keterangan16[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="16checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox6" name="keterangan16[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="16checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox7" name="keterangan16[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="16checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="16checkbox5" name="keterangan16[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="16checkbox5">Lainnya</label>
        </div>
        <textarea name="catatan16" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
        <hr class="divider" style="border-top-color: red;">

    
        <label>Jam</label>
            <input type="text" name="waktu18" class="form-control" value="16.30-17.00" readonly><br>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox1" name="keterangan18[]" class="custom-control-input" value="Copy Writing" >
          <label class="custom-control-label" for="18checkbox1">Copywriting</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox2" name="keterangan18[]" class="custom-control-input" value="Brodcast WA">
          <label class="custom-control-label" for="18checkbox2">Brodcast Wa</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox3" name="keterangan18[]" class="custom-control-input" value="Facebook">
          <label class="custom-control-label" for="18checkbox3">Facebook</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox8" name="keterangan18[]" class="custom-control-input" value="Youtube">
          <label class="custom-control-label" for="18checkbox8">Youtube</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox28" name="keterangan18[]" class="custom-control-input" value="Email">
          <label class="custom-control-label" for="18checkbox28">Email</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox4" name="keterangan18[]" class="custom-control-input" value="Telpon">
          <label class="custom-control-label" for="18checkbox4">Telpon</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox6" name="keterangan18[]" class="custom-control-input" value="Ishoma">
          <label class="custom-control-label" for="18checkbox6">Ishoma</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox7" name="keterangan18[]" class="custom-control-input" value="Corporate">
          <label class="custom-control-label" for="18checkbox7">Corporate</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" id="18checkbox5" name="keterangan18[]" class="custom-control-input" value="Lainnya">
          <label class="custom-control-label" for="18checkbox5">Lainnya</label>
        </div>
    <textarea name="catatan18" id="" class="form-control" cols="30" rows="4" maxlength="255" placeholder="Tambah Keterangan"></textarea>
    </div>
    </div>
     <label>Berapa kali sudah telpon hari ini?</label>
     <input type="number" class="form-control" name="calling_telp" placeholder="Isi Angka Saja" required> 
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
  <a type="cancel" href="<?php echo base_url('skegiatan');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
  <?php echo form_close()?>
</form>
</div>


<!-- Modal Publik -->
<div class="modal fade bd-example-modal-lg" id="dataPublik" tabindex="-1" role="dialog" aria-labelledby="dataPublik" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataPublik">Tambah Data Publik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('publik/tambah_data1');?>" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label for="nmsales">Nama Sales</label>
            <input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name']?>" readonly required>
          </div>

          <div class="form-group">
            <label for="nmcust">Nama Customer</label>
            <input type="text" class="form-control" name="nmcust" id="nmcust" aria-describedby="nmcust" placeholder="Silahkan Masukan Nama Customer" required>
          </div>

          <div class="form-group">
            <label for="notelp">No. Telpon</label>
            <input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" placeholder="Silahkan Masukan No. Telpon" required>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="Silahkan Masukan Alamat">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Silahkan Masukan Email">
          </div>

          <div class="form-group">
            <label for="training_diinput">Training Yang Diikuti</label>
            <input type="text" class="form-control" name="training_diinput" id="training_diinput" aria-describedby="training_diinput" placeholder="Silahkan Masukan Data Training" required>
          </div>

          <div class="form-group">
            <label for="tglFollowup">Tanggal Follow Up</label>
            <input type="date" class="form-control" name="tglFollowup" id="tglFollowup" aria-describedby="tglFollowup" required>
          </div>

          <div class="form-group">
            <label for="status_publik">Status</label>
                <select class="form-control" name="status_publik" id="exampleFormControlSelect1">
                 <option>-Select-</option>
                 <option>Telpon</option>
                 <option>Follow Up</option>
                 <option>Belum Di Follow Up</option>
                 <option>DP</option>
                 <option>Sudah Lunas</option>
                </select>
          </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Korporate -->
<div class="modal fade bd-example-modal-lg" id="dataCorporate" tabindex="-1" role="dialog" aria-labelledby="dataCorporate" aria-hidden="true">
  <div class="modal-dialog modal-lg"" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dataCorporate">Tambah Data Corporate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('corporate/tambah_data1'); ?>" method="post">
      <div class="modal-body">
                <div class="form-group" onload="waktu()">
            <label for="nmsales">Nama Sales</label>
            <input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name']?>" readonly required>
          </div>

          <div class="form-group">
            <label for="nmperusahaan">Nama Perusahaan</label>
            <input type="text" class="form-control" name="nmperusahaan" id="nmperusahaan" aria-describedby="nmperusahaan" placeholder="Silahkan Masukan Nama Perusahaan" required>
          </div>

          <div class="form-group">
            <label for="notelp">Telpon</label>
            <input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" placeholder="Silahkan Masukan No. Telpon" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Silahkan Masukan Email" required>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="Silahkan Masukan Alamat" required>
          </div>

          <div class="form-group">
            <label for="tglTelpon">Tanggal Telpon</label>
            <input type="text" class="form-control" name="tglTelpon" id="tglTelpon" aria-describedby="tglTelpon" value="<?php echo tanggal('helpers/tanggal_helper'); ?>" readonly>
          </div>

          <div class="form-group">
            <label for="tglFollowUp">Tanggal Follow Up</label>
            <input type="date" class="form-control" name="tglFollowUp" id="tglFollowUp" aria-describedby="tglFollowUp" required>
          </div>

          <div class="form-group">
            <label for="status">Status</label>
                <select class="form-control" name="status" id="status" required>
                 <option>-Select-</option>
                 <option value="Telpon">Telpon</option>
                 <option value="Follow Up">Follow Up</option>
                 <option value="Reject">Reject</option>
                 <option value="Kirim Proposal">Kirim Proposal</option>
                 <option value="Visit">Visit</option>
                </select>
          </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Tambahankan Keterangan Disini" rows="3"></textarea>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

  </div>
        <!-- /.container-fluid -->
</div>

 <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Customer Management Korpora Counsultant <?= date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url();?>assets/js/demo/chart-pie-demo.js"></script>
  
  <!--Sweetalert2 -->
  <script src="<?= base_url();?>assets/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="<?= base_url();?>assets/sweetalert2/alexscript.js "></script>

</body>

</html>





