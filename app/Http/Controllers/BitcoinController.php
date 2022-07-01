<?php

namespace App\Http\Controllers;

use adman9000\binance\BinanceAPI;// composer-install when api run for install package
class BitcoinController extends Controller
{
    public function index(){
        $api = new BinanceAPI();
        $key = "----"; //put your Binance ApiKey
        $secret = "---"; //put your Binance Api Secret Key
        $api->setAPI($key, $secret);
        $price=$api->getTicker("BNBBTC");

        return response()->json([
                    "status"=>200,
                    "message"=>"your bitCoin rate price",
                    "show all price"=>$price,
                ],200);
            }


}
