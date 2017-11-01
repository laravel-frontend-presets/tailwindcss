@extends('layouts.app')

@section('content')
    <div class="pa4-l">
        @if (session('status'))
            <div class="mw6 center mb3 flex items-center justify-center pa4 bg-light-green navy">
                <svg class="w1" data-icon="info" viewBox="0 0 32 32" style="fill:currentcolor">
                    <title>info icon</title>
                    <path d="M16 0 A16 16 0 0 1 16 32 A16 16 0 0 1 16 0 M19 15 L13 15 L13 26 L19 26 z M16 6 A3 3 0 0 0 16 12 A3 3 0 0 0 16 6"></path>
                </svg>
                <span class="lh-title ml3">{{ session('status') }}</span>
            </div>
        @endif

        <form class="bg-near-white mw6 center pa4 br2-ns ba b--black-10" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <fieldset class="cf bn ma0 pa0">
                <legend class="pa0 f4-ns mb3 black-80">Reset Password</legend>
                <div class="cf">
                    <label class="clip" for="email">E-Mail Address</label>
                    <input
                        class="f6 f5-l input-reset black-80 bg-white pa3 lh-solid w-100 br2-ns @if ($errors->has('email')) ba b--light-red @else bn @endif"
                        placeholder="Your Email Address"
                        type="text"
                        name="email"
                        value="{{ old('email') }}"
                        id="email">
                    @if ($errors->has('email'))
                        <p class="light-red f5 mt1">{{ $errors->first('email') }}</p>
                    @endif

                    <input
                        class="f6 f5-l button-reset pv3 fr tc bn bg-animate bg-black-70 hover-bg-black white pointer w-100 w-100-m w-50-l br2-ns mt3"
                        type="submit"
                        value="Send Password Reset Link">
                </div>
            </fieldset>
        </form>
    </div>
@endsection
