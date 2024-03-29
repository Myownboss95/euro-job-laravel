@extends('layouts.back')
@section('title', 'Send Email')
@section('content')
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-md-8 col-sm-12 ms-0 ms-sm-4 ms-sm-0">
                            <div class="compose-content">
                                <form action="{{ route('admin.email.send') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 ">
                                        <select name="recipients[]" id="" class="form-control form-select" multiple>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}" @if(!is_null(old('recipients')) && in_array($user->id,old('recipients')))  @endif>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <input type="text" class="form-control border-dark" placeholder=" Subject" name="subject">
                                    </div>
                                    <div class="mb-3">
                                        <textarea id="email-compose-editor" class=" form-control" rows="15" name="message"
                                            placeholder="Enter text ..."></textarea>
                                    </div>
                                    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchmen(s)</h5>
                                    <input name="attachments[]" type="file" multiple />
                                    <div class="text-start mt-4 mb-3">
                                        <button class="btn btn-primary btn-sl-sm me-2" type="submit"><span class="me-2"><i
                                                    class="fa fa-paper-plane"></i></span>Send</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="reset"><span class="me-2"><i
                                                    class="fa fa-times"></i></span>Discard</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('css')
    <link href="/assets/back/vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <script src="/assets/back/vendor/ckeditor/ckeditor.js"></script> --}}
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="/assets/back/vendor/dropzone/dist/dropzone.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <script>
        $(function() {
            $('select').select2({
                placeholder: "Select User(s)",
                allowClear: true
            })

            CKEDITOR.replace('email-compose-editor');
        })
    </script>
@endpush
