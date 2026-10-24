@extends('layouts.app')
@section('title', 'Galeri')
@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" /></svg>
				<h1>Publikasi</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">ALBUM GALERI</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">ALBUM GALERI</h1></div>
					<div class="mt40 gallerypage">
						<div id="albums-container">
							<div class="autocol mlr-min10"></div>
							@include('components.pagination')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@push('scripts')
<script>
    $(function(){
        function renderAlbums(items) {
            if (!items || items.length === 0) {
                return '<div class="callout callout-info"><p class="text-bold">Tidak ada Album yang ditampilkan!</p></div>';
            }

            // Process album data from API response
            return items.map(function(item) {
                var album = item.attributes;
                var albumImage = album.gambar_path || '{{ asset("img/no-image.png") }}';
                return '<div class="column-2b boxshadow brd-radius10">' +
                    '<div class="relhid p10">' +
					'<div class="autocol mlr-min5">' +
                        '<div class="galpage-image">' +
						'<div class="image-gal brd-radius10 imagefull">' +
                            '<img src="' + albumImage + '" alt="' + (album.slug || '') + '">' +
                        '</div>' +
						'</div>' +
                        '<div class="galpage-data displaygrid">' +
							'<div class="aligntop mt10">' +
                            '<h2><a href="{{ url("/publikasi/galeri") }}/' + (album.slug || '') + '">' + (album.judul || '') + '</a></h2>' +
							'<div class="info-item difle-l mt10">' +
								'<div class="info-item-icon" style="opacity:0.5;">' +
									'<svg viewBox="0 0 24 24"><path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 19H5V9H19V19M5 7V5H19V7H5M10.56 17.46L16.5 11.53L15.43 10.47L10.56 15.34L8.45 13.23L7.39 14.29L10.56 17.46Z" /></svg>' +
								'</div>' +
								'<p>' + formatDate(album.created_at) + '</p>' +
							'</div>' +
							
                            
							'</div>' +
							'<div class="alignbottom mt5 mb10 difle-l">' +
                            '<a href="{{ url("/publikasi/galeri") }}/' + (album.slug || '') + '" class="open-gal">Buka Album</a>' +
							'</div>' +
                        '</div>' +
                    '</div>' +
					'</div>' +
                '</div>';
            }).join('');
        }

        // Function to load albums from API
        function loadAlbums(page = 1) {
            var $container = $('#albums-container .autocol.mlr-min10');
            $container.html(`@include('components.placeholder')`);
            
            // Make API call to get albums
            $.ajax({
                url: '{!! $urlApi !!}/album?filter[status]=1&page[number]=' + page,
                method: 'GET',
                success: function(response) {
                    var items = response.data || response;
                    
                    var html = renderAlbums(items);
                    var $container = $('#albums-container .autocol.mlr-min10');

                    $container.html(html);
                    initPagination(response, function() {
                        $('.pagination').on('click', '.btn-page', function() {
                            var params = {};
                            var page = $(this).data('page');
                            loadAlbums(page);
                        });
                        $('.pagination').find('.btn-page').attr('href','#albums-container')
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error loading albums:', error);
                    var $container = $('#albums-container .autocol.mlr-min10');
                    $container.html('<div class="callout callout-danger"><p class="text-bold">Gagal memuat album. Silakan coba lagi nanti.</p></div>');
                }
            });
        }
        
        // Load albums on page load
        loadAlbums();
        
        // Helper function to format date
        function formatDate(dateString) {
            if (!dateString) return '';
            
            var options = { year: 'numeric', month: 'long', day: 'numeric' };
            var date = new Date(dateString);
            return date.toLocaleDateString('id-ID', options);
        }
    });
</script>
@endpush