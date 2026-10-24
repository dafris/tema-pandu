<div class="headtop">
	<div class="mlr-page">
		<div class="headtop-inner difle-l">
			<a href="{{ route('beranda') }}">
			<div class="headtop-left difle-l">
				<img src="{{ is_logo($profil->file_logo) }}" alt="OpenDK">
				<div>
					<h2>{{ strtoupper('PEMERINTAH KAB. ' . $profil->nama_kabupaten) }}</h2>
					<h1 class="gradient-text">{{ strtoupper($sebutan_wilayah . ' ' . $profil->nama_kecamatan) }}</h1>
				</div>
			</div>
			</a>	
			<div class="headtop-right difle-l">
				@include('components.weather')
				<a href="{{ route('login') }}">
				<div class="top-btright trans-def difle-c">
					<svg viewBox="0 0 24 24"><path d="M18 16H14V18H18V20L21 17L18 14V16M11 4C8.8 4 7 5.8 7 8S8.8 12 11 12 15 10.2 15 8 13.2 4 11 4M11 14C6.6 14 3 15.8 3 18V20H12.5C12.2 19.2 12 18.4 12 17.5C12 16.3 12.3 15.2 12.9 14.1C12.3 14.1 11.7 14 11 14" /></svg>
				</div>
				</a>
				<div class="btpop trans-def difle-c" onclick="menuOpen()">
					<svg viewBox="0 0 24 24"><path d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z" /></svg>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="openmenu" class="panelmenu">
	<div class="panelmenu-inner brd-radius10">
		<div class="panelmenu-head difle-c" onclick="menuClose()">
			<svg viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
		</div>
		<div class="panelmenu-box">
		<div class="scrollbar" id="style-3">
			<div class="mobile-menu">
			<div id="navbar">
				<ul class="nav navbar-nav" id="sidebar-nav-menu"></ul>
			</div>
			</div>
		</div>
		</div>
	</div>
</div>

@push('scripts')
<script>
function menuOpen() {
	  document.getElementById("openmenu").style.height = "100%";
	}
	function menuClose() {
	  document.getElementById("openmenu").style.height = "0";
	}
</script>	

<script>
(function() {
    // Membungkus di dalam IIFE agar variabel & fungsi tidak merusak/terganggu fitur lain
    $(function() {
        $.getJSON('{!! $urlApi !!}/website').done(function(res) {
            if (res.data && Array.isArray(res.data)) {
                const websiteData = {};

                res.data.forEach(item => {
                    if (item.id && item.attributes) {
                        websiteData[item.id] = item.attributes[0]; 
                    }
                });

                // Eksekusi fungsi internal yang aman
                updateNavigationMenuSecured(websiteData.navmenus);

                // Tetap menembakkan event jika ada library lain yang mendengarkan data ini
                $(document).trigger('websiteDataLoaded', [websiteData]);
            }
        }).fail(function() {
            console.error('Gagal mengambil data website dari API.');
        });

        function updateNavigationMenuSecured(navmenus) {
            if (!navmenus || !Array.isArray(navmenus)) return;

            let navHtml = '';
            navmenus.forEach(nav => {
                const hasChildren = nav.children && nav.children.length > 0;
                navHtml += '<li class="' + (hasChildren ? 'dropdown' : '') + '">' +
                    '<a href="' + (nav.url || '#') + '" target="' + (nav.target || '_self') + '" class="' + (hasChildren ? 'dropdown-toggle' : '') + '" data-toggle="' + (hasChildren ? 'dropdown' : '') + '" role="button" aria-haspopup="true" aria-expanded="false">' +
                    nav.name +
                    (hasChildren ? '<span class="caret"></span>' : '') +
                    '</a>';

                if (hasChildren) {
                    navHtml += '<ul class="dropdown-menu">';
                    nav.children.forEach(child => {
                        const hasGrandChildren = child.children && child.children.length > 0;
                        navHtml += '<li class="' + (hasGrandChildren ? 'dropdown-submenu' : '') + '">' +
                            '<a href="' + (child.url || '#') + '" target="' + (child.target || '_self') + '" tabindex="-1" class="' + (hasGrandChildren ? 'dropdown-submenu-toggle' : '') + '">' +
                            child.name +
                            (hasGrandChildren ? '<span class="caret"></span>' : '') +
                            '</a>';

                        if (hasGrandChildren) {
                            navHtml += '<ul class="dropdown-menu">';
                            child.children.forEach(grandChild => {
                                navHtml += '<li><a href="' + (grandChild.url || '#') + '" target="' + (grandChild.target || '_self') + '">' + grandChild.name + '</a></li>';
                            });
                            navHtml += '</ul>';
                        }
                        navHtml += '</li>';
                    });
                    navHtml += '</ul>';
                }
                navHtml += '</li>';
            });

            // Add auth links
            var loginUrl = "{{ route('login') }}";
            navHtml += '<li><a href="' + loginUrl + '">LogIn</a></li>';

            // Target langsung ke ID menu Anda
            $('#sidebar-nav-menu').html(navHtml);
        }
    });
})();
</script>
@endpush
