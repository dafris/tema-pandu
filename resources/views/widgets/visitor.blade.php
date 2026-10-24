<div class="difle-c to-center mb5"><h3>Pengunjung</h3></div>
<div class="visitor-box">
	<div id="desa-visitor-container">
		<i class="fa fa-spinner">Loading ...</i>
	</div>
	<!--
	<table class="table-footer table-left">
		<tr>
			<td>Pengunjung Hari Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">{{ \App\Models\Visitor::stats()->unique_visitors ?? 0 }}</td>
		</tr>
		<tr>
			<td>Pengunjung Kemaren</td><td style="width:30px;text-align:center;">:</td><td class="tdright">{{ \App\Models\Visitor::stats(\App\Enums\VisitorFilterEnum::YESTERDAY)->unique_visitors ?? 0 }}</td>
		</tr>
		<tr>
			<td>Pengunjung Minggu Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">{{ \App\Models\Visitor::stats(\App\Enums\VisitorFilterEnum::THIS_WEEK)->unique_visitors ?? 0 }}</td>
		</tr>
		<tr>
			<td>Pengunjung Bulan Ini</td><td style="width:30px;text-align:center;">:</td><td class="tdright">{{ \App\Models\Visitor::stats(\App\Enums\VisitorFilterEnum::THIS_MONTH)->unique_visitors ?? 0 }}</td>
		</tr>
		<tr>
			<td>Total Pengunjung</td><td style="width:30px;text-align:center;">:</td><td class="tdright">{{ \App\Models\Visitor::countAllVisitors() }}</td>
		</tr>
	</table>
	-->
</div>