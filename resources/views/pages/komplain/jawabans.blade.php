@foreach ($jawabans as $jawab)
    <div class="jawaban mt5 brd-radius5">
        <div class="media-left"></div>
        <div class="media-body">
            @if ($jawab->penjawab == 'Admin')
                <p style="font-weight:bold;">Dijawab oleh: {{ $jawab->penjawab }}</p>
            @elseif($jawab->penjawab == $jawab->komplain->nik)
                <p style="font-weight:bold;">Dikomentari oleh: Pelapor</p>
            @else
                <p style="font-weight:bold;">Dikomentari oleh: {{ $jawab->penjawab_komplain->nama }}</p>
            @endif
            <p style="border-left:var(--color2) 2px solid;padding:0 0 0 5px;">{{ $jawab->jawaban }}</p>

            <div class="pull-right">
                <div class="control-group">
                    @php $user = auth()->user(); @endphp
                    @if (isset($user) && $user->can('access.admin_komplain') && $jawab->penjawab == 'Admin' && $komplain->status != 'SELESAI')
                        <a id="btn-ubah-reply-admin" data-href="{{ route('admin-komplain.getkomentar', $jawab->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> Ubah Jawaban</a>

                        {!! Html::form('DELETE', route('admin-komplain.deletekomentar', $jawab->id))->style('display:inline')->open() !!}
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data tersebut?')"><i class="fa fa-trash margin-r-5"></i> Hapus
                        </button>
                        {!! Html::form()->close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
