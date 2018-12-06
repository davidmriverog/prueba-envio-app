<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Passport\Client;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
    public function sendAuthorization(Request $request)
    {
        $client = Client::find(2);

        $request->request->add([
            'grant_type' => 'password',
            'username' => $request->username,
            'password' => $request->password,
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'scope' => '*'
        ]);

        $proxy = Request::create(
            'oauth/token',
            'POST'
        );

        $data = json_decode(Route::dispatch($proxy)->getContent(), TRUE);

        if(isset($data['error']))
            return response()->json([
                'status' => 'failed',
                'message' => ['Invalid Credentials']
            ]);

        $data['status'] = 'success';

        return response()->json($data);
    }
}
