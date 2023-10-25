<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{
    public function index()
    {
        return view ('gpt.chat')->with('message', '');
    }

    public function sendMessage(Request $request)
    {
        $userMessage = $request->input('message');

        // Make a POST request to GPT-3 API
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/engines/text-davinci-003/completions', [
            'headers' => [
                'Authorization' => 'Bearer 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',
            ],
            'json' => [
                'prompt' => $userMessage,
                'max_tokens' => 50,
            ],
        ]);
        dd($userMessage);

        $data = json_decode($response->getBody());
        $botMessage = $data->choices[0]->text;
        dd($botMessage);

    }
}
