@extends('layouts.app')

@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M20 2V4L4 8V6H2V18H4V16L6 16.5V18.5C6 20.4 7.6 22 9.5 22S13 20.4 13 18.5V18.3L20 20V22H22V2H20M11 18.5C11 19.3 10.3 20 9.5 20S8 19.3 8 18.5V17L11 17.8V18.5Z" /></svg>
				<h1>SIKEMA</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">DATA KELUHAN</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">DATA KELUHAN</h1></div>
					<div class="mt40">
						<div class="title-sikema difle-c to-center">{{ $page_description }}</div>
						<div class="sikema-area">
							<div class="autocol mlr-min10">
								<div class="sikema-detail boxshadow brd-radius10 displaygrid">
									<div class="aligntop rel-hid p15">
										<div class="relhid sambutan">
											<div class="quote-left"><svg viewBox="0 0 300.000000 254.000000"><g transform="translate(0.000000,254.000000) scale(0.100000,-0.100000)"><path d="m1200 2499c-425-176-700-372-902-639-85-113-181-295-222-420-102-311-98-685 11-944 40-97 126-217 214-300 275-259 682-263 937-8 141 140 197 272 197 457 0 137-26 226-97 332-130 193-325 285-539 255-79-11-143-36-238-91-70-41-97 10-88 172 22 423 342 841 780 1018l57 23v93c0 51-3 93-7 92-5 0-51-18-103-40zm1575 5c-226-88-488-236-656-372-196-158-366-389-454-617-135-348-137-761-5-1042 191-409 614-582 980-401 109 53 226 167 283 275 131 250 92 529-103 723-86 86-164 132-266 156-126 30-285 3-396-66-73-44-93-44-114 5-18 44-18 150 1 256 67 386 361 739 748 900l77 32v93c0 52-1 94-2 94-2-1-43-16-93-36z"/></g></svg></div>
											<div class="quote-right"><svg viewBox="0 0 300.000000 254.000000"><g transform="translate(0.000000,254.000000) scale(0.100000,-0.100000)"><path d="M510 2524 c-229 -49 -430 -246 -490 -480 -54 -209 5 -419 160 -574 86 -86 164 -132 266 -156 126 -30 285 -3 396 66 73 44 93 44 114 -5 18 -44 18 -150 -1 -256 -67 -386 -361 -739 -747 -900 l-78 -32 0 -93 0 -94 68 26 c201 75 420 191 594 314 111 78 274 236 351 340 218 295 323 662 289 1013 -28 293 -115 485 -296 654 -170 159 -404 225 -626 177z M2070 2524 c-214 -46 -414 -232 -483 -449 -32 -102 -31 -261 3 -364 67 -207 253 -372 452 -403 136 -20 250 6 397 91 70 41 97 -10 88 -172 -22 -423 -342 -841 -779 -1018 l-58 -23 0 -93 c0 -51 1 -93 3 -93 12 0 203 82 302 129 308 147 537 326 707 551 85 113 181 295 222 420 102 311 98 685 -11 944 -40 97 -126 217 -214 300 -173 163 -403 229 -629 180z"/></g></svg></div>
											<p style="font-weight:bold;margin-bottom:10px;">Yth: {{ config('profil.sebutan_kepala_wilayah') . ' ' . config('profil.nama_kecamatan') }}</p>
											<p>{{ $komplain->laporan }}</p>
										</div>
										<div class="mt15">
											<p style="font-weight:bold;display:block;color:var(--color1);">LAMPIRAN</p>
											@if ($komplain->lampiran1 == '' && $komplain->lampiran2 == '' && $komplain->lampiran3 == '' && $komplain->lampiran4 == '')
												<div class="difle-l mt5"><p>Tidak ada lampiran yang tersedia</p></div>
											@else
											<div class="autocol mlr-min5">
												<div class="col-lampiran brd-radius5">
													@if (!$komplain->lampiran1 == '')
														<a data-fancybox="gallery" href="{{ asset($komplain->lampiran1) }}">
															<div class="image-lampiran imagefull brd-radius5"><img src="{{ asset($komplain->lampiran1) }}" alt="{{ $komplain->komplain_id }}-Lampiran1"></div>
														</a>	
													@endif	
												</div>
												<div class="col-lampiran brd-radius5">
													@if (!$komplain->lampiran2 == '')
														<a data-fancybox="gallery" href="{{ asset($komplain->lampiran2) }}">
															<div class="image-lampiran imagefull brd-radius5"><img src="{{ asset($komplain->lampiran2) }}" alt="{{ $komplain->komplain_id }}-Lampiran2"></div>
														</a>	
													@endif	
												</div>
												<div class="col-lampiran brd-radius5">
													@if (!$komplain->lampiran3 == '')
														<a data-fancybox="gallery" href="{{ asset($komplain->lampiran3) }}">
															<div class="image-lampiran imagefull brd-radius5"><img src="{{ asset($komplain->lampiran3) }}" alt="{{ $komplain->komplain_id }}-lampiran3"></div>
														</a>	
													@endif	
												</div>
												<div class="col-lampiran brd-radius5">
													@if (!$komplain->lampiran4 == '')
														<a data-fancybox="gallery" href="{{ asset($komplain->lampiran4) }}">
															<div class="image-lampiran imagefull brd-radius5"><img src="{{ asset($komplain->lampiran4) }}" alt="{{ $komplain->komplain_id }}-lampiran4"></div>
														</a>	
													@endif	
												</div>
											</div>
											@endif
										</div>
										<div class="mt15">
											<p style="font-weight:bold;display:block;color:var(--color1);">TINDAK LANJUT</p>
											{!! Html::hidden('komplain_id', $komplain->komplain_id)->id('komplain_id') !!}
											<div id="jawabans"></div>
										</div>
									</div>	
									<div class="alignbottom">
										<div class="difle-c">
											@php $user = auth()->user(); @endphp
											@if (isset($user) && $user->can('access.admin_komplain'))
												@if ($komplain->status != 'SELESAI')
												<div class="rel-hid p15">	
													<a id="btn-reply-admin" data-href="{{ route('sistem-komplain.reply', $komplain->komplain_id) }}" class="btn btn-primary"><i class="fa fa-reply"></i> Jawab</a>
												</div>
												@endif
											@else
												@if ($komplain->status != 'SELESAI')
												<div class="rel-hid p15">		
													<a id="btn-reply" data-href="{{ route('sistem-komplain.reply', $komplain->komplain_id) }}" class="btn btn-primary"><i class="fa fa-reply"></i> Beri Komentar</a>
												</div>	
												@endif
											@endif
										</div>
									</div>
								</div>
								<div class="sikema-user boxshadow brd-radius10 displaygrid">
									<div class="aligntop p15">
										<p class="to-center" style="font-weight:bold;display:block;color:var(--color1);margin:0 auto 15px;padding:0 0 5px;border-bottom:var(--brdgrey) 1px solid;">DATA PELAPOR</p>
										<div class="autocol">
											<div class="pelapor-image">
												{{-- di ambil dari detail_penduduk - api database gabungan --}}
												@if (!empty($komplain->detail_penduduk))
													<div class="image-usersikema imagefull"><img src="{{ is_user(json_decode($komplain->detail_penduduk)->foto, json_decode($komplain->detail_penduduk)->sex) }}" alt="user image"></div>
												@else
													{{-- diambil dari relasi penduduk --}}
													<div class="image-usersikema imagefull"><img src="{{ is_user($komplain?->penduduk?->foto, $komplain?->penduduk?->sex) }}" alt="user image"></div>
												@endif
											</div>
											<div class="pelapor-data">
												<table class="table-pelapor">
													<tr>
														<td>Tracking ID</td><td style="width:15px;text-align:center;">:</td><td><a href="{{ route('sistem-komplain.komplain', $komplain->slug) }}">#{{ $komplain->komplain_id }}</a></td>
													</tr>
													<tr>
														<td>Pelapor</td><td style="width:15px;text-align:center;">:</td><td><a href="{{ route('sistem-komplain.komplain', $komplain->slug) }}">{{ auth()->guest() && $komplain->anonim ? 'ANONIM' : $komplain->nama }}</a></td>
													</tr>
													<tr>
														<td>Kategori</td><td style="width:15px;text-align:center;">:</td><td>{{ $komplain->kategori_komplain->nama }}</td>
													</tr>
													<tr>
														<td>Tanggal</td><td style="width:15px;text-align:center;">:</td><td>{{ format_datetime($komplain->created_at) }}</td>
													</tr>
													<tr>
														<td>Status</td><td style="width:15px;text-align:center;">:</td><td>{{ ucfirst(strtolower($komplain->status)) }}</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="alignbottom p15">
										<div class="difle-c">
											<a href="{{ route('sistem-komplain.index') }}" class="pull-right">
												<button type="button" class="btn btn-success"><i class="fa fa-refresh"></i> Kembali</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!-- Modal HTML -->
    <div id="modalReply" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Jawab Keluhan</h4>
                </div>
                {!! Html::form('POST')->id('form-reply')->open() !!}
                <div class="modal-body mx-3">
                    <div id="form-errors"></div>
                    <div class="md-form mb-4">
                        <label>Jawaban</label>
                        @csrf
                        {!! Html::textarea('jawaban')->class('form-control')->id('jawab')->required() !!}
                    </div>

                    <h2 style="font-size:100%;font-weight:bold;margin:20px 0 10px;">Verifikasi Data Penjawab</h2>

                    <div class="md-form mb-4{{ $errors->has('nik') ? ' has-error' : '' }}">
                        <label class="control-label">NIK <span class="required">*</span></label>

                        {!! Html::text('nik')->placeholder('NIK')->class('form-control')->required()->id('nik') !!}
                        @if ($errors->has('nik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nik') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="md-form mt10{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                        <label class="control-label">Tanggal Lahir <span class="required">*</span></label>

                        {!! Html::text('tanggal_lahir')->placeholder('1990-01-01')->class(
                                'form-control
                                                                    datepicker',
                            )->required()->id('tanggal_lahir') !!}
                        @if ($errors->has('tanggal_lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                            </span>
                        @endif

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                {!! Html::form()->close() !!}
            </div>
        </div>
    </div>

    <div id="modalReplyAdmin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalAdminLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Jawab Keluhan</h4>
                </div>
                {!! Html::form('POST')->id('form-reply-admin')->open() !!}
                <div class="modal-body mx-3">
                    <div id="form-errors-admin"></div>
                    <div class="md-form mb-4">
                        <label>Jawaban</label>
                        {!! Html::textarea('jawaban')->class('form-control')->id('jawab-admin')->required() !!}
                        {!! Html::hidden('nik', '999') !!}
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                {!! Html::form()->close() !!}
            </div>
        </div>
    </div>

    <div id="modalUbahReplyAdmin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalAdminLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Ubah Jawaban Keluhan</h4>
                </div>
                {!! Html::form('POST')->id('form-ubah-reply-admin')->open() !!}
                <div class="modal-body mx-3">
                    <div id="form-errors-admin"></div>
                    <div class="md-form mb-4">
                        <label>Jawaban</label>
                        {!! Html::textarea('jawaban')->class('form-control')->id('ubah-jawab-admin')->required() !!}
                        {!! Html::hidden('nik', '999') !!}
                        {!! Html::hidden('id')->id('id_jawab') !!}
                        @method('PUT')
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                {!! Html::form()->close() !!}
            </div>
        </div>
    </div>

@endsection

@include('partials.asset_fancybox')
@push('scripts')
    <script type="application/javascript">
    $(function () {

        var id_komplain = $('#komplain_id').val();
        refresh_jawaban(id_komplain);

        var url = '';
        $(document).on('click', '#btn-reply', function(e) {
            url = $(this).attr('data-href');
            $('#form-reply').attr('action', url );
            $('#modalReply').modal({
                backdrop: 'static',
                keyboard: false
            });
            e.preventDefault();
        });

        $(document).on('click', '#btn-reply-admin', function(e) {
            url = $(this).attr('data-href');
            $('#form-reply-admin').attr('action', url );
            $('#modalReplyAdmin').modal({
                backdrop: 'static',
                keyboard: false
            });
            e.preventDefault();
        });

        $('#modalReplyAdmin').on('hidden.bs.modal', function () {
            $('#jawab-admin').val('');
            $('#form-errors-admin').html('');
        })

        $('#modalReply').on('hidden.bs.modal', function () {
            $('#jawab').val('');
            $('#nik').val('');
            $('#tanggal_lahir').val('');
            $('#form-errors').html('');
        });

        $('#form-reply-admin').on('submit', function(e) {
            e.preventDefault();
            var jawab = $('#jawab').val();
            var komplain_id = $('#komplain_id').val();

            $.ajax({
                type: "POST",
                url: url,
                data: $("#form-reply-admin").serialize(),
                success: function( msg ) {
                    if(msg.status == 'success'){
                        refresh_jawaban(id_komplain);
                        $('#jawab-admin').val('');
                        $('#modalReplyAdmin').modal('hide');
                    }
                },
                error :function( jqXhr ) {
                    if( jqXhr.status === 401 ) //redirect if not authenticated user.
                        $( location ).prop( 'pathname', 'auth/login' );
                    if( jqXhr.status === 422 ) {
                        //process validation errors here.
                        $errors = jqXhr.responseJSON; //this will get the errors response data.
                        console.log($errors);
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-danger"><ul>';

                        $.each( $errors.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></di>';

                        $( '#form-errors-admin' ).html( errorsHtml ); //appending to a <div id="form-errors"></div> inside form
                    } else {
                        /// do some thing else
                    }
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        });

        $('#form-reply').on('submit', function(e) {
            e.preventDefault();
            var jawab = $('#jawab').val();
            var komplain_id = $('#komplain_id').val();

            $.ajax({
                type: "POST",
                url: url,
                data: $("#form-reply").serialize(),
                success: function( msg ) {
                    if(msg.status == 'success'){
                        refresh_jawaban(id_komplain);
                        $('#jawab').val('');
                        $('#modalReply').modal('hide');
                    }
                },
                error :function( jqXhr ) {
                    if( jqXhr.status === 401 ) //redirect if not authenticated user.
                        $( location ).prop( 'pathname', 'auth/login' );
                    if( jqXhr.status === 422 ) {
                        //process validation errors here.
                        $errors = jqXhr.responseJSON; //this will get the errors response data.
                        console.log($errors);
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-danger"><ul>';

                        $.each( $errors.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></di>';

                        $( '#form-errors' ).html( errorsHtml ); //appending to a <div id="form-errors"></div> inside form
                    } else {
                        /// do some thing else
                    }
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        });

        $(document).on('click', '#btn-ubah-reply-admin', function(e) {
            url = $(this).attr('data-href');
            $('#form-ubah-reply-admin').attr('action', url );
            
            $.ajax({
                type: "GET",
                url: url,
                success: function( data ) {
                    $('#modalUbahReplyAdmin').modal({
                        backdrop: 'static',
                        keyboard: false,
                        show: true
                    });
                    $('#ubah-jawab-admin').val(data.data.jawaban);
                    $('#id_jawab').val(data.data.id);
                },
            });
            e.preventDefault();
        });

        $('#modalUbahReplyAdmin').on('hidden.bs.modal', function () {
            $('#ubah-jawab-admin').val('');
            $('#form-errors-admin').html('');
        })

        $('#form-ubah-reply-admin').on('submit', function(e) {
            e.preventDefault();
            var jawab = $('#jawab').val();
            var komplain_id = $('#komplain_id').val();
            var id_jawab = $('#id_jawab').val();
            url = url.replace('getkomentar', 'updatekomentar');
            
            $.ajax({
                type: "POST",
                url: url,
                data: $("#form-ubah-reply-admin").serialize(),
                success: function( msg ) {
                    if(msg.status == 'success'){
                        refresh_jawaban(id_komplain);
                        $('#ubah-jawab-admin').val('');
                        $('#modalUbahReplyAdmin').modal('hide');
                    }
                },
                error :function( jqXhr ) {
                    if( jqXhr.status === 401 ) //redirect if not authenticated user.
                        $( location ).prop( 'pathname', 'auth/login' );
                    if( jqXhr.status === 422 ) {
                        //process validation errors here.
                        $errors = jqXhr.responseJSON; //this will get the errors response data.
                        console.log($errors);
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-danger"><ul>';

                        $.each( $errors.errors, function( key, value ) {
                            errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></di>';

                        $( '#form-errors-admin' ).html( errorsHtml ); //appending to a <div id="form-errors"></div> inside form
                    } else {
                        /// do some thing else
                    }
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        });
    });

    function refresh_jawaban(id_komplain)
    {
        $.ajax({
            type: "GET",
            url: '{{ route('sistem-komplain.jawabans') }}',
            data: {id:id_komplain} ,
            success: function( data ) {
                $('#jawabans').html(data);
            },
        });
    }
</script>
@endpush
@include('partials.asset_datetimepicker')
@push('scripts')
    <script type="text/javascript">
        $(function() {

            $('.datepicker').each(function() {
                var $this = $(this);
                $this.datetimepicker({
                    format: 'YYYY-MM-DD'
                });
            });

        })
    </script>
@endpush
