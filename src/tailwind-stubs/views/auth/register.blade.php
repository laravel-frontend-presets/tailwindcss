@extends('layouts.app')

@section('content')

    <div class="pa4-l">
        <form class="bg-near-white mw6 center pa4 br2-ns ba b--black-10" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <fieldset class="cf bn ma0 pa0">
                <legend class="pa0 f4-ns mb3 black-80">Register</legend>
                <div class="cf">
                    <label class="clip" for="name">Name</label>
                    <input
                        class="f6 f5-l input-reset black-80 bg-white pa3 lh-solid w-100 br2-ns @if ($errors->has('name')) ba b--light-red @else bn @endif"
                        placeholder="Name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        id="name">
                    @if ($errors->has('name'))
                        <p class="light-red f5 mt1">{{ $errors->first('name') }}</p>
                    @endif

                    <label class="clip" for="email">Email Address</label>
                    <input
                        class="f6 mt3 f5-l input-reset black-80 bg-white pa3 lh-solid w-100 br2-ns @if ($errors->has('email')) ba b--light-red @else bn @endif"
                        placeholder="Your Email Address"
                        type="text"
                        name="email"
                        value="{{ old('email') }}"
                        id="email">
                    @if ($errors->has('email'))
                        <p class="light-red f5 mt1">{{ $errors->first('email') }}</p>
                    @endif

                    <input
                        class="f6 f5-l input-reset black-80 bg-white pa3 lh-solid w-100 mt3 br2-ns @if ($errors->has('password'))ba b--light-red @else bn @endif"
                        type="password"
                        name="password"
                        value=""
                        id="password"
                        placeholder="Password">
                    @if ($errors->has('password'))
                        <p class="light-red f5 mt1">{{ $errors->first('password') }}</p>
                    @endif

                    <input
                        class="f6 f5-l input-reset black-80 bg-white pa3 lh-solid w-100 mt3 br2-ns @if ($errors->has('password_confirmation')) ba b--light-red @else bn @endif"
                        type="password"
                        name="password_confirmation"
                        value=""
                        id="password_confirmation"
                        placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                        <p class="light-red f5 mt1">{{ $errors->first('password_confirmation') }}</p>
                    @endif

                    <input
                        class="f6 f5-l button-reset pv3 fr tc bn bg-animate bg-black-70 hover-bg-black white pointer w-100 w-25-m w-20-l br2-ns mt3"
                        type="submit"
                        value="Register">
                </div>
            </fieldset>
        </form>
    </div>
@endsection
