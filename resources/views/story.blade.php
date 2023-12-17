@extends('layouts.stories')
@section('header')
    <div class="text-center pt-1" style="height: 12vh">
        <h1 class="text-decoration-underline mb-0">{{ $event_title }}</h1>
        <div class="d-flex justify-content-center align-items-center">
            <a href="" class="btn btn-custom-1 mx-4">Prev</a>
            <h5><i>{{ $event_date }}</i></h5>
            <a href="" class="btn btn-custom-2 mx-4">Next</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="px-3 m-0" style="max-height: 44vh">
        <div class="row justify-content-center">
            <div class="col-2 px-3 my-3 overflow-y-auto scroll-custom" style="width: 50%; max-height: 40vh">
                <div class="border rounded bg-content-andre p-2">
                    <h5 class="mb-2 text-decoration-underline">Komentar Andre:</h5>
                    <div class="text-dark ms-3 me-1 mb-0 pb-0">
                        <p class="mb-1">{!! $andre_detail !!}</p>
                    </div>
                </div>
            </div>
            {{-- @if ($lisa_detail) --}}
            <div class="col-2 px-3 my-3 overflow-y-auto scroll-custom text-light" style="width: 50%; max-height: 40vh">
                <div class="border rounded bg-content-lisa p-2">
                    <h5 class="mb-2 text-decoration-underline">Komentar Lisa:</h5>
                    <p class="text-light ms-3 me-1">{{ $lisa_detail }}</p>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </div>
@endsection

@section('picture')
    <div class="bg-pictures text-centerp-1 m-0 rounded d-flex overflow-x-auto align-items-center" style="height: 42vh; width: 100%">
        @foreach ($pictures as $picture)
        <div class="col-2 px-2 my-2" style="width: 30%; height: 90%;">
            <div class="border rounded bg-picture p-2 d-flex justify-content-center picture">
                <a href="{{ asset("palette/$picture") }}" target="_blank">
                    <img src="{{ asset("palette/$picture") }}" alt="" style="max-height: 34vh; max-width: 22vw">
                </a>
            </div>
        </div>
        @endforeach
        <div class="col-2 px-2 my-2" style="width: 30%; height: 90%;">
            <div class="border rounded bg-picture p-2 d-flex justify-content-center">
                <a href="">
                    <box-icon name='plus-circle' size="lg" animation="tada-hover" style="height: 34vh"></box-icon>
                </a>
            </div>
        </div>
    </div>
@endsection