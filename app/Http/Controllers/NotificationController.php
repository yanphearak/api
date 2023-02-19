<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendTelegram(){
//         $text ="
// Hello Phearak !
// Someone view you website ! 😍
// ";
//     $ch = curl_init('https://api.telegram.org/bot5676377823:AAH_5s2_TZc0brGXlaDk8jNE1wQ7KeGabas/sendMessage?chat_id=1066327005&text='.urlencode($text));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);
//     curl_close($ch);

        return response()->json([
            "message"=>"Alert message to owner successfully"
        ]);
    }

    public function sendFeedBack(Request $request){

        $name   = $request->name;
        $email  = $request->email;
        $phone  = $request->phone;
        $address= $request->address;
        $des    = $request->des;
        if($name == "" || $email == "" || $phone == "" || $address == "" || $des == ""){
            return response()->json([
                "message" => "Please Input All Field"
            ]);
        }

        $date = Carbon::now()->format('Y-m-d');

                $text ="
Hello Phearak !
Someone send you the feedback ! 😍

===================================

Date              : $date
Name            : $name
Email             : yanphearak@gmail.com
Phone           : $email
Address        : $address
Description : $des
        ";
            $ch = curl_init('https://api.telegram.org/bot5676377823:AAH_5s2_TZc0brGXlaDk8jNE1wQ7KeGabas/sendMessage?chat_id=1066327005&text='.urlencode($text));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

        return response()->json([
            "message" => "Alert message to owner successfully",
        ]);
    }
}
