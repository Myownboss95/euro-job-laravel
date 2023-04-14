@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<h4 class="text-center mb-4">Sign in your account</h4>
<p class="text-center">To keep your account form unauthorized access, please answer at least one question below to proceed to your account.</p>
<form action="{{ url('/two-factor-challenge') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="mb-1"><strong>Question</strong></label>
        <select name="question" id="question" class="form-select form-select-lg" style="font-size: 12px">
            <option value="">Choose a question</option>
            @foreach ($questions as $question)
            <option value="{{$question->id}}">{{$question->question}}</option>
            @endforeach
        </select>
        <x-error key="question" />
    </div>

    <div class="mb-3">
        <label class="mb-1"><strong>Answer</strong></label>
        <input type="text" class="form-control" placeholder="Answer" name="answer">
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary btn-block">Continue</button>
    </div>
</form>
@endsection
