<div class="head-moduletop difle-c">
	<h1>Galeri</h1>
</div>
<div class="box-module">
<div id="albums-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="pad text-bold bg-white" style="text-align:center; padding: 20px 0;">
                    <span>Memuat data album...</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function(){
        function renderAlbums(items) {
            if (!items || items.length === 0) {
                return '<div class="rel-hid mt10 difle-c">' +
                    '<div class="data-empty difle-c"><svg viewBox="0 0 24 24"><path d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" /></svg>Untuk saat ini belum ada data yang tersedia</div>' +
                    '</div>';
            }
            var albumHtml = '<div id="swiper-albums" class="swiper">' +
                '<div class="swiper-wrapper">';

            items.forEach(function(item) {
                var album = item.attributes;
                var albumImage = album.gambar_path || '{{ asset("img/no-image.png") }}';
                
                albumHtml += '<div class="swiper-slide">' +
                    '<div class="galhome-box">' + 
						'<a href="{{ url("/publikasi/galeri") }}/' + (album.slug || '') + '">' +
						'<div class="galhome-image">' +
							'<div class="image-gal imagefull">' +
								'<img src="' + albumImage + '" alt="' + (album.slug || '') + '">' +
								'<div class="title-absolute to-center">' +
									'<h2>' + (album.judul || '') + '</h2>' +
								'</div>' +
							'</div>' +
						'</div>' +
						'<div class="galhome-date to-center">' +
						'<p>' + formatDate(album.created_at) + '</p>' +
						 '</div>' +
						'</a>' +
                    '</div>' +
                '</div>';
            });
            albumHtml += '</div>' +
                '<div class="swiper-button-next"></div>' +
                '<div class="swiper-button-prev"></div>' +
                '<div class="swiper-pagination"></div>' +
                '</div>';

            return albumHtml;
        }

        function loadAlbums() {
            var $container = $('#albums-container');
            
            $.ajax({
                url: '{!! $urlApi !!}/album?filter[status]=1&page[size]=10', 
                method: 'GET',
                success: function(response) {
                    var items = response.data || response;
                    var html = renderAlbums(items);

                    $container.html(html);

                    if (window.swiperAlbums) {
                        window.swiperAlbums.destroy(true, true);
                    }

                    window.swiperAlbums = new Swiper("#swiper-albums", {
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        loop: items.length > 2, 
                        slidesPerView: 1,     
                        spaceBetween: 15,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        breakpoints: {
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            1024: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            }
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error loading albums:', error);
                    $container.html('<div class="callout callout-danger"><p class="text-bold">Gagal memuat album. Silakan coba lagi nanti.</p></div>');
                }
            });
        }
        loadAlbums();
        function formatDate(dateString) {
            if (!dateString) return '';
            
            var options = { year: 'numeric', month: 'long', day: 'numeric' };
            var date = new Date(dateString);
            return date.toLocaleDateString('id-ID', options);
        }
    });
</script>