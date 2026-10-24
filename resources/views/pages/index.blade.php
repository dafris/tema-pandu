@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
	<div class="main-top">
		<div class="relhid maintop-inner">
			<div class="mainhometop">
			<div class="autocol">
				<div class="maintop-left">
					@include('components.slider')
					@include('components.graphtop')
				</div>
				<div class="maintop-right displaygrid">
					@include('components.hometopright')
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="relhid">
	<div class="mlr-page mt20">
		@include('components.running')
	</div>	
	</div>
	<div class="relhid">
	<div class="mlr-page mt20">
		<div class="autocol mlr-min10">
			<div class="colsambutan">
				@include('widgets.camat')
			</div>
			<div class="colaparatur">
				<div class="head-moduletop difle-c">
					<h1>Aparatur</h1>
				</div>
				@include('widgets.pengurus')
			</div>
		</div>
	</div>	
	</div>
	@include('pages.kependudukan.penduduk_hmshow')
	<div class="mlr-page mt40">
		<div class="headmodule difle-c to-center">
			<div class="headmodule-icon difle-c"><svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg></div>
			<h1 class="gradient-text">Berita & Artikel</h1>
		</div>
		@include('pages.berita.index')
		@include('pages.berita.feedshome')
	</div>
	<div class="mlr-page">
		<div class="autocol mlr-min10">
			<div class="middle-col">
			@include('widgets.event')
			</div>
			<div class="middle-col">
			@include('pages.publikasi.album_home')
			</div>
			<div class="middle-col">
			@include('pages.potensi.potensi_home')
			</div>
		</div>
	</div>
	@include('components.module')

@endsection

@push('scripts')
    <script>
		window.addEventListener('load', function() {
		const widgetItem = document.querySelector('.main-top');
		if (widgetItem) {
        widgetItem.classList.add('is-loaded');
		}
	});
    </script>
@endpush