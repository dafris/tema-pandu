@extends('layouts.app')

@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg>
				<h1>Berita/Artikel {{ config('setting.sebutan_desa') }}</h1>
			</div>
		</div>
		<div class="mlr-page page-content">
			<form id="form_filter" method="get" action="{{ route('filter-berita-desa') }}" style="margin:0;padding:0;height:0;display:none;">
			<div class="autocol mlr-min10 formdesa">
				<input type="hidden" value="1" name="page">
				<div class="column-3">
					@include('layouts.fragments.select-desa')
				</div>
				<div class="column-3">
					<select class="form-control" id="tanggal" name="tanggal" style="width:100%;">
						<option value="Terlama">Terbaru</option>
						<option value="Terbaru">Terlama</option>
					</select>
				</div>
				<div class="column-3">
					<div class="difle-l">
						<input class="form-control" style="width:100%;" type="text" name="cari" placeholder="Cari berita" value="{{ $cari }}" />
						<button type="submit" class="btn custombtn btn-medium btn-info" style="margin-left:5px;"><i class="fa fa-search"></i></button>
					</div>
				</div>	
			</div>
			</form>
			
			@include('pages.berita.feeds')
		</div>
	</div>

@endsection
