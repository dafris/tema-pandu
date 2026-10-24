@extends('layouts.app')

@section('content')
	<div class="content-style">
	<div class="pagetop">
		<div class="mlr-page to-center difle-c">
			<svg viewBox="0 0 24 24"><path d="M21 10V9L15 3H5C3.89 3 3 3.89 3 5V19C3 20.11 3.9 21 5 21H11V19.13L19.39 10.74C19.83 10.3 20.39 10.06 21 10M14 4.5L19.5 10H14V4.5M22.85 14.19L21.87 15.17L19.83 13.13L20.81 12.15C21 11.95 21.33 11.95 21.53 12.15L22.85 13.47C23.05 13.67 23.05 14 22.85 14.19M19.13 13.83L21.17 15.87L15.04 22H13V19.96L19.13 13.83Z" /></svg>
			<h1>Berita/Artikel</h1>
		</div>
	</div>
	<div class="mlr-page page-content">
	 <div class="maincol">
		<div class="leftcol">
			<div class="relhid leftcol-inner">
				<div class="title-content">{{ $artikel->judul }}</div>
				<div class="meta-content difle-l">
					@if ($artikel->kategori)
					<div class="info-item difle-l">
						<div class="info-item-icon"><svg viewBox="0 0 24 24"><path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 19H5V9H19V19M5 7V5H19V7H5M10.56 17.46L16.5 11.53L15.43 10.47L10.56 15.34L8.45 13.23L7.39 14.29L10.56 17.46Z" /></svg></div>
						{{ $artikel->kategori->nama_kategori }}
					</div>
					@endif
					<div class="info-item difle-l">
						<div class="info-item-icon"><svg viewBox="0 0 24 24"><path d="M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3M19 19H5V9H19V19M5 7V5H19V7H5M10.56 17.46L16.5 11.53L15.43 10.47L10.56 15.34L8.45 13.23L7.39 14.29L10.56 17.46Z" /></svg></div>
						{{ format_date($artikel->created_at) }}
					</div>
				</div>
				 @if(!empty($artikel->gambar))
					<div class="content-image"><img src="{{ is_img($artikel->gambar) }}" alt="Gambar Artikel"></div>
				@endif
				@if ($artikel->isi)
				<div class="content-isi mt20">{!! $artikel->isi !!}</div>
				@endif
				
				<div class="comment-content mt40">
					@if (session()->has('success'))
						<div id="notifikasi" class="alert alert-success" role="alert">{{ session('success') }}</div>
					@endif
					@if ($errors->any())
						<div class="alert alert-danger" role="alert">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				
					<ul class="nav nav-tabs" role="tablist">
						<li class="active">
							<div class="difle-l">
							<a href="#comments-logout" role="tab" data-toggle="tab"><div class="list-comment difle-l"><svg viewBox="0 0 24 24"><path d="M18,8H6V6H18V8M18,11H6V9H18V11M18,14H6V12H18V14M22,4A2,2 0 0,0 20,2H4A2,2 0 0,0 2,4V16A2,2 0 0,0 4,18H18L22,22V4Z" /></svg>Komentar</div></a>
							</div>
						</li>
						<li>
							<div class="difle-r">
							<a href="#add-comment" role="tab" data-toggle="tab"><div class="send-comment difle-l"><div class="send-comment2 difle-l">Kirim Komentar</div></div></a>
							</div>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="comments-logout">
							@forelse ($comments as $comment)
							<div class="relhid comment-row">
								<div class="autocol">
									<div class="comment-icon"><svg viewBox="0 0 24 24"><path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M16,14V13C16,11.67 13.33,11 12,11C10.67,11 8,11.67 8,13V14H16M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6Z" /></svg></div>
									<div class="comment-user">
									<h3>{{ $comment->nama }}</h3>
									<p>{{ $comment->created_at->locale('id')->translatedFormat('j F Y') }}</p>
									</div>
								</div>
								<div class="comment-detail">
									<p>{{ $comment->body }}</p>
									<div class="difle-r mt10">
									<button class="btn btsmall-custom btnModal difle-c" data-id="{{ $comment->id }}" style="color:var(--cblack)!important;"><span class="glyphicon glyphicon-share-alt" style="margin-right:5px;"></span> Balas</button>
									</div>
								</div>
								<div class="collapse in" id="replyOne" style="">
								@foreach ($comment->replies as $reply)
									<div class="reply-row">
										<div class="relhid reply-top">
											<h3>{{ $reply->nama }}</h3>
											<p>{{ $reply->created_at->locale('id')->translatedFormat('j F Y') }}</p>
										</div>
										<div class="reply-isi">
											<p>{{ $reply->body }}</p>
										</div>
									</div>
								@endforeach	
								</div>
							</div>
							@empty
								<div class="comment-empty mt20">
									<p>Untuk sementara belum ada komentar yang tersedia</p>
								</div>
							@endforelse
						</div>
						<div class="tab-pane" id="add-comment">
							<div class="formcomment mt10">
							<form action="{{ route('comments.store') }}" method="POST" class="form-horizontal" id="commentForm" role="form">
                            @csrf
								<input type="hidden" name="comment_id" value="">
								<input type="hidden" id="das_artikel_id" name="das_artikel_id" value="{{ $artikel->id }}">
								
								<div class="commentform-group mt10">
									<div class="autocol mlr-min5">
										<div class="commentlabel difle-r">Nama</div>
										<div class="commentdata">
											<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required value="{{ old('nama') }}">
										</div>
									</div>
								</div>
								<div class="commentform-group mt10">
									<div class="autocol mlr-min5">
										<div class="commentlabel difle-r">Email</div>
										<div class="commentdata">
											<input type="text" class="form-control" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
										</div>
									</div>
								</div>
								<div class="commentform-group mt10">
									<div class="autocol mlr-min5">
										<div class="commentlabel to-right">Balasan</div>
										<div class="commentdata">
											<textarea class="form-control" id="body" name="body" rows="3" placeholder="Tulis balasan disini.." required>{{ old('body') }}</textarea>
										</div>
									</div>
								</div>
								<div class="commentform-group mt10">
									<div class="autocol mlr-min5">
										<div class="commentlabel to-right"></div>
										<div class="commentdata difle-l">
											<div class="captcha difle-l">
											<span>{!! captcha_img('mini') !!}</span>
											<button type="button" class="btn btn-success btn-refresh" data-captcha="main" style="margin-right:10px;"><i class="fa fa-refresh"></i></button>
											</div>
											<input id="captcha-main" type="text" class="form-control" placeholder="Masukan Kode Verifikasi" name="captcha_main" required>
										</div>
									</div>
								</div>

								<div class="commentform-group mt10 difle-r">
									<button class="btn btn-success" type="submit" id="submitComment">Kirim Komentar</button>
								</div>
							</form>
							</div>
						</div>
					</div>	
				</div>
				
				<div class="comment-content">
					
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="headmodal difle-l">
					<h1>Balas Komentar</h1>
                    <div class="close-modal difle-c" data-dismiss="modal" aria-label="Close"><svg viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg></div>
                </div>
                <div class="modal-body">
                    {{-- <div id="placeModal"></div> --}}
                </div>
            </div>

        </div>

    </div>
	
	
@endsection

@push('scripts')
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=61eeb3e9e14521001ac13912&product=inline-share-buttons"
        async="async"></script>
@endpush

@push('scripts')
    <script>
        $(document).on('click', '.btnModal', function(e) {
            e.preventDefault();
            // Get the comment and article IDs
            let commentId = $(this).data('id');
            let artikelId = $('#das_artikel_id').val();

            $.ajax({
                url: "{{ route('comments.modal') }}",
                type: 'GET',
                data: {
                    comment_id: commentId,
                    artikel_id: artikelId,
                },
                success: function(data) {
                    $('#exampleModal .modal-body').html(data);

                    // Show the modal
                    $('#exampleModal').modal('show');
                }
            });
        });

        // Handle CAPTCHA refresh
        $(document).on('click', '.btn-refresh', function(e) {
            e.preventDefault();
            var captchaElement = $(this).prev('span');
            $.ajax({
                type: 'GET',
                url: "{{ route('refresh-captcha') }}",
                success: function(data) {
                    captchaElement.html(data.captcha);
                }
            });
        });
    </script>
@endpush
