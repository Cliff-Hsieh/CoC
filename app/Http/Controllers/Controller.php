<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImEwZjgyOTZkLWM3ZWUtNDlmOC05NzY1LTMzOTZhY2M3ZmQxMSIsImlhdCI6MTUwMjE4NDY1Niwic3ViIjoiZGV2ZWxvcGVyLzM1YjQ4M2YyLTNjNTMtZmVkZC0yMDM2LTA0ZjE2MWUwZjdhNiIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjU0LjIwMi4yNS4yNDMiXSwidHlwZSI6ImNsaWVudCJ9XX0.R5UV6ENqHbscqoCsj6XqoU27CP8f95ax_oEqw9ggYcTIYDYdeR8dS1186phDtSDA9Y-h5DNNTGmvJnQ1EbGzNg";

    public function getClan(){
        return view('clan');
    }
    
    public function getPlayer($id){
        $url = "https://api.clashofclans.com/v1/players/". urlencode($id);

        $ch = curl_init($url);

        $headr = array();
        $headr[] = "Accept: application/json";
        $headr[] = "Authorization: Bearer ".$this->token;

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $res = curl_exec($ch);
        $data = json_decode($res, true);
        curl_close($ch);

        return view('player', ['data'=>$data]);
    }
}
