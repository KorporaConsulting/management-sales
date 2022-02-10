const flashData = $('.flash-data').data('flashdata');
const flashDatas = $('.flash-datas').data('flashdata');


if (flashData) {
	Swal.fire(
	  'Data Berhasil Disimpan!',
	  'Silahkan klik Ok!',
	  'success'
	)
}if(flashDatas){
	Swal.fire(
	  'Gagal Disimpan',
      'Terjadi Kesalahan!',
      'error'
		)
}

// hapus-data
$('.hapus-data').on('click', function(e){

	//mematikan function href
	e.preventDefault();

	const href = $(this).attr('href');

	Swal.fire({
		  title: 'Anda Yakin?',
		  text: "Akan menghapus data ini?",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Ya, hapus data ini!'
		}).then((result) => {
		  if (result.value) {
		    document.location.href = href;
		  }
		})
});