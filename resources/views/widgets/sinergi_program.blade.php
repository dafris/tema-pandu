<div class="sinergi mt40">
    <div class="mlr-page">
        <div class="relhid headbox to-center">
            <div class="difle-c"><div class="headmodule difle-c"><h1>Sinergi Program</h1></div></div>
        </div>
        <div class="sinergi-inner boxshadow brd-radius10">
            <div class="desk-module to-center">Link Dan Kemitraan Strategis Dalam Bersinergi Dengan Kecamatan</div>
            <div id="sinergi-widget">
				<div class="marquee-wrapper"><div class="marquee-inner">
					<span>Loading sinergi program...</span>
				</div></div>
			</div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(function() {
        $.getJSON('{!! $urlApi !!}/website').done(function(res) {
            // Extract data from the API response
            if (res.data && Array.isArray(res.data)) {
                const websiteData = {};

                // Convert array of objects to key-value pairs
                res.data.forEach(item => {
                    if (item.id && item.attributes) {
                        websiteData[item.id] = item.attributes[0]; // Get first element of attributes array
                    }
                });

                updateSinergiProgram2(websiteData.sinergi);
                // Trigger custom event to notify other components
                $(document).trigger('websiteDataLoaded', [websiteData]);
            }
        }).fail(function() {
            console.error('Gagal mengambil data website dari API.');
        });


        function updateSinergiProgram2(sinergi) {
    if (!sinergi || !Array.isArray(sinergi)) return;

    // 1. Generate HTML (tambahkan satu container untuk isi marquee)
    let sinergiHtml = '<div class="marquee-wrapper"><div class="marquee-inner">';
    
    sinergi.forEach(data => {
        data.gambar = data.gambar.replace(/\/+img\//, 'img/');
        const gambarPath = data.gambar ? (data.gambar.startsWith('http') ? data.gambar : '{{ asset("") }}' + data.gambar) : '';
        
        sinergiHtml += `
            <div class="ratio ratio-1x1 product displaygrid">
                <a href="${data.url || '#'}" rel="noopener noreferrer" target="_blank">
                    <img src="${gambarPath}" alt="Sinergi Program Image">
					<p>${data.nama || ''}</p>
                </a>
            </div>`;
    });
    
    sinergiHtml += '</div></div>';

    // 2. Inject ke DOM
    const $widget = $('#sinergi-widget');
    $widget.html(sinergiHtml);

    // 3. Jalankan Animasi tepat setelah DOM terisi
    startMarquee();
}

function startMarquee() {
    const wrapper = document.querySelector(".marquee-wrapper");
    const container = document.querySelector(".marquee-inner");
    
    // Klone konten untuk efek seamless
    const clones = container.innerHTML;
    container.innerHTML += clones;

    let scrollAmount = 0;
    let isPaused = false;

    function marqueeScroll() {
        if (!isPaused) {
            scrollAmount += 1;
            // Jika sudah mencapai setengah dari total lebar konten
            if (scrollAmount >= container.scrollWidth / 2) {
                scrollAmount = 0;
            }
            container.style.transform = `translateX(-${scrollAmount}px)`;
        }
        requestAnimationFrame(marqueeScroll);
    }
    
    marqueeScroll();

    wrapper.addEventListener("mouseenter", () => isPaused = true);
    wrapper.addEventListener("mouseleave", () => isPaused = false);
}


    })
</script>
@endpush