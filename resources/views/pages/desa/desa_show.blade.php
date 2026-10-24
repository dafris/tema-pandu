@extends('layouts.app   ')
@section('content')
	<div class="content-style">
	<div class="pagetop">
		<div class="mlr-page to-center difle-c">
			<svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg>
			<h1>Data Desa</h1>
		</div>
	</div>
	<div class="mlr-page page-content">
	 <div class="maincol">
		<div class="leftcol">
			<div class="relhid leftcol-inner">
				<div class="title-content">{{ $page_description }} {{ $desa->nama }}</div>
				<table class="table-desa">
					<tr>
						<td class="table1-desa">Kode {{ config('setting.sebutan_desa') }}</td><td style="width:15px;text-align:center;padding-left:0;padding-right:0;">:</td><td>{{ $desa->desa_id }}</td>
					</tr>	
					<tr>
						<td class="table1-desa">Nama {{ config('setting.sebutan_desa') }}</td><td style="width:15px;text-align:center;padding-left:0;padding-right:0;">:</td><td>{{ $desa->nama }}</td>
					</tr>	
					<tr>
						<td class="table1-desa">Luas Wilayah</td>
						<td style="width:15px;text-align:center;padding-left:0;padding-right:0;">:</td>
						<td>
							@if ($desa->luas_wilayah)
								{{ $desa->luas_wilayah }} Km<sup>2</sup>
							@endif
						</td>
					</tr>
					<tr>
						<td class="table1-desa">Website</td><td style="width:15px;text-align:center;padding-left:0;padding-right:0;">:</td><td><a href="{{ $desa->website }}" target="_blank">{{ $desa->website }}</a></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="rightcol">
			<div class="stickcol">
				<div class="sidebar">
				@include('components.sidebar')
				</div>
			</div>
		</div>
	</div>	
	</div>
	</div>
@endsection
