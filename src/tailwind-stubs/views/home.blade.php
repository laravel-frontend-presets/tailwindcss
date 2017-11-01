@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="mw6 center mb3 flex items-center justify-center pa4 bg-light-green navy">
            <svg class="w1" data-icon="info" viewBox="0 0 32 32" style="fill:currentcolor">
                <title>info icon</title>
                <path d="M16 0 A16 16 0 0 1 16 32 A16 16 0 0 1 16 0 M19 15 L13 15 L13 26 L19 26 z M16 6 A3 3 0 0 0 16 12 A3 3 0 0 0 16 6"></path>
            </svg>
            <span class="lh-title ml3">{{ session('status') }}</span>
        </div>
    @endif
    <div class="mw5 center bg-white br3 pa3 pa4-ns mv3 ba b--black-10">
        <div class="tc">
            <h1 class="f4">Dashboard</h1>
            <hr class="mw3 bb bw1 b--black-10">
        </div>
        <p class="lh-copy measure dt center f5 black-70">
            You are logged in!
        </p>
    </div>
@endsection
