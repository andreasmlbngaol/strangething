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
            $day = substr($date, 8, 2);
            $year = substr($date, 0, 4);
            return "$day  $month  $year";
        }
        return view('story', [
            'title' => 'Story',
            'andre_detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatibus, officia ex praesentium repellat vel eveniet quae cupiditate atque ipsum omnis neque, laboriosam, repellendus aperiam delectus velit cumque dolore blanditiis illo dolores deleniti sunt quaerat tempora! Id voluptate corporis suscipit, dolores nulla beatae ea nemo fugit earum accusantium cumque quis odit architecto illo fugiat eum. Vel, minima eaque error ad natus libero ipsam repellendus sapiente a officiis, in ipsa dolorum non praesentium! Optio officia pariatur enim labore suscipit nostrum quisquam maiores perferendis repudiandae. Reiciendis ipsa cumque at, mollitia animi ipsum inventore excepturi omnis velit autem in, quisquam et. Error culpa quo repellendus quas asperiores dignissimos et, ducimus, unde quaerat quasi mollitia necessitatibus sequi doloribus officia alias ipsa dolore, iure ex sint eos ullam soluta debitis rerum! Dolor laborum sit magni dicta delectus ab tempore earum saepe soluta aut placeat totam corporis, commodi fugiat aperiam sunt minus rerum explicabo. Culpa, ratione.
            ',
            'lisa_detail' => 'Lorem150',
            'event_title' => 'Introduction',
            'event_date' => formatDate('2022-11-10'),
            'pictures' => $pictures,
        ]);
    });
});

