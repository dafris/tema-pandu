@extends('layouts.app')
@section('content')
	<div class="content-style">
		<div class="pagetop">
			<div class="mlr-page to-center difle-c">
				<svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg>
				<h1>Statistik</h1>
			</div>
		</div>
		<div class="mlr-page relhid page-content">
			<div class="relative statis-content">
				<div class="statis-bg">
					<marquee onmouseover="this.stop()" onmouseout="this.start()" style="white-space:nowrap;">Data Kependudukan</marquee>
				</div>
				<div class="relhid statis-inner">
					<div class="title-statis to-center"><h1 class="gradient-text2">Data Kependudukan</h1></div>
					<div class="mt40">
						@if (isset($regulasi))
                <div class="box-body no-padding">

                    <table class="table table-striped">
                        <tr>
                            <th>Judul Regulasi</th>
                            <th style="width: 150px">Aksi</th>
                        </tr>
                        @foreach ($regulasi as $item)
                            <tr>
                                <td><a href="{{ route('unduhan.regulasi.show', ['nama_regulasi' => str_slug($item->judul)]) }}">{{ $item->judul }}</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $regulasi->links() !!}
                </div>
            @else
                <div class="box-body">
                    <h3>Data not found.</h3>
                    Sorry no data available right now!
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pull-right">

                    </div>
                </div>
            @endif
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
