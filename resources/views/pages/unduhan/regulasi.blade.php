@extends('layouts.app')

@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M2.3,20.28L11.9,10.68L10.5,9.26L9.78,9.97C9.39,10.36 8.76,10.36 8.37,9.97L7.66,9.26C7.27,8.87 7.27,8.24 7.66,7.85L13.32,2.19C13.71,1.8 14.34,1.8 14.73,2.19L15.44,2.9C15.83,3.29 15.83,3.92 15.44,4.31L14.73,5L16.15,6.43C16.54,6.04 17.17,6.04 17.56,6.43C17.95,6.82 17.95,7.46 17.56,7.85L18.97,9.26L19.68,8.55C20.07,8.16 20.71,8.16 21.1,8.55L21.8,9.26C22.19,9.65 22.19,10.29 21.8,10.68L16.15,16.33C15.76,16.72 15.12,16.72 14.73,16.33L14.03,15.63C13.63,15.24 13.63,14.6 14.03,14.21L14.73,13.5L13.32,12.09L3.71,21.7C3.32,22.09 2.69,22.09 2.3,21.7C1.91,21.31 1.91,20.67 2.3,20.28M20,19A2,2 0 0,1 22,21V22H12V21A2,2 0 0,1 14,19H20Z" /></svg>
				<h1>Regulasi</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DATA REGULASI</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DATA REGULASI</h1></div>
					<div class="mt40 doc-style">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-doc" id="regulasi-table">
								<thead>
									<tr>
										<th>Judul Regulasi</th>
										<th>Aksi</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@include('partials.asset_datatables')
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#regulasi-table').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '{!! $urlApi !!}/regulasi',
                    cache: false,
                    dataSrc: 'data',
                    data: function(d) {
                        // Convert DataTables parameters to API format (use safe defaults to avoid NaN)
                        var start = (typeof d.start !== 'undefined' && d.start !== null) ? d.start : 0;
                        var length = (typeof d.length !== 'undefined' && d.length) ? d.length : (typeof d.pageLength !== 'undefined' ? d.pageLength : 10);
                        var pageNumber = 1;
                        if (length && !isNaN(length)) {
                            pageNumber = Math.floor(start / length) + 1;
                        }

                        return {
                            'page[number]': pageNumber,
                            'page[size]': length,
                        };
                    }
                },
                columns: [{
                        data: 'attributes.judul',
                        name: 'judul',
                        render: function(data, type, row) {
                            return '<a href="#" onclick="showRegulasiDetail(\'' + row.id + '\')">' + (data || '') + '</a>';
                        }
                    },
                    {
                        data: null,
                        name: 'aksi',
                        class: 'text-center',
                        searchable: false,
                        orderable: false,
                        render: function(data, type, row) {
                            var viewBtn = '<a href="#" onclick="showRegulasiDetail(\'' + row.id + '\')" title="Lihat">' +
                                '<button type="button" class="btn btn-warning btn-sm" style="width: 40px;"><i class="fa fa-eye fa-fw"></i></button>' +
                                '</a>';

                            var downloadBtn = '<a href="' + (row.attributes.path_download || '#') + '" title="Unduh" target="_blank">' +
                                '<button type="button" class="btn btn-info btn-sm" style="width: 40px;"><i class="fa fa-download"></i></button>' +
                                '</a>';

                            return viewBtn + ' ' + downloadBtn;
                        }
                    }
                ],
                order: [
                    [0, 'asc']
                ],
                language: {
                    url: '{{ asset('plugins/datatables/id.json') }}'
                }
            });
        });

        // Function to show regulasi detail in modal
        function showRegulasiDetail(id) {
            $.ajax({
                url: '{!! $urlApi !!}/regulasi?filter[id]=' + id,
                method: 'GET',
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        var regulasi = response.data[0].attributes;
                        let isPdf = (regulasi.mime_type === 'application/pdf' || (regulasi.file_regulasi_path && regulasi.file_regulasi_path.toLowerCase().endsWith('.pdf')));
                        let objFile = !isPdf ? `<img id="fileUnduhan" src="${regulasi.file_regulasi_path}" width="100%">` : `<iframe src="${regulasi.file_regulasi_path}" width="100%" height="500" class="" id="showpdf" frameborder="0"></iframe>`;
                        // Create modal content
                        var modalHtml = '<div class="modal fade" id="regulasiDetailModal" tabindex="-1" role="dialog">' +
                            '<div class="modal-dialog modal-lg" role="document">' +
                            '<div class="modal-content">' +
                            '<div class="modal-header">' +
                            '<button type="button" class="close" data-dismiss="modal">&times;</button>' +
                            '<h4 class="modal-title">' + (regulasi.judul || '') + '</h4>' +
                            '</div>' +
                            '<div class="modal-body">' +
                            '<div class="row">' +
                            '<div class="col-md-12 text-center">' +
                            objFile + '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="modal-footer">' +
                            '<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>' +
                            '<a href="' + (regulasi.path_download || '#') + '" class="btn btn-primary" target="_blank">Unduh File</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                        // Remove any existing modal
                        $('#regulasiDetailModal').remove();

                        // Add modal to body and show it
                        $('body').append(modalHtml);
                        $('#regulasiDetailModal').modal('show');
                    }
                },
                error: function(xhr, status, error) {
                    openAlert('Gagal memuat detail regulasi. Silakan coba lagi.', 'Error', 'danger');
                }
            });
        }
    </script>
@endpush