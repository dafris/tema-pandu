@extends('layouts.app   ')
@section('content')
	<div class="content-style">
	<div class="pagetop">
		<div class="mlr-page to-center difle-c">
			<svg viewBox="0 0 24 24"><path d="M19,3H18V1H16V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H10V19H5V8H19V9H21V5A2,2 0 0,0 19,3M21.7,13.35L20.7,14.35L18.65,12.35L19.65,11.35C19.85,11.14 20.19,11.13 20.42,11.35L21.7,12.63C21.89,12.83 21.89,13.15 21.7,13.35M12,18.94L18.07,12.88L20.12,14.88L14.06,21H12V18.94Z" /></svg>
			<h1>EVENT</h1>
		</div>
	</div>
	<div class="mlr-page page-content">
	 <div class="maincol">
		<div class="leftcol">
			<div class="relhid leftcol-inner">
				<div class="title-content">{{ $event->event_name }}</div>
				<div class="event-open mt20">
					<div class="difle-l">
						<div class="icon-info difle-c">
							<svg viewBox="0 0 24 24"><path d="M22 14V22H20V18L16 22V19H11V17H16V14L20 18V14H22M5 19L9 19V21L5 21C3.9 21 3 20.1 3 19V5C3 3.89 3.9 3 5 3H6V.998H8V3H16V.998H18V3H19C20.11 3 21 3.89 21 5L21 12H19V8H5V19Z" /></svg>
						</div>
						<h2>Tanggal dan Jam Event</h2>
					</div>
					<h3>{{ date('d M Y H:i:s', strtotime($event->start)) }} - {{ date('d M Y H:i:s', strtotime($event->end)) }}</h3>
				</div>
				<div class="event-open mt10">
					<div class="difle-l">
						<div class="icon-info difle-c">
							<svg viewBox="0 0 24 24"><path d="M16 9C22 9 22 13 22 13V15H16V13C16 13 16 11.31 14.85 9.8C14.68 9.57 14.47 9.35 14.25 9.14C14.77 9.06 15.34 9 16 9M2 13C2 13 2 9 8 9S14 13 14 13V15H2V13M9 17V19H15V17L18 20L15 23V21H9V23L6 20L9 17M8 1C6.34 1 5 2.34 5 4S6.34 7 8 7 11 5.66 11 4 9.66 1 8 1M16 1C14.34 1 13 2.34 13 4S14.34 7 16 7 19 5.66 19 4 17.66 1 16 1Z" /></svg>
						</div>
						<h2>Yang Akan Hadir</h2>
					</div>
					<h3>{{ $event->attendants }}</h3>
				</div>
				<div class="content-isi mt20" style="padding-top:20px;border-top:var(--brdgrey) 1px solid;">
                {!! $event->description !!}
				</div>
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
