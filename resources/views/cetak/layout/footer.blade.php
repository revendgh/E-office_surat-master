        <!-- TTD -->
        <div class="row">
            <div class="col justify-content-end">
                @if($surat->nama_surat == "SP-MMTA")
                <table width="280px" align="right" style="font-size: 90%;">
                @else
                <table width="280px" align="right">
                @endif
                    <tr>
                        <img src="{{public_path().'/storage/ttd_stempel/'.$pejabat->stempel}}" style="z-index: -10; top: -10px; right: 220px; position: absolute;" width="150px" height="150px;"><br>
                        <td style="">
                            @if($pejabat->jabatan == 'Wakil Rektor Akademik')
                            {{ $pejabat->user->wakil_rektor->jabatan }},
                            @else
                            {{ $pejabat->user->unit_kerja->jabatan }} {{ $pejabat->user->unit_kerja->unit }},
                            @endif
                            <br><br><br>
                            <img src="{{public_path().'/storage/ttd_stempel/'.$pejabat->tanda_tangan}}" style="z-index: 1; top: 20px; position: absolute;" height="90px;"><br>
                            {{ $pejabat->user->name }}<p>
                            @if($pejabat->jabatan == 'Wakil Rektor Akademik')
                            NIP {{ $pejabat->user->wakil_rektor->no_induk_pegawai }}
                            @else
                            NIP {{ $pejabat->user->unit_kerja->no_induk_pegawai}}
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- END TTD -->
    </div><br><br>