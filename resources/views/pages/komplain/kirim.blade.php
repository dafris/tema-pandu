@extends('layouts.app')

@push('styles')
<style>
    .bootstrap-datetimepicker-widget {
        max-width: 300px;
        white-space: nowrap;
        overflow-x: auto;
        font-size: 14px;
        z-index: 9999 !important;
    }

    @media (max-width: 768px) {
        .bootstrap-datetimepicker-widget {
            transform: scale(0.95);
            transform-origin: top left;
        }
    }
</style>
@endpush

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
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">KIRIM KELUHAN</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">KIRIM KELUHAN</h1></div>
					<div class="mt40">
						{!! Html::form('POST', route('sistem-komplain.store'))->id('form-komplain')->class('form-horizontal form-label-left')->acceptsFiles()->open() !!}
						<div class="rel-hid">
							<div class="sikema-isian">
								@include('partials.flash_message')
								@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Ups!</strong> Ada beberapa masalah dengan masukan Anda.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif

								@include('flash::message')

								<div class="rel-hid">
									@csrf
									
										<div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left difle-l">Kategori <span>*</span></div>

											<div class="formsikema-right">
												{!! Html::select('kategori', \App\Models\KategoriKomplain::pluck('nama', 'id'),
												null)->class('form-control')->id('kategori')->required() !!}
												@if ($errors->has('kategori'))
												<span class="help-block">
													<strong>{{ $errors->first('kategori') }}</strong>
												</span>
												@endif
											</div>
										</div>	
										</div>

										<div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left difle-l">Judul <span>*</span></div>
											<div class="formsikema-right">
												{!! Html::text('judul')->placeholder('Judul')->class('form-control')->required() !!}
												@if ($errors->has('judul'))
												<span class="help-block">
													<strong>{{ $errors->first('judul') }}</strong>
												</span>
												@endif
											</div>
										</div>
										</div>

										<div class="form-group{{ $errors->has('laporan') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left">Laporan<span>*</span></div>
											<div class="formsikema-right">
												{!! Html::textarea('laporan')->placeholder('Laporan')->class('form-control')->required() !!}
												@if ($errors->has('laporan'))
												<span class="help-block">
													<strong>{{ $errors->first('laporan') }}</strong>
												</span>
												@endif
											</div>
										</div>
										</div>

										<div class="form-group{{ $errors->has('laporan1') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left">Lampiran</div>
											<div class="formsikema-right">
												<div class="avatar-upload">
													<div class="avatar-edit">
														<input type='file' id="lampiran1" name="lampiran1" accept="image/*" />
														<label for="lampiran1"></label>
													</div>
													<div class="avatar-preview">
														<div id="lampiranPreview1"
															style="background-image: url(https://via.placeholder.com/80x100);">
														</div>
													</div>
												</div>

												<div class="avatar-upload">
													<div class="avatar-edit">
														<input type='file' id="lampiran2" name="lampiran2" accept="image/*" />
														<label for="lampiran2"></label>
													</div>
													<div class="avatar-preview">
														<div id="lampiranPreview2"
															style="background-image: url(https://via.placeholder.com/80x100);">
														</div>
													</div>
												</div>

												<div class="avatar-upload">
													<div class="avatar-edit">
														<input type='file' id="lampiran3" name="lampiran3" accept="image/*" />
														<label for="lampiran3"></label>
													</div>
													<div class="avatar-preview">
														<div id="lampiranPreview3"
															style="background-image: url(https://via.placeholder.com/80x100);">
														</div>
													</div>
												</div>

												<div class="avatar-upload">
													<div class="avatar-edit">
														<input type='file' id="lampiran4" name="lampiran3" accept="image/*" />
														<label for="lampiran4"></label>
													</div>
													<div class="avatar-preview">
														<div id="lampiranPreview4"
															style="background-image: url(https://via.placeholder.com/80x100);">
														</div>
													</div>
												</div>
											</div>
										</div>

										<p style="display:block;font-weight:bold;margin:0 0 10px;font-size:100%;color:var(--color1);">Verifikasi Data Pelapor</p>

										<div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left difle-l">NIK <span>*</span></div>
											<div class="formsikema-right">
												{!! Html::text('nik')->placeholder('NIK')->class('form-control')->required() !!}
												@if ($errors->has('nik'))
												<span class="help-block">
													<strong>{{ $errors->first('nik') }}</strong>
												</span>
												@endif
											</div>
										</div>
										</div>
										<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left difle-l">Tanggal Lahir <span>*</span></div>

											<div class="formsikema-right">
												{!! Html::text('tanggal_lahir')->placeholder('1990-01-01')->class('form-control
												datepicker')->required() !!}
												@if ($errors->has('tanggal_lahir'))
												<span class="help-block">
													<strong>{{ $errors->first('tanggal_lahir') }}</strong>
												</span>
												@endif
											</div>
										</div>
										</div>

										<div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
										<div class="autocol mlr-min5">
											<div class="formsikema-left">Kode Verifikasi <span>*</span></div>

											<div class="formsikema-right">
												<div class="captcha">
													<span>{!! captcha_img('mini') !!}</span>
													<button type="button" class="btn btn-success btn-refresh"><i
															class="fa fa-refresh"></i></button>
												</div>
												<input id="captcha" type="text" class="form-control mt5" placeholder="Masukan Kode Verifikasi"
													name="captcha">
												@if ($errors->has('captcha'))
												<span class="help-block">
													<strong>{{ $errors->first('captcha') }}</strong>
												</span>
												@endif
											</div>
										</div>
										</div>
									</div>


							</div>
							<div class="difle-r mt15">
								<div class="pull-right">
									<div class="control-group">
										<a href="{{ route('sistem-komplain.index') }}">
											<button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Batal
											</button>
										</a>
										<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim
										</button>
									</div>
								</div>
							</div>
						</div>
						{!! Html::form()->close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@include('partials.asset_upload_images')
@include('partials.asset_datetimepicker')

@push('scripts')
<script type="text/javascript">
    $(function() {
            $(".btn-refresh").click(function() {
                $.ajax({
                    type: 'GET',
                    url: '/refresh-captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });

            $('.datepicker').each(function() {
                var $this = $(this);
                $this.datetimepicker({
                    format: 'YYYY-MM-DD'
                });
            });

            setTimeout(function() {
                $("#notifikasi").slideUp("slow");
            }, 2000);

        })
</script>
@endpush