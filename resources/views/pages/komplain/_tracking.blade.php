
<div class="send-sikema aligntop">
	<a href="{{ route('sistem-komplain.kirim') }}">
		<div class="btsend-sikema difle-l">Kirim Keluhan<svg viewBox="0 0 24 24"><path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" /></svg></div>
	</a>
</div>
<div class="lacak-sikema alignbottom">
		<div class="sikema-label difle-l">
			Lacak Keluhan
		</div>
		<div class="form-sikema">
			<form method="post" action="{{ route('sistem-komplain.tracking') }}">
				<div class="input-group input-group-sm">
					{{ csrf_field() }}
					<input style="color:#fff;" class="form-control" required type="text" id="tracking" name="tracking_id" placeholder="Tracking ID Keluhan Anda" />
					<span class="input-group-btn"><button type="submit" class="btn btsikema difle-c"><svg viewBox="0 0 24 24"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg></button></span>
				</div>
			</form>
		</div>	
</div>

