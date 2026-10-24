
@if (Route::currentRouteName() === 'beranda')
	@php
		$slides = \App\Models\Slide::all();
	@endphp
	@if ($slides->isNotEmpty())
		<div class="areaslide">
			<div class="my-slider-container">
				@foreach($slides as $index => $slide)
					<div class="my-slide {{ $index === 0 ? 'active' : '' }}">
						<div class="imageslide">
							<img src="{{ asset($slide->gambar) }}" alt="{{ $slide->judul }}">
						</div>
						<div class="my-titleslide to-center">
							<h2 class="mb5">{{ $slide->judul }}</h2>
							<p>{{ $slide->deskripsi }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@endif
@endif

<script>
    let i = 0;
    const all = document.querySelectorAll('.my-slide');
    if (all.length > 0) {
        setInterval(() => {
            all[i].classList.remove('active');
            i = (i + 1) % all.length;
            all[i].classList.add('active');
        }, 4000);
    }
	
	window.addEventListener('load', function() {
		const widgetItem = document.querySelector('.my-slider-container');
		if (widgetItem) {
        widgetItem.classList.add('is-loaded');
		}
	});
</script>
