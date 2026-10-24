
	<div class="autocol mlr-min5">
		<div class="icon-item to-center" onclick="profilOpen()">
			<div class="icon-item-inner to-center">
			<svg viewBox="0 0 24 24"><path d="M20,18.69L12.7,22.74C12.2,23 11.7,23 11.2,22.74L4,18.69L17.05,5.54L17.4,5.44C17.7,5.44 17.87,5.57 17.9,5.84L20,18.69M9.35,5.74L4.8,13.29L6.7,1.34C6.73,1.07 6.9,0.94 7.2,0.94C7.4,0.94 7.53,1 7.6,1.19L9.75,5.14L9.35,5.74M13.85,7L4.3,16.59L11.55,4.29C11.65,4.09 11.8,4 12,4C12.2,4 12.33,4.09 12.4,4.29L13.85,7Z" /></svg>
			<p>Profil<br/>Kecamatan</p>
			</div>
		</div>
		<div class="icon-item to-center">
			<a href="{{ url('profil/struktur-organisasi') }}">
			<div class="icon-item-inner to-center">
			<svg viewBox="0 0 24 24"><path d="M9,2V8H11V11H5C3.89,11 3,11.89 3,13V16H1V22H7V16H5V13H11V16H9V22H15V16H13V13H19V16H17V22H23V16H21V13C21,11.89 20.11,11 19,11H13V8H15V2H9Z" /></svg>
			<p>Struktur<br/>Organisasi</p>
			</div>
			</a>
		</div>
		<div class="icon-item to-center" onclick="desaOpen()">
			<div class="icon-item-inner to-center">
			<svg viewBox="0 0 24 24"><path d="M21 13.1C20.9 13.1 20.7 13.2 20.6 13.3L19.6 14.3L21.7 16.4L22.7 15.4C22.9 15.2 22.9 14.8 22.7 14.6L21.4 13.3C21.3 13.2 21.2 13.1 21 13.1M19.1 14.9L13 20.9V23H15.1L21.2 16.9L19.1 14.9M21 9H13V3H21V9M13 18.06V11H21V11.1C20.24 11.1 19.57 11.5 19.19 11.89L13 18.06M11 13H3V3H11V13M11 21H3V15H11V21Z" /></svg>
			<p>Data<br/>Desa</p>
			</div>
		</div>
		<div class="icon-item to-center">
			<a href="{{ url('statistik/kependudukan') }}">
			<div class="icon-item-inner to-center">
			<svg viewBox="0 0 24 24"><path d="M20 17C21.1 17 22 16.1 22 15V4C22 2.9 21.1 2 20 2H9.5C9.8 2.6 10 3.3 10 4H20V15H11V17M15 7V9H9V22H7V16H5V22H3V14H1.5V9C1.5 7.9 2.4 7 3.5 7H15M8 4C8 5.1 7.1 6 6 6S4 5.1 4 4 4.9 2 6 2 8 2.9 8 4M17 6H19V14H17V6M14 10H16V14H14V10M11 10H13V14H11V10Z" /></svg>
			<p>Statistik<br/>Penduduk</p>
			</div>
			</a>
		</div>
		<div class="icon-item to-center">
			<a href="{{ url('statistik/pendidikan') }}">
			<div class="icon-item-inner to-center">
			<svg viewBox="0 0 24 24"><path d="M16 8C16 10.21 14.21 12 12 12C9.79 12 8 10.21 8 8L8.11 7.06L5 5.5L12 2L19 5.5V10.5H18V6L15.89 7.06L16 8M12 14C16.42 14 20 15.79 20 18V20H4V18C4 15.79 7.58 14 12 14Z" /></svg>
			<p>Statistik<br/>Pendidikan</p>
			</div>
			</a>
		</div>
		<div class="icon-item to-center">	
			<a href="{{ url('statistik/anggaran-dan-realisasi') }}">
			<div class="icon-item-inner to-center">
			<svg viewBox="0 0 24 24"><path d="M17 3H7C4.79 3 3 4.79 3 7V17C3 19.21 4.79 21 7 21H19C20.11 21 21 20.11 21 19V9C21 7.9 20.11 7 19 7V5C19 3.9 18.11 3 17 3M17 5V7H7C6.27 7 5.59 7.2 5 7.54V7C5 5.9 5.9 5 7 5M15.5 15.5C14.67 15.5 14 14.83 14 14S14.67 12.5 15.5 12.5 17 13.17 17 14 16.33 15.5 15.5 15.5Z" /></svg>
			<p>Transparansi<br/>Anggaran</p>
			</div>
			</a>
		</div>
	</div>
	
<div id="openprofil" class="panel-icon">
	<div class="panel-icon-box">
		<div class="scrollbar" id="style-3">
		<div class="panel-icon-pd">
			<a href="{{ url('profil/sejarah') }}"><div class="panel-item">Sejarah</div></a>
			<a href="{{ url('profil/visi-misi') }}"><div class="panel-item">Visi & Misi</div></a>
			<a href="{{ url('profil/letak-geografis') }}"><div class="panel-item">Letak Geografis</div></a>
			<a href="{{ url('potensi/potensi') }}"><div class="panel-item">Potensi</div></a>
		</div>
		</div>
		<div class="panel-icon-close difle-c">
			<div class="closepanel difle-c" onclick="profilClose()">
				<svg viewBox="0 0 24 24"><path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" /></svg>
			</div>
		</div>
	</div>
</div>	
<div id="opendatadesa" class="panel-icon">
	<div class="panel-icon-box">
		<div class="scrollbar" id="style-3">
		<div class="panel-icon-pd">
			<div id="desa-list-container">
						<ul>
							<li><i class="fa fa-spinner fa-spin"></i> Loading...</li>
						</ul>
					</div>
		</div>
		</div>
		<div class="panel-icon-close difle-c">
			<div class="closepanel difle-c" onclick="desaClose()">
				<svg viewBox="0 0 24 24"><path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" /></svg>
			</div>
		</div>
	</div>
</div>
	
<script>
	function profilOpen() {
	  document.getElementById("openprofil").classList.add("is-open");
	}
	function profilClose() {
	  document.getElementById("openprofil").classList.remove("is-open");
	}
	function desaOpen() {
	  document.getElementById("opendatadesa").classList.add("is-open");
	}
	function desaClose() {
	  document.getElementById("opendatadesa").classList.remove("is-open");
	}
</script>