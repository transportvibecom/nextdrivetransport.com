<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CallbackController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'phone' => 'required',
            'requestInput' => 'required',
            'comment' => 'nullable',
        ]);

        $idChannel = '-1001593765725';
        $botToken = '5779836659:AAHzpYx5FL2z8eDOb3hPzFdrAvBPIUU-83E';
//        $idChannel = '-1001968757076';
//        $botToken = '5603692865:AAGCrcGKd_wi7ljlrL79Apc_STSitwLKJE0';

        $body = "Full Name: {$request->name}\n";
        $body .= "Phone Number: {$request->phone}\n";
        $body .= "Email: {$request->email}\n";
        $body .= "Request: {$request->requestInput}\n";
        $body .= "Comment: {$request->comment}\n";
        $body = urlencode($body);
        try {
            file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$idChannel&text=".$body);
        }
        catch (\Exception $e){

        }
    }

    public function sendForm(Request $request){
//        dd($request->all());
        $request->validate([
            'typeCar' => 'required',
            'originalLocation' => 'required',
            'destinationLocation' => 'required',
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'estimated_ship_date' => 'required',
            'name' => 'required',
            'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'number' => 'required',
            'transportType' => 'nullable',
        ]);

        $idChannel = '-1001593765725';
        $botToken = '5779836659:AAHzpYx5FL2z8eDOb3hPzFdrAvBPIUU-83E';

//        $idChannel = '-1001968757076';
//        $botToken = '5603692865:AAGCrcGKd_wi7ljlrL79Apc_STSitwLKJE0';

        $body = "Full Name: {$request->name}\n";
        $body .= "Phone Number: {$request->number}\n";
        $body .= "Email: {$request->email}\n";
        $body .= "Type car: {$request->typeCar}\n";
        $body .= "Pick up: {$request->originalLocation}\n";
        $body .= "Delivery: {$request->destinationLocation}\n";
        $body .= "Year: {$request->year}\n";
        $body .= "Make: {$request->make}\n";
        $body .= "Model: {$request->model}\n";
        $body .= "Transport type: {$request->transportType}\n";
        $body .= "Date: {$request->estimated_ship_date}\n";
        $body = urlencode($body);
        try {
            file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$idChannel&text=".$body);

//            $randomString = Str::random(8);
//            $url = "https://telegram.safeeds.us/api/post-quote/broadway";
//            $response = Http::withHeaders([
//                'Content-Type' => 'application/json',
//            ])
//                ->post($url, [
//                    "ship_via_id" => "$randomString",
//                    "dropoff_city" => "$request->dropoff_city",
//                    "dropoff_state" => "$request->dropoff_state",
//                    "dropoff_zip" => "$request->dropoff_zip",
//                    "pickup_city" => "$request->pickup_city",
//                    "pickup_state" => "$request->pickup_state",
//                    "pickup_zip" => "$request->pickup_zip",
//                    "vehicles" => [["year" => $request->year, "make" => "$request->make", "model" => "$request->model", "type" => "$request->typeCar"]],
//                    "first_name" => "$request->name",
//                    "email" => "$request->email",
//                    "phone" => "$request->number",
//                    "estimated_ship_date" => "$request->estimated_ship_date",
//                    "" => "$request->transportType"
//                ]);
        }
        catch (\Exception $e){

        }
        return redirect()->back();
    }
}
