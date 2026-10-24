@extends('layouts.app')

@section('title', 'Letak Geografis')

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
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">LETAK
                    GEOGRAFIS <span id="nama-kecamatan"></span></marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">LETAK
                    GEOGRAFIS <span id="nama-kecamatan"></span></h1></div>
					<div class="mt40">
						<div id="canvas_peta" class="map-geo" style="border:0;width:100%;margin:0;"></div>
						<input type="hidden" name="path" id="path">
						<div class="mt20">
							<div class="autocol mlr-min15">
								<div class="column-2 mt15">
									<div class="relhid info-geo"><b>{{ ucwords(strtolower($sebutan_wilayah . ' ' . $profil->nama_kecamatan)) }}</b>, {{ ucwords(strtolower('PEMERINTAH KAB. ' . $profil->nama_kabupaten)) }}, Provinsi {{ ucwords(strtolower($profil->nama_provinsi)) }} mempunyai Luas <b>{{ number_format($profil?->dataumum?->luas_wilayah_value ?? 0) }} km<sup>2</sup></b> yang mencakup<b> <span id="jumlah-desa"></span> Desa/Kelurahan</b>, yaitu :</div>
									<div class="geo-desa mt15">
										<ul id="list-desa"></ul>
									</div>
								</div>
								<div class="column-2 mt15 batas-wilayah">
								<div class="to-center"><h3>Batas wilayah {{ $sebutan_wilayah }} {{ ucwords(strtolower($profil->nama_kecamatan)) }} meliputi :</h3></div>
								@include('pages.profil.geo')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@include('partials.asset_leaflet')

@push('scripts')
<script type="application/javascript">
// Fungsi helper pembaca koordinat
function parseKoordinatAman(data) {
    if (!data || data === "" || data === "null") return null;
    if (typeof data === 'string') {
        try {
            return JSON.parse(data);
        } catch (e) {
            console.warn("Format koordinat tidak valid (bukan JSON):", data);
            return null;
        }
    }
    return data; // Jika sudah array/object
}

function initPetaKecamatan(websiteData) {
    try {
        var profile = websiteData.profile || {};
        var data_umum = profile.data_umum || {};
        var desa_list = websiteData.desa || [];

        // 1. Tentukan Koordinat Tengah (Kantor Kecamatan)
        var lat = parseFloat(data_umum.lat);
        var lng = parseFloat(data_umum.lng);
        var koordinat_kantor = (!isNaN(lat) && !isNaN(lng)) ? [lat, lng] : [-1.054, 116.718];

        // 2. Siapkan Wadah Peta Leaflet
        var elementPeta = document.getElementById('canvas_peta');
        if (!elementPeta) {
            console.error("Elemen HTML dengan id 'canvas_peta' tidak ditemukan!");
            return; 
        }

        // Hapus peta lama jika sudah ter-render sebelumnya (menghindari error Leaflet 'Map already initialized')
        if (elementPeta._leaflet_id) {
            elementPeta._leaflet_id = null;
            elementPeta.innerHTML = '';
        }

        var map = L.map('canvas_peta', {
            center: koordinat_kantor,
            zoom: 12
        });

        // 3. Tambahkan Peta Dasar (OpenStreetMap - Selalu muncul tanpa bergantung fungsi OpenDK)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a>'
        }).addTo(map);

        // 4. Tambahkan Pin Kantor Kecamatan (Default Marker)
        L.marker(koordinat_kantor)
         .addTo(map)
         .bindPopup('<b>Kantor Kecamatan</b>')
         .openPopup();

        // 5. Gambar Batas Wilayah Kecamatan (Garis/Polygon)
        var path_kec = parseKoordinatAman(data_umum.path);
        if (path_kec) {
            L.polygon(path_kec, {
                color: '#003863', // Hijau
                weight: 2,
                fillColor: '#ff0000',
                fillOpacity: 0.2
            }).addTo(map);
        }

        // 6. Gambar Batas Wilayah Desa-desa (Garis/Polygon)
        if (desa_list && desa_list.length > 0) {
            desa_list.forEach(function(desa) {
                var path_desa = parseKoordinatAman(desa.path);
                if (path_desa) {
                    L.polygon(path_desa, {
                        color: '#dc3545', // Merah
                        weight: 2,
                        fillOpacity: 0.05
                    }).addTo(map).bindPopup('<b>Wilayah ' + desa.sebutan_desa + ' ' + desa.nama + '</b>');
                }
            });
        }

    } catch (errorPeta) {
        console.error("Terjadi masalah saat menggambar peta:", errorPeta);
    }
}

// Pastikan kode berjalan setelah DOM dan jQuery siap
document.addEventListener("DOMContentLoaded", function() {
    
    // Perbaiki Ikon Leaflet menggunakan CDN
    if (typeof L !== 'undefined' && L.Icon && L.Icon.Default) {
        delete L.Icon.Default.prototype._getIconUrl;
        L.Icon.Default.mergeOptions({
            iconRetinaUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon-2x.png',
            iconUrl:       'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon.png',
            shadowUrl:     'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        });
    }

    if (typeof $ !== 'undefined') {
        $(document).on('websiteDataLoaded', function(event, websiteData) {
            var profile = websiteData.profile || null;
            var desa = websiteData.desa || [];

            if (profile) {
                // Update teks di halaman web
                try {
                    $('#nama-kecamatan').text(profile.nama_kecamatan ? profile.nama_kecamatan.toUpperCase() : '');
                    $('#nama-kecamatan-batas').text(profile.nama_kecamatan ? profile.nama_kecamatan.toLowerCase() : '');
                    $('#sebutan-wilayah').text('{{ config("profil.sebutan_wilayah", "Kecamatan") }}');
                    $('#nama-wilayah-lengkap').text([
                        '{{ config("profil.sebutan_wilayah", "Kecamatan") }}',
                        profile.nama_kecamatan,
                        'Kabupaten', profile.nama_kabupaten,
                        'Provinsi', profile.nama_provinsi
                    ].join(' '));

                    var data_umum = profile.data_umum || {};
                    $('#luas-wilayah').text(data_umum.luas_wilayah_value ? parseFloat(data_umum.luas_wilayah_value).toLocaleString() : '0');
                    $('#jumlah-desa').text(desa.length);
                    
                    if (typeof terbilang === "function") {
                        $('#jumlah-desa-terbilang').text(terbilang(desa.length));
                    }

                    $('#bts-wil-utara').text(data_umum.bts_wil_utara || '');
                    $('#bts-wil-timur').text(data_umum.bts_wil_timur || '');
                    $('#bts-wil-selatan').text(data_umum.bts_wil_selatan || '');
                    $('#bts-wil-barat').text(data_umum.bts_wil_barat || '');

                    var desaListHtml = '';
                    if (desa.length > 0) {
                        desa.forEach(function(item) {
                            desaListHtml += `<li>${item.sebutan_desa} ${item.nama} </li>`;
                        });
                    }
                    $('#list-desa').html(desaListHtml);
                } catch (eTeks) {
                    console.error("Gagal update teks UI:", eTeks);
                }

                // Panggil fungsi peta Leaflet Utama
                initPetaKecamatan(websiteData);
            }
        });
    } else {
        console.error("jQuery belum dimuat! Harap letakkan script peta di bawah import jQuery.");
    }
});
</script>
@endpush