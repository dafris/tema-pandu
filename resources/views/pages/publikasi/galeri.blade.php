@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
@endpush
@extends('layouts.app')
@section('title', 'Galeri')
@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M4,4H7L9,2H15L17,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4A2,2 0 0,1 2,18V6A2,2 0 0,1 4,4M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9Z" /></svg>
				<h1>Galeri</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">GALERI</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 id="judul-album-header" class="gradient-text2"></h1></div>
					<div class="mt40 plr-5">
						<div id="galeri-container">
							<div class="autocol mlr-min10">

							</div>
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
        function renderGaleri(items) {
            if (!items || items.length === 0) {
                return '<div class="data-empty difle-c" style="margin:0 auto;"><svg viewBox="0 0 24 24"><path d="M1.2,4.47L2.5,3.2L20,20.72L18.73,22L16.73,20H4A2,2 0 0,1 2,18V6C2,5.78 2.04,5.57 2.1,5.37L1.2,4.47M7,4L9,2H15L17,4H20A2,2 0 0,1 22,6V18C22,18.6 21.74,19.13 21.32,19.5L16.33,14.5C16.76,13.77 17,12.91 17,12A5,5 0 0,0 12,7C11.09,7 10.23,7.24 9.5,7.67L5.82,4H7M7,12A5,5 0 0,0 12,17C12.5,17 13.03,16.92 13.5,16.77L11.72,15C10.29,14.85 9.15,13.71 9,12.28L7.23,10.5C7.08,10.97 7,11.5 7,12M12,9A3,3 0 0,1 15,12C15,12.35 14.94,12.69 14.83,13L11,9.17C11.31,9.06 11.65,9 12,9Z" /></svg>Untuk saat ini belum ada data yang tersedia</div>';
            }

            return items.map(function(item) {
                var galeri = item.attributes;
                var galeriImage = galeri.gambar_path || '{{ asset("/img/no-image.png") }}';
                
                if (galeri.jenis === 'file') {
                    return '<div class="column-2b boxshadow brd-radius10">' +
                        '<div class="relhid p10 gal-open">' +
                            // Fancybox wrap
                            '<a href="' + galeriImage + '" data-fancybox="gallery" data-caption="' + (galeri.judul || '') + '">' +
                                '<div class="image-gal-item brd-radius10 imagefull">' +
                                    '<img src="' + galeriImage + '" alt="' + (galeri.slug || '') + '">' +
									'<div class="title-absolute to-center">' +
									'<h2>' + (galeri.judul || '') + '</h2>' +
									'<p>' + formatDate(galeri.created_at) + '</p>' +
									'</div>' +
									'<div class="imagezoom difle-c">' +
									'<svg viewBox="0 0 24 24"><path d="M9.5,13.09L10.91,14.5L6.41,19H10V21H3V14H5V17.59L9.5,13.09M10.91,9.5L9.5,10.91L5,6.41V10H3V3H10V5H6.41L10.91,9.5M14.5,13.09L19,17.59V14H21V21H14V19H17.59L13.09,14.5L14.5,13.09M13.09,9.5L17.59,5H14V3H21V10H19V6.41L14.5,10.91L13.09,9.5Z" /></svg>' +
									'</div>' +
                                '</div>' +
                            '</a>' +
                        '</div>' +
                    '</div>';
                } else {
                    return '<div class="post" style="margin-bottom: 5px; padding-top: 5px; padding-bottom: 5px;">' +
                        '<div class="row">' +
                            '<div class="col-sm-4">' +
                                // Tambahkan Fancybox juga di sini jika ingin gambar jenis 'link' bisa diklik popup
                                '<a href="' + galeriImage + '" data-fancybox="gallery" data-caption="' + (galeri.judul || '') + '">' +
                                    '<img class="img-responsive" src="' + galeriImage + '" alt="' + (galeri.slug || '') + '">' +
                                '</a>' +
                            '</div>' +
                            '<div class="col-sm-8">' +
                                '<h5 style="margin-top: 5px; text-align: justify;"><b><a href="' + (galeri.link || '') + '">' + (galeri.judul || '') + '</a></b></h5>' +
                                '<p style="font-size:11px;"><i class="fa fa-calendar"></i>&ensp;' + formatDate(galeri.created_at) + '&ensp;|&ensp;<i class="fa fa-user"></i>&ensp;Administrator</p>' +
                                '<a href="' + (galeri.link || '') + '" class="btn btn-sm btn-primary" target="_blank">Selengkapnya</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                }
            }).join('');
        }

        function loadGaleri(page = 1) {
            var $container = $('#galeri-container .autocol.mlr-min10');
            $container.html(`@include('components.placeholder')`);
            
            $.ajax({
                url: '{!! $urlApi !!}/galeri?filter[status]=1&filter[album.slug]={!! $slug !!}&page[number]=' + page,
                method: 'GET',
                success: function(response) {
                    var slug = "{!! $slug !!}";
                    var judulAlbum = slug.split('-').map(function(word) {
                        return word.charAt(0).toUpperCase() + word.slice(1);
                    }).join(' ');

                    $('#judul-album-header').text(judulAlbum);

                    var items = response.data || response;
                    var html = renderGaleri(items);
                    
                    $container.html(html);

                    // --- INISIALISASI FANCYBOX ---
                    // Ini wajib dipanggil setiap kali konten di-render ulang oleh AJAX
                    if (typeof Fancybox !== 'undefined') {
                        Fancybox.bind("[data-fancybox='gallery']", {});
                    } else if ($.fn.fancybox) {
                        // Jika menggunakan versi Fancybox v3 (bukan @fancyapps/ui)
                        $("[data-fancybox='gallery']").fancybox();
                    }
                    // ----------------------------

                    initPagination(response, function() {
                        $('.pagination').on('click', '.btn-page', function() {
                            var page = $(this).data('page');
                            loadGaleri(page);
                        });
                        $('.pagination').find('.btn-page').attr('href','#galeri-container')
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error loading galeri:', error);
                    $container.html('<div class="difle-c to-center mt15"><p><b>Gagal memuat galeri. Silakan coba lagi nanti.</b></p></div>');
                }
            });
        }
        
        loadGaleri();            
    });
</script>
@endpush


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
@endpush