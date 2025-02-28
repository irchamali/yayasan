<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Client;
use CodeIgniter\Controller;

class PrayerTimesController extends Controller
{
    public function index()
    {
        // Daftar kota yang tersedia
        $cities = ['Jakarta', 'Bogor', 'Depok', 'Tangerang', 'Bekasi'];

        // Ambil kota dari request, default ke Jakarta
        $city = $this->request->getGet('city') ?? 'Jakarta';

        // API URL dengan kota yang dipilih
        $apiUrl = "https://api.aladhan.com/v1/timingsByCity?city={$city}&country=Indonesia&method=2";

        // Menggunakan cURLRequest untuk mengambil data dari API
        $client = service('curlrequest');
        $response = $client->get($apiUrl);

        // Decode JSON response
        $data = json_decode($response->getBody(), true);

        // Kirim data ke view
        return view('prayer_times', [
            'prayerTimes' => $data,
            'cities' => $cities,
            'selectedCity' => $city
        ]);
    }
}
