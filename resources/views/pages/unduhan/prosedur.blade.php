@extends('layouts.app')

@section('content')
	@php
    // Mengambil langsung semua data dari model Prosedur tanpa melalui Controller
    $prosedurs = \App\Models\Prosedur::all();
@endphp
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M9,2V8H11V11H5C3.89,11 3,11.89 3,13V16H1V22H7V16H5V13H11V16H9V22H15V16H13V13H19V16H17V22H23V16H21V13C21,11.89 20.11,11 19,11H13V8H15V2H9Z" /></svg>
				<h1>Prosedur</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DATA PROSEDUR</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DATA PROSEDUR</h1></div>
					<div class="mt40">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover table-doc">
								<thead class="table-dark">
									<tr>
										<th width="5%" class="text-center">No</th>
										<th>Judul Prosedur</th>
										<th class="to-center" style="width:20%;">Tipe File</th>
										<th class="to-center" style="width:20%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@forelse($prosedurs as $index => $prosedur)
										<tr>
											<td class="text-center">{{ $index + 1 }}</td>
											<td>{{ $prosedur->judul_prosedur }}</td>
											<td class="to-center">
												<div class="difle-c"><div class="label-custom label-primary difle-c">
													{{ strtoupper(explode('/', $prosedur->mime_type)[1] ?? 'FILE') }}
												</div></div>
											</td>
											<td class="to-center">
												<!-- Mengarah ke asset file yang disimpan -->
												<div class="difle-c">
													<a href="{{ asset('storage/' . $prosedur->file_prosedur) }}" class="btn custombtn btn-success btn-small btradius-small difle-c" target="_blank"><i class="fa fa-download"></i><span class="desktop-only" style="margin:0 0 0 3px;">Unduh</span></a>
												  </div>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="4" class="text-center text-muted">Belum ada data prosedur.</td>
										</tr>
									@endforelse
								</tbody>
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
            var table = $('#prosedur-table').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '{!! $urlApi !!}/prosedur',
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
                columns: [
                    {
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
                    url: '{{ asset("plugins/datatables/id.json") }}'
                }
            });
        });

        // Function to show prosedur detail in modal
        function showRegulasiDetail(id) {
            $.ajax({
                url: '{!! $urlApi !!}/prosedur?filter[id]=' + id,
                method: 'GET',
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        var prosedur = response.data[0].attributes;                        
                        let objFile = prosedur.mime_type != 'pdf' ? `<img id="fileUnduhan" src="${prosedur.file_prosedur_path}" width="100%">`: `<object data="${prosedur.file_prosedur_path}" type="application/pdf" width="100%" height="500" class="" id="showpdf"> </object>`;
                        // Create modal content
                        var modalHtml = '<div class="modal fade" id="prosedurDetailModal" tabindex="-1" role="dialog">' +
                            '<div class="modal-dialog modal-lg" role="document">' +
                                '<div class="modal-content">' +
                                    '<div class="modal-header">' +
                                        '<button type="button" class="close" data-dismiss="modal">&times;</button>' +
                                        '<h4 class="modal-title">' + (prosedur.judul || '') + '</h4>' +
                                    '</div>' +
                                    '<div class="modal-body">' +
                                        '<div class="row">' +
                                            '<div class="col-md-12">' +
                                                objFile
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="modal-footer">' +
                                        '<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>' +
                                        '<a href="' + (prosedur.path_download || '#') + '" class="btn btn-primary" target="_blank">Unduh File</a>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>';
                        
                        // Remove any existing modal
                        $('#prosedurDetailModal').remove();
                        
                        // Add modal to body and show it
                        $('body').append(modalHtml);
                        $('#prosedurDetailModal').modal('show');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Gagal memuat detail prosedur. Silakan coba lagi.');
                }
            });
        }
    </script>    
    @include('forms.datatable-vertical')
@endpush
