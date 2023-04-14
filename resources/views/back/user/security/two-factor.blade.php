@extends('layouts.back')
@section('title', 'Security Question')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head ">
            <h2 class="mb-3 me-auto">@yield('title')</h2>
        </div>
        <div class="row">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.security.two-factor.change') }}" method="post"
                            enctype="multipart/form-data" class="row p-5">
                            @csrf
                            <div class="col-12">
                                <h4>Status</h4>
                                <div class="form-group">
                                    <select name="two_factor" id="two_factor" class="form-select">
                                        <option value="active" @if(auth('user')->user()->two_factor == 'active') selected @endif>Enable</option>
                                        <option value="inactive" @if(auth('user')->user()->two_factor == 'inactive') selected @endif>Disable</option>
                                    </select>
                                    <x-error key="question_one" />
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>Questions</h4>
                                <div class="form-group">
                                    <input type="text" id="question_one" name="question_one" class="form-control"
                                        placeholder="Question One" value="{{ $question[0]->question ?? '' }}">
                                    <x-error key="question_one" />
                                </div>

                                <div class="form-group">
                                    <input type="text" id="question_two" name="question_two" class="form-control"
                                        placeholder="Question Two" value="{{ $question[1]->question ?? '' }}">
                                    <x-error key="question_two" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="question_three" name="question_three" class="form-control"
                                        placeholder="Question Three" value="{{ $question[2]->question ?? '' }}">
                                    <x-error key="question_three" />
                                </div>

                            </div>
                            <div class="col-6">
                                <h4>Answers</h4>
                                <div class="form-group">
                                    <input type="text" id="answer_one" name="answer_one" class="form-control"
                                        placeholder="Answer One" value="{{ $question[0]->answer ?? '' }}">
                                    <x-error key="answer_one" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="answer_two" name="answer_two" class="form-control"
                                        placeholder="Answer Two" value="{{ $question[1]->answer ?? '' }}">
                                    <x-error key="answer_two" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="answer_three" name="answer_three" class="form-control"
                                        placeholder="Answer Three" value="{{ $question[2]->answer ?? '' }}">
                                    <x-error key="answer_three" />
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success mt-3">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
