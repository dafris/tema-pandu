
	<div class="maphome p5 brd-radius7">
		<div id="canvas_peta_home"></div>
	</div>

@include('partials.asset_leaflet')
<script type="application/javascript">
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
    return data;
}

function initPetaHome(websiteData) {
    try {
        var profile = websiteData.profile || {};
        var data_umum = profile.data_umum || {};

        var lat = parseFloat(data_umum.lat);
        var lng = parseFloat(data_umum.lng);
        var koordinat_kantor = (!isNaN(lat) && !isNaN(lng)) ? [lat, lng] : [-1.054, 116.718];
        var elementPeta = document.getElementById('canvas_peta_home');
        if (!elementPeta) {
            console.error("Elemen HTML 'canvas_peta_home' tidak ditemukan!");
            return; 
        }
        if (elementPeta._leaflet_id) {
            elementPeta._leaflet_id = null;
            elementPeta.innerHTML = '';
        }
        var map = L.map('canvas_peta_home', {
            center: koordinat_kantor,
            zoom: 11, 
            scrollWheelZoom: false 
        });
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a>'
        }).addTo(map);
        var path_kec = parseKoordinatAman(data_umum.path);
        if (path_kec) {
            L.polygon(path_kec, {
                color: '#003863', 
                weight: 1,
                fillColor: '#ff0000',
                fillOpacity: 0.15
            }).addTo(map);
        }
        var infoPopup = `
            <div style="text-align:center; font-family: sans-serif;">
                <h5 style="margin: 0 0 5px 0; color: #4e73df;">Kantor Kecamatan</h5>
            </div>
        `;
        
        L.marker(koordinat_kantor)
         .addTo(map)
         .bindPopup(infoPopup)
         .openPopup();

    } catch (errorPeta) {
        console.error("Terjadi masalah saat menggambar peta home:", errorPeta);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    
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
            if (websiteData.profile) {
                // Jalankan inisialisasi peta khusus Beranda
                initPetaHome(websiteData);
            }
        });
    } else {
        console.error("jQuery belum dimuat di halaman Beranda!");
    }
});
</script>