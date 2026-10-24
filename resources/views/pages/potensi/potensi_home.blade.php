
<div class="head-moduletop difle-c">
	<h1>POTENSI</h1>
</div>
<div class="module-scroll potensi-home">
	<div class="module-scroll-inner">
	<div class="scrollbar" id="style-3">
		<div class="rel-hid module-scroll-pd">
			<table class="tablepotensi" id="potensi-home" style="width:100%;margin:0;padding:0;">

			</table>
			<div class="difle-c"><a href="{{ url('potensi/potensi') }}">Lihat Semua</a></div>
		</div>
	</div>
	</div>
</div>
	

@include('partials.asset_datatables')
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
    var table = $('#potensi-home').DataTable({
        processing: true,
        serverSide: false,
        
        // PENTING: Sembunyikan fitur tabel untuk tampilan di Home
        paging: false,       // Matikan pagination halaman berikutnya/sebelumnya
        searching: false,    // Matikan kolom pencarian
        info: false,         // Matikan tulisan "Showing 1 to 5 of 5 entries"
        lengthChange: false, // Matikan dropdown jumlah data per halaman
        
        ajax: {
            url: '{!! $urlApi !!}/potensi',
            dataSrc: 'data',
            data: function(d) {
                // Di Home kita paksa meminta ke API halaman 1 dan ukurannya maksimal 5 data saja
                return {
                    'page[number]': 1,
                    'page[size]': 5
                };
            }
        },
        columns: [
            {
                data: null,
                name: 'card_potensi',
                searchable: true,
                orderable: true,
                render: function(data, type, row) {
                    var imagePath = row.attributes.file_gambar_path || '{{ asset("/img/no-image.png") }}';
                    var nama = row.attributes.nama_potensi || '';
                    var deskripsi = row.attributes.deskripsi || '';
                    var lokasi = row.attributes.lokasi || '';
                    
                    if (deskripsi.length > 50) {
                        deskripsi = deskripsi.substring(0, 50) + '...';
                    }

                    var html = '<div class="rel-hid potensi-row"><div class="autocol mlr-min5">';
                    
                    html += '   <div class="potensi-image"><div class="imagepotensi imagefull" onclick="showPotensiDetail(\'' + row.id + '\')">';
                    html += '       <img src="' + imagePath + '" alt="' + nama + '">';
                    html += '   </div></div>';
                    html += '   <div class="potensi-content">';
                    html += '       <h2>' + nama + '</h2>';
					html += '       <p class="desktop-only mt5">' + deskripsi + '</p>';
                    html += '       <div class="potensi-location mt5 difle-l"><svg viewBox="0 0 24 24"><path d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z" /></svg>Lokasi: ' + lokasi + '</div>';
                    html += '   </div>';
                    
                    html += '</div></div>';

                    return html;
                }
            }
        ],
        order: [
            [0, 'asc'] 
        ],
        language: {
            url: '{{ asset("plugins/datatables/id.json") }}'
        }
    });
});

function showPotensiDetail(id) {
    $.ajax({
        url: '{!! $urlApi !!}/potensi?filter[id]=' + id,
        method: 'GET',
        success: function(response) {
            if (response.data && response.data.length > 0) {
                var potensi = response.data[0].attributes;
                
                var modalHtml = '<div class="custom-modal">' +
                '<div class="modal centercustom fade" id="potensiDetailModal" tabindex="-1" role="dialog" style="position: fixed;margin: auto;width: 100%;top:0;bottom:0;left:0;z-index:9999999 !important;">' +
                    '<div class="modal-dialog" role="document">' +
                            '<div class="topmodal difle-l">' +
                                '<h1>Detail Potensi</h1>' +
                                '<div class="closemodal difle-c" data-dismiss="modal"><svg viewBox="0 0 24 24"><path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" /></svg></div>' +
                            '</div>' +
                            '<div class="inner-modal">' +
                            '<div class="inner-modal-box">' +
                            '<div class="scrollbar" id="style-3">' +
                                '<div class="rel-hid mt15 mb25 plr-15">' +
                                    '<h1 class="title-potensi to-center">' + (potensi.nama_potensi || '') + '</h1>' +
                                      '<img src="' + (potensi.file_gambar_path || "{{ asset('/img/no-image.png') }}") + '" style="display:block;width: 100%; height: auto;border-radius:10px;margin:0 0 15px;">' +
                                    
                                        '<p>' + (potensi.deskripsi || '') + '</p>' +
                                        '<div class="difle-l mt15">' +
                                        '<p>Lokasi :</p>' +
                                        '<p>' + (potensi.lokasi || '') + '</p>' +
                                    '</div>' +
                                '</div>' +
                                '</div>' +
                            '</div>' +
                    '</div>' +
                '</div>';
                
                $('#potensiDetailModal').remove();
                $('body').append(modalHtml);
                $('#potensiDetailModal').modal('show');
            }
        },
        error: function(xhr, status, error) {
            alert('Gagal memuat detail potensi. Silakan coba lagi.');
        }
    });
}
    </script>
	@include('forms.datatable-vertical')
@endpush
