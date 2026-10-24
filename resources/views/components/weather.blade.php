<div class="day difle-l">
	<div>
		<div id="thisdate" class="to-right trans-h"></div><div id="thistime" class="to-right trans-h"></div>
	</div>
	<div class="weather">
	<script type='text/javascript'>
	var now = new Date();
	var hours = now.getHours();
	if (hours >= 15 && hours <= 17.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/afternoon.webp"></div>');
	} else if (hours >= 18 && hours <= 19.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/sunset.webp"></div>');
	} else if (hours >= 19 && hours <= 23.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/night.webp"></div>');
	} else if (hours >= 0 && hours <= 5.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/night.webp"></div>');
	} else if (hours >= 6 && hours <= 7.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/sunrise.webp"></div>');
	} else if (hours >= 8 && hours <= 11.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/morning.webp"></div>');
	} else if (hours >= 12 && hours <= 14.59){
	document.write('<div class="weather-item"><img src="https://cdn.jsdelivr.net/gh/rumgadweb/temdeka/images/sun.webp"></div>');
	}
	</script>
	</div>
</div>


<script>
	var tw=new Date();if(tw.getTimezoneOffset()==0)(a=tw.getTime()+(7*60*60*1000))
	else(a=tw.getTime());tw.setTime(a);var tahun=tw.getFullYear();var hari=tw.getDay();var bulan=tw.getMonth();var tanggal=tw.getDate();var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");document.getElementById("thisdate").innerHTML=hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun
	function animation(span){span.className="turn";setTimeout(function(){span.className=""},700)}function thistime(){setInterval(function(){var waktu=new Date();var thistime=document.getElementById('thistime');var hours=waktu.getHours();var minutes=waktu.getMinutes();var seconds=waktu.getSeconds();if(waktu.getHours()<10){hours='0'+waktu.getHours()}
	if(waktu.getMinutes()<10){minutes='0'+waktu.getMinutes()}
	if(waktu.getSeconds()<10){seconds='0'+waktu.getSeconds()}
	thistime.innerHTML='<span class="jammenit">'+hours+':</span>'+'<span class="jammenit">'+minutes+':</span>'+'<span class="jammenit">'+seconds+'</span>';var spans=thistime.getElementsByTagName('span');animation(spans[2]);if(seconds==0)animation(spans[1]);if(minutes==0&&seconds==0)animation(spans[0]);},1000)}
	thistime()
</script>