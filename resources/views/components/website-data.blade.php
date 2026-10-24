@push('scripts')
<script>
    $(function() {
        $.getJSON('{!! $urlApi !!}/website').done(function(res) {
            // Extract data from the API response
            if (res.data && Array.isArray(res.data)) {
                const websiteData = {};

                // Convert array of objects to key-value pairs
                res.data.forEach(item => {
                    if (item.id && item.attributes) {
                        websiteData[item.id] = item.attributes[0]; // Get first element of attributes array
                    }
                });

                // Store data globally for use by other components
                window.websiteData = websiteData;

                // Update navigation menu
                updateNavigationMenu(websiteData.navmenus);

                // Update slides
                updateSlides(websiteData.slides);

                // Update social media
                updateSocialMedia(websiteData.medsos);

                updateProfile(websiteData.profile);
                // Update desa list
                updateDesaList(websiteData.desa);

                // Update widgets
                updateEvents(websiteData.events);
                updateMediaTerkait(websiteData.media_terkait);
                updateMediaSosial(websiteData.medsos);
                updateSinergiProgram(websiteData.sinergi);
                updatePengurus(websiteData.pengurus);
                updateCounter(websiteData.counter)
                // Trigger custom event to notify other components
                $(document).trigger('websiteDataLoaded', [websiteData]);
            }
        }).fail(function() {
            console.error('Gagal mengambil data website dari API.');
        });

        // Function to update navigation menu
        function updateNavigationMenu(navmenus) {
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

            $('#main-nav-menu').html(navHtml);
        }

        // Function to update slides
        function updateSlides(slides) {
            if (!slides || !Array.isArray(slides)) return;

            let slidesHtml = '';
            slides.forEach(slide => {
                const imageSrc = slide.gambar && slide.gambar.startsWith('http') ? slide.gambar : (slide.gambar ? '{{ asset("") }}' + slide.gambar : '{{ asset("img/placeholder.jpg") }}');
                slidesHtml += '<div class="swiper-slide">' +
                    '<div class="slider-class">' +
                    '<div class="legend"></div>' +
                    '<div class="content-slide">' +
                    '<div class="content-txt">' +
                    '<h1>' + (slide.judul || '') + '</h1>' +
                    '<h2>' + (slide.deskripsi || '') + '</h2>' +
                    '</div>' +
                    '</div>' +
                    '<div class="image">' +
                    '<img src="' + imageSrc + '" alt="' + (slide.judul || '') + '">' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            });

            $('#slides-container').html(slidesHtml);

            // Reinitialize swiper
            if (window.swiper) {
                window.swiper.update();
            } else {
                window.swiper = new Swiper("#swiper-slider", {
                    autoplay: {
                        delay: 4000,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
        }

        // Function to update social media
        function updateSocialMedia(medsos) {
            if (!medsos || !Array.isArray(medsos)) return;

            let socialHtml = '';
            medsos.forEach(sosmed => {
                const iconClass = getSosmedIcon(sosmed.nama);
                sosmed.logo = sosmed.logo.replace(/\/+img\//, 'img/');

                const logoPath = sosmed.logo ? (sosmed.logo.startsWith('http') ? sosmed.logo : '{{ asset("") }}' + sosmed.logo) : '';
                socialHtml += '<li style="margin: 4px">' +
                    '<a href="' + (sosmed.url || '#') + '" rel="noopener noreferrer" target="_blank">' +
                    '<img src="' + logoPath + '" class="logo-medsos" alt="Media Sosial Image">' +
                    '</a>' +
                    '</li>';
            });

            $('#social-media-container ul').html(socialHtml);
        }

        // Function to update desa list
        function updateDesaList(desa) {
            if (!desa || !Array.isArray(desa)) return;

            let desaHtml = '';
            const chunkedDesa = [];
            for (let i = 0; i < desa.length; i += 2) {
                chunkedDesa.push(desa.slice(i, i + 2));
            }

            chunkedDesa.forEach(chunk => {
                chunk.forEach(d => {
                    desaHtml += '<ul>' +
						'<div class="desalist">' +
                        '<li class="desa-list">' +
                        '<a href="/desa/desa-' + (d.nama ? d.nama.toLowerCase().replace(/\s+/g, '-') : '') + '">' +
                        (d.sebutan_desa || '') + ' ' + (d.nama || '') +
                        '</a>' +
                        '</li>' +
						'</div>' +
                        '</ul>';
                });
            });

            $('#desa-list-container ul').html(desaHtml);
        }

        // Helper function to get social media icon class
        function getSosmedIcon(name) {
            const nameLower = name.toLowerCase();
            if (nameLower.includes('facebook')) return 'fa fa-facebook';
            if (nameLower.includes('twitter')) return 'fa fa-twitter';
            if (nameLower.includes('instagram')) return 'fa fa-instagram';
            if (nameLower.includes('youtube')) return 'fa fa-youtube';
            if (nameLower.includes('linkedin')) return 'fa fa-linkedin';
            if (nameLower.includes('whatsapp')) return 'fa fa-whatsapp';
            if (nameLower.includes('telegram')) return 'fa fa-telegram';
            return 'fa fa-link'; // Default icon
        }

        // Function to update events widget
        function updateEvents(events) {
                if (!events || (Array.isArray(events) && events.length === 0)) {
                    $('#events-widget ul').html('<div class="module-box difle-c"><div class="data-empty difle-c"><svg viewBox="0 0 24 24"><path d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" /></svg>Untuk saat ini belum ada data yang tersedia</div></div>');
                    return;
                }

                let eventsHtml = '';

                const processEvent = (event) => {
                    const statusClass = event.status === 'OPEN' ? 'bg-maroon' : 'bg-gray';
                    const eventDate = event.start ? new Date(event.start).toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric'
                    }) : '';

                    eventsHtml += '<div class="events-row">' +
						'<div class="autocol mlr-min5">' +
						'<div class="event-icon difle-c">' +
                        '<svg class=" ' + statusClass + '" viewBox="0 0 24 24">' +
'<path d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" />' +
'</svg>' +
						'</div>' +
                        '<div class="event-data">' +
                        '<h2>' +
                        '<a href="' + (event.slug ? '/event/' + event.slug : '#') + '">' + (event.event_name || 'Event') + '</a>' +
                        '</h2>' +
						'<p>' + eventDate + '</p>' +
                        '</div>' +
						'</div>' +
						'</div>';
                };

                if (Array.isArray(events)) {
                    events.forEach(processEvent);
                } else {
                    Object.values(events).forEach(eventGroup => {
                        if (Array.isArray(eventGroup)) {
                            eventGroup.forEach(processEvent);
                        } else {
                            processEvent(eventGroup);
                        }
                    });
                }

                if (eventsHtml === '') {
                    eventsHtml = '<div class="rel-hid difle-c"><div class="data-empty difle-c"><svg viewBox="0 0 24 24"><path d="M19,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10L12,6H19A2,2 0 0,1 21,8H21L4,8V18L6.14,10H23.21L20.93,18.5C20.7,19.37 19.92,20 19,20Z" /></svg>Untuk saat ini belum ada data yang tersedia</div></div>';
                }

                $('#events-widget ul').html(eventsHtml);
            }

        // Function to update media terkait widget
        function updateMediaTerkait(mediaTerkait) {
            if (!mediaTerkait || !Array.isArray(mediaTerkait)) return;

            const jumlahItem = mediaTerkait.length;
            let mediaHtml = '<div class="marquee-wrapper">' +
                '<div class="marquee-content ' + (jumlahItem > 1 ? 'animate' : '') + '">' +
                '<ul class="marquee-track">';

            // First set of items
            mediaTerkait.forEach(data => {
                const logoPath = data.logo ? (data.logo.startsWith('http') ? data.logo : '{{ asset("media_terkait/") }}' + data.logo) : '';
                mediaHtml += '<li>' +
                    '<a href="' + (data.url || '#') + '" rel="noopener noreferrer" target="_blank">' +
                    '<img src="' + logoPath + '" alt="Logo">' +
                    '</a>' +
                    '</li>';
            });

            // Duplicate for seamless loop if more than 1 item
            if (jumlahItem > 1) {
                mediaTerkait.forEach(data => {
                    const logoPath = data.logo ? (data.logo.startsWith('http') ? data.logo : '{{ asset("media_terkait/") }}' + data.logo) : '';
                    mediaHtml += '<li>' +
                        '<a href="' + (data.url || '#') + '" rel="noopener noreferrer" target="_blank">' +
                        '<img src="' + logoPath + '" alt="Logo">' +
                        '</a>' +
                        '</li>';
                });
            }

            mediaHtml += '</ul></div></div>';

            $('#media-terkait-widget').html(mediaHtml);
        }

        // Function to update media sosial widget
        function updateMediaSosial(medsos) {
            if (!medsos || !Array.isArray(medsos)) return;

            let socialHtml = '<ul style="list-style-type: none; display:flex; padding: 0;">';
            medsos.forEach(data => {
                const logoPath = data.logo ? (data.logo.startsWith('http') ? data.logo : '{{ asset("") }}' + data.logo) : '';
                socialHtml += '<li style="margin: 4px">' +
                    '<a href="' + (data.url || '#') + '" rel="noopener noreferrer" target="_blank">' +
                    '<img src="' + logoPath + '" class="logo-medsos" alt="Media Sosial Image">' +
                    '</a>' +
                    '</li>';
            });
            socialHtml += '</ul>';

            $('#media-sosial-widget').html(socialHtml);
        }

        // Function to update sinergi program widget
        function updateSinergiProgram(sinergi) {
            if (!sinergi || !Array.isArray(sinergi)) return;

            let sinergiHtml = '<div class="row" style="margin: 0">';
            sinergi.forEach(data => {
                data.gambar = data.gambar.replace(/\/+img\//, 'img/');
                const gambarPath = data.gambar ? (data.gambar.startsWith('http') ? data.gambar : '{{ asset("") }}' + data.gambar) : '';
                sinergiHtml += '<div class="col-md-6" style="padding: 4px;">' +
                    '<a href="' + (data.url || '#') + '" rel="noopener noreferrer" target="_blank">' +
                    '<img src="' + gambarPath + '" class="logo-sinergi-program" alt="Sinergi Program Image">' +
                    '</a>' +
                    '</div>';
            });
            sinergiHtml += '</div>';

            $('#sinergi-program-widget').html(sinergiHtml);
        }

        function updateProfile(profile) {
            if (!profile) return;
            let profileHtml = `<h5 class="text-bold">Kantor {{ $sebutan_wilayah }} ${profile.nama_kecamatan}</h5>
            <ul class="no-padding">                
                <li> <small style="text-indent: 0px; font-size:15px"><i class="fa fa-map-marker"></i>
                        ${profile.alamat}</small></li>
                <li><small style="text-indent: 0px ;font-size:15px"><i class="fa fa-fax"></i>
                        ${profile.kode_pos}</small></li>
                <li><small style="text-indent: 0px ;font-size:15px"><a href="mailto:${profile.email}"
                            target="_blank"><i class="fa fa-envelope"></i> ${profile.email}</a></small></li>
                <li><small style="text-indent: 0px ;font-size:15px"><i class="fa fa-phone"></i>
                        ${profile.telepon}</small></li>
            </ul>`;
            
            $('#desa-profil-container').html(profileHtml)
        }
        function updatePengurus(pengurus) {
    if (!pengurus || !Array.isArray(pengurus)) return;

    let pengurusHtml = '<div id="swiper-pengurus" class="swiper">' +
        '<div class="swiper-wrapper">';

    pengurus.forEach(item => {
        const fotoPath = item.foto ? (item.foto.startsWith('http') ? item.foto : '{{ asset("") }}' + item.foto) : '{{ asset("img/no-profile.png") }}';
        const jabatanNama = item.jabatan && typeof item.jabatan === 'object' ? item.jabatan.nama : (item.jabatan_nama || '');

        pengurusHtml += '<div class="swiper-slide">' +
            '<div class="rel-hid">' +
			'<div class="image-aparatur imagefull">' +
            '<img src="' + fotoPath + '">' +
            '</div>' +
            '<div class="title-absolute to-center">' +
			'<h2>' + (item.namaGelar || '') + '</h2>' +
			'<p>' + jabatanNama + '</p>' +
            '</div>' +
			'</div>' +
            '</div>';
    });

    pengurusHtml += '</div>' +
        '<div class="swiper-button-next"></div>' +
        '<div class="swiper-button-prev"></div>' +
        '<div class="swiper-pagination"></div>' +
        '</div>';

    $('#pengurus-widget').html(pengurusHtml);

    // Reinitialize swiper
    if (window.swiperPengurus) {
        window.swiperPengurus.destroy(true, true);
    }

    window.swiperPengurus = new Swiper("#swiper-pengurus", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: 2,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // Layar >= 768px (Tablet)
            768: {
                slidesPerView: 2,
            },
            // Layar >= 1024px (Desktop)
            1024: {
                slidesPerView: 3,
            }
        }
    });
}

        function updateCounter(counter) {
            if(!counter) return;
            let counterHtml = `<table class="table-footer table-left">
			<tr>
				<td>Pengunjung Hari Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">${counter.today}</td>
			</tr>
			<tr>
				<td>Pengunjung Kemaren</td><td style="width:30px;text-align:center;">:</td><td class="tdright">${counter.yesterday}</td>
			</tr>
			<tr>
				<td>Pengunjung Minggu Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">${counter.week}</td>
			</tr>
			<tr>
				<td>Pengunjung Bulan Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">${counter.month}</td>
			</tr>
			<tr>
				<td>Pengunjung Tahun Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">${counter.year}</td>
			</tr>
			<tr>
				<td>Total Pengunjung</td><td style="width:30px;text-align:center;">:</td><td class="tdright">${counter.all}</td>
			</tr>
    </table>`;
            $('#desa-visitor-container').html(counterHtml)
        }
    })
</script>
@endpush