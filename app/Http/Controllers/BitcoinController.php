<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use adman9000\binance\BinanceAPI;// composer-install when api run for install package
class BitcoinController extends Controller
{
    public function index(){
        $api = new BinanceAPI();
        $key = "----"; //put your Binance ApiKey
        $secret = "---"; //put your Binance Api Secret Key
        $api->setAPI($key, $secret);
        $qty="---";//put your order quantity
        $side="---"; //your side for example SELL
        $tradesAndPrices = $api->trade("BNBBTC",$qty,$side);


        return response()->json([
                    "status"=>200,
                    "message"=>"your bitCoin rate and your order",
                    "bitCoin rate" => $tradesAndPrices
                ],200);
            }


}
