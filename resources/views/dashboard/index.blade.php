@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Left Side Form -->
        <div class="lg:col-span-2">
            @include('generator.form')

            @if(session('titles'))
                @include('generator.result', ['titles' => session('titles')])
            @endif
        </div>

        <!-- Right Side History -->
        <div class="lg:col-span-1">
            @include('generator.history')
        </div>

    </div>

</div>

@endsection