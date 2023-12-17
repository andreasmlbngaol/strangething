<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'viewport.check'], function () {
    Route::get('/', function () {
        return view('welcome', [
            'title' => 'Home',
        ]);
    });
    Route::get('/story', function () {
        $pictures = ["palette 1.png", "palette 2.png", "palette 3.png", "palette 4.png"];
        $andre_detail = 'Ini awal mula kita yang sebenarnya. bermula dari "Happy new year😂" semuanya. Pas banget ya u chatnya jam 00.00.;
        Disini aku bilang liat u di Psi yang dadah dadah itu. Ternyata itu sebelum kita kenalan dengan benar ya wkwk. Aku dah sedari awal ngatain u wibu ternyata ya.;
        Ternyata aku di sini yang manjangin ya, pake nanya asal lagi wkwkwkwkwkwk. Tapi di bohongin aku hmm, dibilang orang Medan no fek fek, tapi fek. Walau dibenerin sih akhirnya gimana.;
        Apa sih aku di zaman ini ih jomblo akut ini pasti dah berapa lama aku gak dekat cewek ini heh.;
        Disini jokes kita nyambung banget ya dulu.;
        Dengan bodohnya manusia penuh kekurangan ini ingin mengakhiri chat di sini. Lanjut Andre tolol ih, bego beut.;
        Hati siapa yang u sudah dapat kan di jam 01.04 ini ha?;
        Eheh malah perang sticker pulak 2 ini, padahal aku mau berangkat ke Medan besoknya, naik motor 💀;
        Malah betulan lanjut bah 2 sejoli ini gak ngerti lagi aku. Malah ngomongin orang gila hadeuh;
        Apa apaan ini jam 01.39 dah di sayang sayang i aku, buaya eh paus biru.;
        Sangat membanggakan Psikologinya dia bah.;
        02.06 Ngajak call langsung, boleh gitu emang?;
        03.09 Disini bahkan u sampe kasih tau tempat mu dimana bah.;
        03.30 Keknya ada masalah sama gender sebelumnya ini sampe ngomong gini dan sampe ambil topik kesgen;
        03.35 aku udah tercandu candu nih sekarang gimana dong?;
        03.55 Siap chat dengan Gnite dan bubayy.';
        $andre_detail = str_replace(';', '</p><p class="mb-1">', $andre_detail);
        function formatDate($date) {
            $month_str = substr($date, 5, 2);
            switch ($month_str) {
                case '01': $month = 'Januari'; break;
                case '02': $month = 'Februari'; break;
                case '03': $month = 'Maret'; break;
                case '04': $month = 'April'; break;
                case '05': $month = 'Mei'; break;
                case '06': $month = 'Juni'; break;
                case '07': $month = 'Juli'; break;
                case '08': $month = 'Agustus'; break;
                case '09': $month = 'September'; break;
                case '10': $month = 'Oktober'; break;
                case '11': $month = 'November'; break;
                case '12': $month = 'Desember'; break;
            }
            $day = (string) ((int) substr($date, 8, 2));
            $year = substr($date, 0, 4);
            return "$day  $month  $year";
        }
        return view('story', [
            'title' => 'Story',
            'andre_detail' => $andre_detail,
            'lisa_detail' => '',
            'event_title' => 'Introduction Part 2',
            'event_date' => formatDate('2023-01-01'),
            'pictures' => $pictures,
        ]);
    });
});

