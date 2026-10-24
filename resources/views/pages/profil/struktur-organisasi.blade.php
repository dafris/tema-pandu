<style>
.orgchart .node .content
 {
    box-sizing: border-box;
 display:block!important;
    padding:10px!important;
    height:auto!important;min-height:180px!important;
    font-size:auto!important;
    border: 1px solid rgba(217, 83, 79, .8);
    border-radius: 5px!important;
    text-align: center;
    background-color: #fff;
    color: #333;
    text-overflow: ellipsis;
 white-space: normal !important;}
.orgchart {background-image:none!important;border:none!important;}
/* 1. Paksa kontainer utama pembungkus orgchart agar fleksibel dan bisa digeser */
#container {
  width: 100% !important;
  overflow-x: auto !important;
  overflow-y: hidden !important;
  position: relative !important;
  text-align: center !important; /* Membantu memusatkan isi di mobile */
  -webkit-overflow-scrolling: touch;
}

/* 2. Atur elemen bagan utama agar posisinya berada di tengah secara default */
.orgchart {
  box-sizing: border-box !important;
  display: inline-block !important; /* Mencegah elemen terjepit di sisi kiri */
  min-width: 100% !important;
  margin: 0 auto !important;
  transform: none !important; /* Mencegah kalkulasi matrix JS yang sering bikin bergeser ke kiri */
  position: relative !important;
}

/* 3. Jika menggunakan struktur node bertingkat */
.orgchart>.nodes {
  justify-content: center !important;
}
.bagan-foto{width:14vh!important;height:14vh!important;box-shadow: 0 1px 4px rgba(0, 0, 0, 0.4)!important;}
.bagan-jabatan{font-size:12px!important;}
.bagan-nama{font-size:11px!important;}
@media (max-width: 992px) {
.orgchart .node .content{padding:5px!important;min-height:120px!important;}
.bagan-foto{width:6vh!important;height:6vh!important;}
.bagan-jabatan{font-size:10px!important;font-weight:normal!important;}
.bagan-nama{font-size:9px!important;}
.orgchart {padding:0!important;margin:0 auto!important;}
.orgchart .node{width:14vh!important;}
.bagan-responsive{width:100%;position:relative;overflow:hidden;overflow-y:auto;text-align:center;}

/* Kontainer luar sebagai pembungkus utama yang aman untuk scroll */
.orgchart-mobile-wrapper {
  width: 100% !important;
  overflow-x: auto !important;
  overflow-y: hidden !important;
  -webkit-overflow-scrolling: touch;
  display: block !important;
  text-align: left !important; /* Paksa mulai dari kiri agar tidak terpotong */
  padding-bottom: 20px;
}

/* Mematikan posisi absolut / transform JS yang sering bikin lari ke kiri */
.orgchart-mobile-wrapper .orgchart {
  transform: none !important;
  position: relative !important;
  left: 0 !important;
  margin: 0 auto !important;
  display: inline-block !important;
  min-width: 100% !important;
}

/* Memastikan kontainer bawaan plugin tidak memotong */
.orgchart-mobile-wrapper #container {
  width: auto !important;
  overflow: visible !important;
  border: none !important;
}
}
</style>	
@extends('layouts.app')
@section('title', 'Struktur Pemerintahan')
@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg>
				<h1>Profil</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">STRUKTUR ORGANISASI {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</marquee>
				</div>
				<div class="relhid statis-inner organisation">
					<div class="title-statis to-center"><h1 class="gradient-text2">STRUKTUR ORGANISASI {{ strtoupper($sebutan_wilayah) }} {{ strtoupper($profil->nama_kecamatan) }}</h1></div>
					<div class="mt40">
						<div class="box-body">
                <div id="loader" style="display: none;text-align: center;margin-top: 20px;">
                    <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="30">
                </div>

                <div id="contentBox" style="display: none;">
                    <div style="margin-bottom: 10px; text-align: center;">
                        <button type="button" class="btn btn-primary" id="btnDownload">
                            <i class="fa fa-download"></i> Download Gambar
                        </button>
                    </div>
					<div class="orgchart-mobile-wrapper">
                    <div id="container" style="margin:0 auto!important;"></div>
					</div>
					
                </div>

            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@include('partials.asset_orgchart')

@push('scripts')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {

            const loader = document.getElementById('loader');
            const contentBox = document.getElementById('contentBox');

            loader.style.display = 'block';
            contentBox.style.display = 'none';

            fetch('{{ route('profil.struktur-organisasi-ajax') }}', {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'Fetch',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    loader.style.display = 'none';
                    contentBox.style.display = 'block';

                    $('#container').orgchart({
                        'data': {
                            children: result.children,
                            name: '',
                            title: ''
                        },
                        'nodeContent': 'title',
                        'nodeId': 'id',
                        'nodeTitle': 'name',
                        'createNode': function($node, data) {
                            if (data.name === '') {
                                $node.closest('.hierarchy').addClass('root-wrapper');
                                return;
                            }

                            var $content = $node.find('.content').empty();

                            if (data.image) {
                                $content.append($('<img>', {
                                    src: data.image,
                                    class: 'bagan-foto'
                                }));
                            }

                            $content.append(
                                $('<div class="bagan-jabatan">').text(data.title)
                            );
                            $content.append(
                                $('<div class="bagan-nama">').text(data.name)
                            );

                            $node.find('.title').css('background-color', data.color || '#007ad0').empty();
                            $content.css('border', '2px solid ' + (data.color || '#007ad0'));
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    loader.style.display = 'none';
                });

            document.getElementById('btnDownload').addEventListener('click', function() {
                var chart = document.getElementById('container');
                html2canvas(chart, {
                    scale: 2,
                    useCORS: true
                }).then(function(canvas) {
                    var link = document.createElement('a');
                    link.download = 'struktur-organisasi.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                });
            });


        });
		
    </script>
@endpush
