<section>

	<h1><?php echo $judul ?></h1>
	<p align='justify'>pada pengertian codeigniter di atas
	tadi di jelaskan bahwa codeigniter menggunakan metode MVC.apa itu
	MVC? kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih
	jauh dalam belajar codeigniter.</p>
	            <p>MVC adalah teknik atau konsep yang memisahkan
	komponen utama menjadi tiga komponen yaitu model, view dan
	controller.</p>

	                             <ol type="A">
	                             <li>Model</li>
	<p align='justify'> Model adalah kelas yang memperesentasikan atau
	memodelkan type data yang akan digunakan oleh apikasi.Model atau juga
	dapat di defenisikan sebagai bagian penanganan yang berhubungan dengan
	pengelahan atau manipulasi database. Seprti misalnya mengambil data
	dari database,mengimput dan menglolah databaselainnya. Semua
	intruksi atau fungsi yang berhubungan dengan penglolahan databese di
	letakan di dalam model. Sebagai contoh, jika ingin membuat aplikasih
	untuk menghitung luas dan keliling lingkaran,maka dapat memodelkan
	objek lingkaran sebagai kelas model.</p>
	<p align='justify'> Sebagai catatan,semua model harus disimpan di
    dalam folder application\model</p>
    <li>View</li>

	<p align='justify'>View merupakan bagian yang menagani halaman user
	interface atau halaman yang muncul pada user(pada browser). Tampilan
	dari user interface di kumpulkan pada view untuk memisahkannya
	dengan controllerdan model sehingga memudahkan web designer dalam
	melakukan pengembangan tampilan halaman website.</p>
	<li>controller</li>

	<p align='justify'>Controller merupakan kumpulan kontruksi aksi yang
	menghubungkan model dan view, jadi user tindak berhubungan
	dengan model secara langsung, intinya data yang disimpan di
	database(model) di ambil oleh controller dan kemudian controller
	pula yang menampilkan nya di view. Jadi controller lah yang mengelolah
	intruksi.</p>

	<p align='justify'>Dari penjelasan model view dan controller
	di atas dapat di simpulkan bahwa controller sebagai penghubung view
	dan model. Misalnya pada aplikasi yang menampilkan data dengan 
	menggunakan metode konsep mvc, controller memanggil intruksi pada
	model yang mengambil data pada database, kemudian controller yang
	meneruskan pada view untuk ditampilkan. Jadi jelas sudah dan
	sangat mudah dalam pengembagan aplikasi dengan cara mvc ini karena
	web designer atao front-end developer tidak perlu lagi berhungan
	dengan controller, dia hanya perlu berhungan dengan view untuk
	mendesign tampilah aplikasih, karena back-end developer yang
	menangani bagian controller dan modelnya. Jadi pembagian tugas pun
	menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan
	cepat dan terstruktur.</p>
</section>





