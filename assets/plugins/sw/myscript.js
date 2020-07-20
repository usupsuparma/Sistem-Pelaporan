const flashdata = $('.flash-data').data('flashdata');
// console.log(flashdata);

if ( flashdata ) {
	Swal.fire(
		'Data Mahasiswa',
		'Berhasil ' + flashdata,
		'success'
	);
}

// tombol-hapus
$('.tombol-hapus').on('click', function(e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Data mahasiswa akan dihapus",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
	  if (result.value) {
	    // Swal.fire(
	    //   'Deleted!',
	    //   'Your file has been deleted.',
	    //   'success'
	    // )
	    
	    document.location.href = href;
	  }
	})
});