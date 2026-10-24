
<div class="sikema mt40">
<div class="mlr-page">
	<div class="autocol mlr-min5">
		<div class="sikema-left">
			<svg viewBox="0 0 2171.000000 709.000000"><g transform="translate(0.000000,709.000000) scale(0.100000,-0.100000)" ><path d="m1545 7079c-274-14-506-69-710-168-202-98-348-218-478-390-231-306-339-711-324-1216 9-318 61-562 174-818 166-378 486-758 1063-1262 620-542 834-831 917-1242 25-125 25-487 0-587-68-269-255-406-549-406-179 1-313 47-407 143-62 63-86 101-118 186-41 109-53 229-53 534v277h-525-525v-283c0-315 9-442 46-627 139-700 572-1104 1279-1195 161-21 469-21 633 1 303 39 570 139 768 287 145 110 289 281 378 447 267 503 286 1323 45 1924-158 394-452 747-1064 1280-626 545-853 849-932 1243-23 118-23 367 1 473 35 158 126 294 235 354 75 40 190 66 295 66 260-1 428-105 505-315 41-108 52-198 57-460l6-250 525-3 526-2-6 272c-10 434-58 684-183 957-86 187-281 419-440 524-225 148-523 240-824 253-63 3-128 6-145 7-16 2-93 0-170-4z"/><path d="m3760 3545v-3535h555 555v3535 3535h-555-555v-3535z"/><path d="m5490 3545v-3535h560 560v1128l-1 1127 218 442c120 243 220 442 224 442 3 1 216-704 473-1566 257-863 469-1569 470-1571 2-1 264-1 582 0l580 3-668 2220c-367 1221-669 2229-670 2240s294 599 655 1306c361 708 657 1290 657 1293s-249 6-554 6h-553l-704-1482-704-1481-3 1481-2 1482h-560-560v-3535z"/><path d="m9480 3545v-3535h1515 1515v505 505h-960-960v1085 1085h765 765v505 505h-765-765v935 935h960 960v505 505h-1515-1515v-3535z"/><path d="m12940 3545v-3535h490 490v2675c0 1558 4 2675 9 2675s11-15 13-32c2-18 184-1222 403-2675l400-2643h466 466l18 117c10 65 192 1267 404 2672 263 1738 390 2556 399 2559s12-542 12-2672v-2676h525 525v3535 3535h-795c-437 0-795-1-795-2-3-51-709-5050-713-5054s-9-5-12-3c-2 3-163 1141-357 2529l-354 2525-797 3-797 2v-3535z"/><path d="m19031 7013c-6-38-263-1614-571-3503s-563-3450-566-3467l-6-33h516 516l5 22c6 31 195 1330 195 1346 0 9 139 12 635 12h635l5-22c4-21 195-1343 195-1354 0-2 250-4 555-4 457 0 555 2 555 13 0 15-1137 6998-1145 7035l-5 22h-754-754l-11-67zm733-1190c3-16 114-793 246-1728s243-1710 245-1722l5-23h-500c-476 0-500 1-500 18 0 10 108 796 240 1746s240 1730 240 1732 4 4 9 4 12-12 15-27z"/></g></svg>
			<h2 class="gradient-text mt5">Sistem Keluhan Masyarakat</h2>
			<div class="monitor-vec"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/vec-monitor.webp" alt=""></div>
			<p>Sampaikam Keluhan, Kritikan & Saran</p>
			<p>Update Tindak Lanjut & Perkembangannya</p>
		</div>
		<div class="sikema-center displaygrid">
			@include('pages.komplain._tracking')
		</div>
		<div class="sikema-right boxshadow brd-radius10">
			<ul role="tablist" class="nav nav-tabs">
				<li class="active" role="presentation"><a class="difle-c" data-toggle="tab" role="tab" aria-controls="home" href="#ditanggapi" style="background:transparent!important;border-right:var(--brdgrey) 1px solid!important">Terjawab</a></li>
				<li role="presentation"><a class="difle-c" data-toggle="tab" role="tab" aria-controls="messages" href="#populer" style="background:transparent!important;">Proses</a></li>
			</ul>
			<div class="tab-content">
				<div id="ditanggapi" class="tab-pane fade in active" role="tabpanel">
					@include('pages.komplain._komplain_sukses')
				</div>
				<div id="populer" class="tab-pane fade in" role="tabpanel">
					@include('pages.komplain._komplain_populer')
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@push('scripts')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
		
		window.addEventListener('load', function() {
    // Cari elemen sikema
    const widgetItem = document.querySelector('.sikema');
    
    // Tambahkan class 'is-loaded' setelah web 100% termuat
    if (widgetItem) {
        widgetItem.classList.add('is-loaded');
    }
});
    </script>
@endpush

