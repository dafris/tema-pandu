@extends('layouts.app')

@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M16,15H9V13H16M19,11H9V9H19M19,7H9V5H19M21,1H7C5.89,1 5,1.89 5,3V17C5,18.11 5.9,19 7,19H21C22.11,19 23,18.11 23,17V3C23,1.89 22.1,1 21,1M3,5V21H19V23H3A2,2 0 0,1 1,21V5H3Z" /></svg>
				<h1>Dokumen</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DOKUMEN FORMULIR</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DOKUMEN FORMULIR</h1></div>
					<div class="mt40 doc-style">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-doc" id="dokumen-table">
								<thead>
									<tr>
										<th>Nama Dokumen</th>
										<th>Jenis Dokumen</th>
										<th class="to-center">Status</th>
										<th class="to-center">Aksi</th>
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
            var table = $('#dokumen-table').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '{!! $urlApi !!}/form-dokumen',
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
                            'filter[aktif]' : 1,
                            'filter[is_published]' : 1                            
                        };
                    }
                },
                columns: [
                    
                    {
                        data: 'attributes.nama_dokumen',
                        name: 'nama_dokumen',
						class: 'td-utama1'
                    },
                    {
                        data: 'attributes.jenis_dokumen.nama',
                        name: 'jenis_dokumen',
						class: 'td-utama2',
                        defaultContent: '-'
                    },
                    {
                        data: 'attributes.is_published',
                        name: 'is_published',
                        render: function(data, type, row) {
                            if (data == 1) {
                                return '<div class="difle-c"><div class="label-custom label-success difle-c" >Publis</div></div>';
                            } else {
                                return '<div class="difle-c"><div class="label-custom label-primary difle-c">Draft</div></div>';
                            }
                        }
                    },
					{
                        data: null,
                        name: 'aksi',
                        class: 'to-center',
                        searchable: false,
                        orderable: false,
                        render: function(data, type, row) {
                            var viewBtn = '<a href="' + (row.attributes.file_dokumen_path || '#') + '" title="Lihat" target="_blank">' +
                                '<button type="button" class="btn custombtn btn-primary btn-small btradius-small difle-c" style="margin:0 auto;"><i class="fa fa-eye"></i><span class="desktop-only" style="margin:0 0 0 3px;">Lihat</span></button>' +
                                '</a>';                            
                            return viewBtn;
                        }
                    }
                ],
                order: [
                    [1, 'desc']
                ],              
            });
        });
    </script>    
@endpush
