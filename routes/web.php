<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\Admin;
use App\Http\Controllers\QuestionsController;


Route::get('/', function(){return view('questionsCRUD.login');});
Route::post('/', [AdminController::class,'index'])->name('admin.login');

Route::get('/openai', function () {

    $result = OpenAI::chat()->create([
        'model' => 'gpt-4o-mini-tts',
        'messages' => [
            ['role' => 'user', 'content' => 'Hello!'],
        ],
    ]);
    
    echo $result->choices[0]->message->content; // Hello! How can I assist you today?
});