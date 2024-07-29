<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller


{
    public function index(){
        return view('home',[
            'title' => 'Home'
        ]);
    }




    public function whatsapp(Request $request)
    {
        // Nomor telepon tujuan (gunakan format internasional tanpa tanda plus)
        $phoneNumber = '6289637326416';
        // Pesan yang akan dikirim
        $message = 'Halo, Kak saya mau konsultasi undangan digital 😊🙏';

        // Buat URL WhatsApp API
        $whatsappUrl = "https://api.whatsapp.com/send?phone={$phoneNumber}&text=" . urlencode($message);

        // Redirect ke URL WhatsApp API
        return redirect()->away($whatsappUrl);
    }
}

