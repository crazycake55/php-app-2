<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\ParticipantKpop;

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/voting', function () {
    $participants = Participant::all();
    $participantskpop = ParticipantKpop::all();
    return view('voting', ['participants' => $participants, 'participantskpop'=> $participantskpop]);
})->name('voting');

Route::get('/top', function () {
    $participants = Participant::orderBy('votes', 'desc')->get();
    $participantskpop = ParticipantKpop::orderBy('votes', 'desc')->get();
    return view('top', ['participants' => $participants, 'participantskpop'=> $participantskpop]);
})->name('top');

Route::post('/submit-form1', function (Request $request) {
    $participantId = $request->input('option1');
    $participant = Participant::find($participantId);

    if ($participant) {
        $participant->votes += 1;
        $participant->save();
    }

    return redirect('/voting')->with('success', 'Ваш голос успішно зараховано!');
})->name('submit-form1');

Route::post('/submit-form2', function (Request $request) {
    $participantId = $request->input('option2');
    $participant = ParticipantKpop::find($participantId);

    if ($participant) {
        $participant->votes += 1;
        $participant->save();
    }

    return redirect('/voting')->with('success', 'Ваш голос успішно зараховано!');
})->name('submit-form2');
