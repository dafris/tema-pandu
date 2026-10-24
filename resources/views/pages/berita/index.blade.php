
<div id="kecamatan">
    <div class="autocol mlr-min10">

    </div>
    @include('components.pagination')
</div>
@push('scripts')
<script>
    $(function() {
        let apiBase ="{!! $apiBase !!}";
        
            function renderArticles(items, includes) {
                if (!items || items.length === 0) {
                    return '<div class="rel-hid mt20 to-center" style="width:100%;text-align:center;"><p style="font-weight:bold;">Berita / Artikel Belum Tersedia...</p></div>';
                }

                return items.map(function(single) {
                    const item = single.attributes;
                    var kategoriHtml = '';
                    if (item.kategori && item.kategori.nama_kategori) {
                        kategoriHtml = '<a href="' + (includes['kategori'][item.id_kategori]?.link) + '">' + item.kategori.nama_kategori + '</a>';
                    }
                    var isi = (item.isi || '').replace(/(<([^>]+)>)/gi, "");
                    var excerpt = isi.length > 150 ? isi.substr(0, 150) + '...' : isi;

                    var html = `
					
						<div class="newscol boxshadow brd-radius10 displaygrid">
							<div class="aligntop relhid p10">
							<div class="relhid news-image">
								<a href="${item.link}">
								<div class="image-news"><div class="imagefull"><img src="${item.gambar_src}" alt="${item.slug}"></div></div>
								</a>
							</div>
							<div class="relhid news-date desktop-only">
								${item.tanggal}
							</div>
							<div class="news-title title-item">
								<a href="${item.link}"><h2 class="mt15 mb10">${item.judul}</h2></a>
								<div class="info-item difle-l mb5 mobile-view">
									<div class="info-item-icon">
										<svg viewBox="0 0 24 24"><path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 19H5V9H19V19M5 7V5H19V7H5M10.56 17.46L16.5 11.53L15.43 10.47L10.56 15.34L8.45 13.23L7.39 14.29L10.56 17.46Z" /></svg>
									</div>
									${item.tanggal}
								</div>
								<span>${kategoriHtml}</span>	
								<p class="mt5">${excerpt}</p>
							</div>
							</div>
							<div class="alignbottom mt10 mb10 difle-c">
								<a href="${item.link}" class="more-item brdgrey-1 difle-c" style="line-height:1;">Selengkapnya</a>
							</div>
						</div>
					
					`;

                    return html;
                }).join('');
            }

        function loadArtikel(pageNumber) {
            var $container = $('#kecamatan .autocol.mlr-min10');            
            $container.html(`@include('components.placeholder')`);
            
            $.getJSON(apiBase + '&page[number]=' + pageNumber)
                .done(function(res) {
                    var items = res.data || res;
                    const includes = []
                    if(res.included){
                        res.included.forEach(item => {
                            if (!includes[item.type]) {
                                includes[item.type] = {};
                            }
                            includes[item.type][item.id] = item.attributes;
                        });    
                    }
                    
                    var html = renderArticles(items, includes);
                    var $container = $('#kecamatan .autocol.mlr-min10');

                    $container.html(html);
                    initPagination(res, function() {
                        $('.pagination').on('click', '.btn-page', function() {
                            var params = {};
                            var page = $(this).data('page');
                            loadArtikel(page);
                        });
                        $('.pagination').find('.btn-page').attr('href','#kecamatan')
                    });
                })
                .fail(function() {
                    console.error('Gagal mengambil data artikel dari API.');
                });
        }

        // initial load
        loadArtikel(1);
    });
</script>
@endpush