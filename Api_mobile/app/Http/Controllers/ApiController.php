<?php

namespace App\Http\Controllers;

use App\Http\Resources\data_latihResource;
use App\Models\data_latih;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alldata = data_latih::all();
        foreach ($alldata as $item) {
            $item->kesimpulan = ($item->kesimpulan == 2) ? 'Tidak Sehat' : 'Sehat';
        }
        return $alldata->toArray();
    }

    public function submitForm(Request $request)
    {
        $ukuranAkar = $request->input('ukuranAkar');
        $warnaAkar = $request->input('warnaAkar');
        $teksturAkar = $request->input('teksturAkar');
        $ukuranBatang = $request->input('ukuranBatang');
        $warnaBatang = $request->input('warnaBatang');
        $teksturBatang = $request->input('teksturBatang');
        $ukuranDaun = $request->input('ukuranDaun');
        $warnaDaun = $request->input('warnaDaun');

        $isiForm = collect([
            'Ukuran Akar' => $ukuranAkar,
            'Warna Akar' => $warnaAkar,
            'Tekstur Akar' => $teksturAkar,
            'Ukuran Batang' => $ukuranBatang,
            'Warna Batang' => $warnaBatang,
            'Tekstur Batang' => $teksturBatang,
            'Ukuran Daun' => $ukuranDaun,
            'Warna Daun' => $warnaDaun,
        ]);

        $kesimpulanSehat = data_latih::where('kesimpulan', 'LIKE', '%1%')->count();
        $kesimpulanTidakSehat = data_latih::where('kesimpulan', 'LIKE', '%2%')->count();

        $ukuranAkar_Proporsional_Sehat = data_latih::where('ukuran_akar', 'like', '%proporsional%')->where('kesimpulan', 'like', '%1%')->count();
        $ukuranAkar_Proporsional_tidakSehat = data_latih::where('ukuran_akar', 'like', '%proporsional%')->where('kesimpulan', 'like', '%2%')->count();
        // =========================================//
        $ukuranAkar_terlalu_kecil_Sehat = data_latih::where('ukuran_akar', 'like', '%terlalu_kecil%')->where('kesimpulan', 'like', '%1%')->count();
        $ukuranAkar_terlalu_kecil_tidakSehat = data_latih::where('ukuran_akar', 'like', '%terlalu_kecil%')->where('kesimpulan', 'like', '%2%')->count();
        // ==========================================//
        $ukuranAkar_membengkak_Sehat = data_latih::where('ukuran_akar', 'like', '%membengkak%')->where('kesimpulan', 'like', '%1%')->count();
        $ukuranAkar_membengkak_tidakSehat = data_latih::where('ukuran_akar', 'like', '%membengkak%')->where('kesimpulan', 'like', '%2%')->count();


        $warnaAkar_krem_Sehat = data_latih::where('warna_akar', 'like', '%krem')->where('kesimpulan', 'like', '%1')->count();
        $warnaAkar_krem_tidakSehat = data_latih::where('warna_akar', 'like', '%krem')->where('kesimpulan', 'like', '%2')->count();
        // ====================================== //
        $warnaAkar_hitam_Sehat = data_latih::where('warna_akar', 'like', '%hitam')->where('kesimpulan', 'like', '%1')->count();
        $warnaAkar_hitam_tidakSehat = data_latih::where('warna_akar', 'like', '%hitam')->where('kesimpulan', 'like', '%2')->count();


        $teksturAkar_kaku_Sehat = data_latih::where('tekstur_akar', 'like', '%kaku')->where('kesimpulan', 'like', '%1')->count();
        $teksturAkar_kaku_tidakSehat = data_latih::where('tekstur_akar', 'like', '%kaku')->where('kesimpulan', 'like', '%2')->count();
        // ========================================= //
        $teksturAkar_lembek_Sehat = data_latih::where('tekstur_akar', 'like', '%lembek')->where('kesimpulan', 'like', '%1')->count();
        $teksturAkar_lembek_tidakSehat = data_latih::where('tekstur_akar', 'like', '%lembek')->where('kesimpulan', 'like', '%2')->count();


        $ukuranBatang_proporsional_Sehat = data_latih::where('ukuran_batang', 'like', '%proporsional')->where('kesimpulan', 'like', '%1')->count();
        $ukuranBatang_proporsional_tidakSehat = data_latih::where('ukuran_batang', 'like', '%proporsional')->where('kesimpulan', 'like', '%2')->count();
        // ========================================= //
        $ukuranBatang_terlaluKecil_Sehat = data_latih::where('ukuran_batang', 'like', '%terlalu_kecil')->where('kesimpulan', 'like', '%1')->count();
        $ukuranBatang_terlaluKecil_tidakSehat = data_latih::where('ukuran_batang', 'like', '%terlalu_kecil')->where('kesimpulan', 'like', '%2')->count();

        $warnaBatang_hijauMuda_Sehat = data_latih::where('warna_batang', 'like', '%hijau_muda')->where('kesimpulan', 'like', '%1')->count();
        $warnaBatang_hijauMuda_tidakSehat = data_latih::where('warna_batang', 'like', '%hijau_muda')->where('kesimpulan', 'like', '%2')->count();
        // ========================================= //
        $warnaBatang_kekuningan_Sehat = data_latih::where('warna_batang', 'like', '%kekuningan')->where('kesimpulan', 'like', '%1')->count();
        $warnaBatang_kekuningan_tidakSehat = data_latih::where('warna_batang', 'like', '%kekuningan')->where('kesimpulan', 'like', '%2')->count();


        $tekstur_kaku_Sehat = data_latih::where('tekstur_batang', 'like', '%kaku')->where('kesimpulan', 'like', '%1')->count();
        $tekstur_kaku_tidakSehat = data_latih::where('tekstur_batang', 'like', '%kaku')->where('kesimpulan', 'like', '%2')->count();
        $tekstur_lembek_Sehat =  data_latih::where('tekstur_batang', 'like', '%lembek')->where('kesimpulan', 'like', '%1')->count();
        $tekstur_lembek_tidakSehat = data_latih::where('tekstur_batang', 'like', '%lembek')->where('kesimpulan', 'like', '%2')->count();


        $ukuranDaun_proporsional_Sehat = data_latih::where('ukuran_daun', 'like', '%proporsional')->where('kesimpulan', 'like', '%1')->count();
        $ukuranDaun_proporsional_tidakSehat = data_latih::where('ukuran_daun', 'like', '%proporsional')->where('kesimpulan', 'like', '%2')->count();
        $ukuranDaun_terlaluKecil_Sehat = data_latih::where('ukuran_daun', 'like', '%terlalu_kecil')->where('kesimpulan', 'like', '%1')->count();
        $ukuranDaun_terlaluKecil_tidakSehat = data_latih::where('ukuran_daun', 'like', '%terlalu_kecil')->where('kesimpulan', 'like', '%2')->count();

        $warnaDaun_hijau_Sehat = data_latih::where('warna_daun', 'like', '%hijau')->where('kesimpulan', 'like', '%1')->count();
        $warnaDaun_hijau_tidakSehat = data_latih::where('warna_daun', 'like', '%hijau')->where('kesimpulan', 'like', '%2')->count();
        $warnaDaun_kekuningan_Sehat = data_latih::where('warna_daun', 'like', '%kekuningan')->where('kesimpulan', 'like', '%1')->count();
        $warnaDaun_kekuningan_tidakSehat = data_latih::where('warna_daun', 'like', '%kekuningan')->where('kesimpulan', 'like', '%2')->count();


        if ($ukuranAkar == 'Proporsional') {
            $UkuranAkar_sehat = $ukuranAkar_Proporsional_Sehat / $kesimpulanSehat;
            $UkuranAkar_Tsehat = $ukuranAkar_Proporsional_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($ukuranAkar == 'Terlalu Kecil') {
            $UkuranAkar_sehat = $ukuranAkar_terlalu_kecil_Sehat / $kesimpulanSehat;
            $UkuranAkar_Tsehat = $ukuranAkar_terlalu_kecil_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($ukuranAkar == 'Membengkak') {
            $UkuranAkar_sehat = $ukuranAkar_membengkak_Sehat / $kesimpulanSehat;
            $UkuranAkar_Tsehat = $ukuranAkar_membengkak_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($warnaAkar == 'Krem') {
            $warnaAkar_sehat = $warnaAkar_krem_Sehat / $kesimpulanSehat;
            $warnaAkar_Tsehat = $warnaAkar_krem_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($warnaAkar == 'Hitam') {
            $warnaAkar_sehat = $warnaAkar_hitam_Sehat / $kesimpulanSehat;
            $warnaAkar_Tsehat = $warnaAkar_hitam_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($teksturAkar == 'Kaku') {
            $teksturAkar_sehat = $teksturAkar_kaku_Sehat / $kesimpulanSehat;
            $teksturAkar_Tsehat = $teksturAkar_kaku_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($teksturAkar == 'Lembek') {
            $teksturAkar_sehat = $teksturAkar_lembek_Sehat / $kesimpulanSehat;
            $teksturAkar_Tsehat = $teksturAkar_lembek_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($ukuranBatang == 'Proporsional') {
            $ukuranBatang_sehat = $ukuranBatang_proporsional_Sehat / $kesimpulanSehat;
            $ukuranBatang_Tsehat = $ukuranBatang_proporsional_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($ukuranBatang == 'Terlalu Kecil') {
            $ukuranBatang_sehat = $ukuranBatang_terlaluKecil_Sehat / $kesimpulanSehat;
            $ukuranBatang_Tsehat =  $ukuranBatang_terlaluKecil_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($warnaBatang == 'Hijau Muda') {
            $warnaBatang_sehat = $warnaBatang_hijauMuda_Sehat / $kesimpulanSehat;
            $warnaBatang_Tsehat = $warnaBatang_hijauMuda_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($warnaBatang == 'Kekuningan') {
            $warnaBatang_sehat = $warnaBatang_kekuningan_Sehat / $kesimpulanSehat;
            $warnaBatang_Tsehat = $warnaBatang_kekuningan_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($teksturBatang == 'Kaku') {
            $teksturBatang_sehat = $tekstur_kaku_Sehat / $kesimpulanSehat;
            $teksturBatang_Tsehat = $tekstur_kaku_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($teksturBatang == 'Lembek') {
            $teksturBatang_sehat = $tekstur_lembek_Sehat / $kesimpulanSehat;
            $teksturBatang_Tsehat = $tekstur_lembek_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($ukuranDaun == 'Proporsional') {
            $ukuranDaun_sehat = $ukuranDaun_proporsional_Sehat / $kesimpulanSehat;
            $ukuranDaun_Tsehat = $ukuranDaun_proporsional_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($ukuranDaun == 'Terlalu Kecil') {
            $ukuranDaun_sehat = $ukuranDaun_terlaluKecil_Sehat / $kesimpulanSehat;
            $ukuranDaun_Tsehat = $ukuranDaun_proporsional_tidakSehat / $kesimpulanTidakSehat;
        }

        // ========================================= //

        if ($warnaDaun == 'Hijau') {
            $warnaDaun_sehat = $warnaDaun_hijau_Sehat / $kesimpulanSehat;
            $warnaDaun_Tsehat = $warnaDaun_hijau_tidakSehat / $kesimpulanTidakSehat;
        } elseif ($warnaDaun == 'Kekuningan') {
            $warnaDaun_sehat = $warnaDaun_kekuningan_Sehat / $kesimpulanSehat;
            $warnaDaun_Tsehat = $warnaDaun_kekuningan_tidakSehat / $kesimpulanTidakSehat;
        }

        $presentase_Sehat = $UkuranAkar_sehat * $warnaAkar_sehat
            * $teksturAkar_sehat * $ukuranBatang_sehat * $warnaBatang_sehat * $teksturBatang_sehat * $ukuranDaun_sehat * $warnaDaun_sehat;

        $presentase_TidakSehat = $UkuranAkar_Tsehat * $warnaAkar_Tsehat * $teksturAkar_Tsehat * $ukuranBatang_Tsehat * $warnaBatang_Tsehat * $teksturBatang_Tsehat * $ukuranDaun_Tsehat * $warnaDaun_Tsehat;

        if ($presentase_Sehat > $presentase_TidakSehat) {
            $kesimpulan = "SEHAT";
        } else {
            $kesimpulan = "TIDAK SEHAT";
        }

        $dataResponse = [
            'inputUser' => $isiForm,
            'TotalSehat' => $kesimpulanSehat,
            'TotalTidakSehat' => $kesimpulanTidakSehat,
            'Presentase sehat' => number_format($presentase_Sehat, 3),
            'Presentase Tidak Sehat' => number_format($presentase_TidakSehat, 3),
            'Kesimpulan' => $kesimpulan
        ];

        return response()->json($dataResponse);
    }
}
