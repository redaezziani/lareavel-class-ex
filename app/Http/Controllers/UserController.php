<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        // Make a GET request to JSONPlaceholder to fetch users
        $response = Http::get('http://localhost:7000/api/manga/chapters/hunter-x-hunter');
        // data is like that : {"title":"One Piece","image":"https://3asq.org/wp-content/uploads/2019/04/00001.jpg","link":"https://3asq.org/manga/one-piece/","lastChapter":"1101 - عزيزتي بوني.","story":"تتمحور القصة حول مغامرات طاقم قراصنة قبعة القش بقيادة مونكي دي لوفي، لكل فرد من أفراد هذا الطاقم هدفٌ يطمح لتحقيقه، أما الهدف الرئيس لقائدهم لوفي هو إيجاد الكنز الأسطوري “ون بيس” وأن يغدو ملك القراصنة.","genre":["3asq","أكشن","خيال","دراما","قوى خارقة","كوميديا","مغامرة"]}

        // Check if the request was successful (status code 2xx)
        if ($response->successful()) {
            // Access the response data as an array
            $chapters = $response->json();


            return view('index', compact('chapters'));

        } else {
            // Handle the case where the request was not successful
            abort($response->status(), 'Failed to fetch anime.');
        }
    }
}
