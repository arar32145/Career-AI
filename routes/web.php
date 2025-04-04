<?php

use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/openai', function () {

    $result = OpenAI::chat()->create([
        'model' => 'gpt-4o-mini-tts',
        'messages' => [
            ['role' => 'user', 'content' => 'Hello!'],
        ],
    ]);
    
    echo $result->choices[0]->message->content; // Hello! How can I assist you today?
});