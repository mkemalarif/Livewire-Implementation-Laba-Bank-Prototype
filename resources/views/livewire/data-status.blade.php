<table class="table table-bordered text-center" style="table-layout: auto">
    <thead>
        <tr>
            <th>No</th>
            <th>hadir</th>
            <th class="col-2">pemprov</th>
            <th class="col-2">MODAL DISETOR POSISI S/D RUPS 31 MARET 2022 & PERSETUJUAN OJK</th>
            <th class="col-2">Modal Disetor Yang Dibelum Disahkan RUPS & OJK Sampai dengan 30 November 2022</th>
            <th>Jumlah</th>
            <th>Kepemilikan</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php $totalModis= 0;
      $totalModiz = 0;
      $totalJumlah = 0;
      $totalKepemilikan = 0; ?>
        @foreach ($data as $isiData => $isi)
        <tr>
            <td>
                {{ $isi->id }}
            </td>
            <td>
                @if($isActive[$isiData] == false)
                <button class="btn btn-primary" wire:click="toggle({{ $isiData }})">
                    hadir
                </button>
                @elseif($isActive[$isiData] == true)
                <button class="btn btn-secondary" wire:click="toggle({{ $isiData }})">
                    hadir
                </button>
                @endif
            </td>
            <td>{{ $isi->pemprov }}</td>
            <td>
                <?php echo number_format($isi->modis, 0, ','); $totalModis += $isi->modis ?>
            </td>
            <td>
                <?php echo number_format($isi->modiz,0, ','); $totalModiz += $isi->modiz ?>
            </td>
            <td>
                <?php echo number_format($isi->jumlah,0, ','); $totalJumlah += $isi->jumlah ?>
            </td>
            <td>
                @if($isActive[$isiData] == false)
                <?php echo 0; $totalKepemilikan = $totalKepemilikan + 0 ?>%
                @elseif($isActive[$isiData] == true)
                <?php echo $isi->kepemilikan; $totalKepemilikan += $isi->kepemilikan ?>%
                @endif
            </td>

            <td>
                <a href="/data/{{ $isi->id }}/edit" class="btn btn-info">Edit</a>
                <form class="d-inline" action="/data/{{ $isi->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" name="delete">
                        hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td colspan='2'><strong>jumlah</strong></td>
            <td>{{ number_format($totalModis,0,'.') }}</td>
            <td>{{ number_format($totalModiz,0,'.') }}</td>
            <td>{{ number_format($totalJumlah,0,'.') }}</td>
            <td>{{ $totalKepemilikan }}%</td>
            <td><a href="/data/create" class="btn btn-success">Tambah Data</a></td>
        </tr>
    </tbody>
</table>