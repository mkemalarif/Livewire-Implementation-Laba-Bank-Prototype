<div>
    <table class="table table-bordered text-center" style="table-layout: auto">
        <thead>
            <tr>
                <th>No</th>
                <th>hadir</th>
                <th class="col-2">pemprov</th>
                <th class="col-2">MODAL DISETOR POSISI S/D RUPS 29 Desember 2022 & PERSETUJUAN OJK</th>
                <th class="col-2">Modal Disetor Yang Dibelum Disahkan RUPS & OJK Sampai dengan 30 April 2023</th>
                <th>Jumlah</th>
                <th>Kepemilikan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $totalJumlah= 0;
            $totalModalOjk = 0;
            $totalModalNonOjk = 0;
            $totalKepemilikan = 0;
            $nomor = 1; 
          ?>
            @foreach ($data as $isiData)
            <tr>
                <td>
                    {{ $nomor++ }}
                </td>
                <td>
                    @if($isiData->kehadiran == 'tidakHadir')
                    <button class="btn btn-primary" wire:click="toggleEdit({{ $isiData->id }})">
                        hadir
                    </button>
                    @elseif($isiData->kehadiran == 'hadir')
                    <button class="btn btn-secondary" wire:click="toggleEdit({{ $isiData->id }})">
                        hadir
                    </button>
                    @endif
                </td>
                <td>{{ $isiData->pemprov }}</td>
                <td>
                    <?php echo number_format($isiData->modalOjk, 0, ','); $totalModalOjk += $isiData->modalOjk ?>
                </td>
                <td>
                    <?php echo number_format($isiData->modalNonOjk,0, ','); $totalModalNonOjk += $isiData->modalNonOjk ?>
                </td>
                <td>
                    <?php echo number_format($isiData->jumlah,0, ','); $totalJumlah += $isiData->jumlah ?>
                </td>
                <td>
                    @if($isiData->kehadiran == 'tidakHadir')
                    <?php echo 0; $totalKepemilikan = $totalKepemilikan + 0 ?>%
                    @elseif($isiData->kehadiran == 'hadir')
                    <?php echo $isiData->kepemilikan; $totalKepemilikan += $isiData->kepemilikan ?>%
                    @endif
                </td>

                <td>
                    <a href="/data/{{ $isiData->id }}/edit" class="btn btn-info">Edit</a>
                    <form class="d-inline" action="/data/{{ $isiData->id }}" method="POST">
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
                <td>{{ number_format($totalModalOjk,0,'.') }}</td>
                <td>{{ number_format($totalModalNonOjk,0,'.') }}</td>
                <td>{{ number_format($totalJumlah,0,'.') }}</td>
                <td>{{ $totalKepemilikan }}%</td>
                <td><a href="/data/create" class="btn btn-success">Tambah Data</a></td>
            </tr>
        </tbody>
    </table>
</div>