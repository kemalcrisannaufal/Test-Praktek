<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index($page = 1)
    {
        $client = new Client();
        $res = $client->get('https://agusdev.sumedangkab.go.id/api/data?page=' . $page);
        $responseBody = $res->getBody()->getContents();
        $data_full = json_decode($responseBody, true);


        $data_all = [];
        for ($i = 1; $i <= ($data_full['total'] / $data_full['per_page']); $i++) {
            $res = $client->get('https://agusdev.sumedangkab.go.id/api/data?page=' . $i);
            $responseBody = $res->getBody()->getContents();
            $data_temp = json_decode($responseBody, true);
            $data_temp2 = $data_all;
            $data_all = array_merge($data_temp2, $data_temp['data']);
        }

        $n_perempuan = 0;
        $n_laki_laki = 0;
        $n_belum_kawin = 0;
        $n_kawin = 0;
        $n_cerai_mati = 0;
        $n_cerai_hidup = 0;
        $n_sd = 0;
        $n_smp = 0;
        $n_sma = 0;
        $n_diploma = 0;
        $n_s1 = 0;
        $n_s2 = 0;
        $n_s3 = 0;
        for ($i = 0; $i < count($data_all); $i++) {
            if ($data_all[$i]['jenis_kelamin'] == 'Laki-laki') {
                $n_laki_laki++;
            } else {
                $n_perempuan++;
            }

            if ($data_all[$i]['status_perkawinan'] == 'Belum Kawin') {
                $n_belum_kawin++;
            } else if ($data_all[$i]['status_perkawinan'] == 'Kawin') {
                $n_kawin++;
            } else if ($data_all[$i]['status_perkawinan'] == 'Cerai Mati') {
                $n_cerai_mati++;
            } else {
                $n_cerai_hidup++;
            }

            if ($data_all[$i]['pendidikan_terakhir'] == 'SD') {
                $n_sd++;
            } else if ($data_all[$i]['pendidikan_terakhir'] == 'SMP') {
                $n_smp++;
            } else if ($data_all[$i]['pendidikan_terakhir'] == 'SMA') {
                $n_sma++;
            } else if ($data_all[$i]['pendidikan_terakhir'] == 'Diploma') {
                $n_diploma++;
            } else if ($data_all[$i]['pendidikan_terakhir'] == 'S1') {
                $n_s1++;
            } else if ($data_all[$i]['pendidikan_terakhir'] == 'S2') {
                $n_s2++;
            } else {
                $n_s3++;
            }
        }


        return view('index', [
            'data' => $data_full,
            'n_laki_laki' => $n_laki_laki,
            'n_perempuan' => $n_perempuan,
            'n_belum_kawin' => $n_belum_kawin,
            'n_kawin' => $n_kawin,
            'n_cerai_mati' => $n_cerai_mati,
            'n_cerai_hidup' => $n_cerai_hidup,
            'n_sd' => $n_sd,
            'n_smp' => $n_smp,
            'n_sma' => $n_sma,
            'n_diploma' => $n_diploma,
            'n_s1' => $n_s1,
            'n_s2' => $n_s2,
            'n_s3' => $n_s3,
        ]);
    }
}
