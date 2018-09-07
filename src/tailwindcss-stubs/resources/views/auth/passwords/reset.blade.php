@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-teal-darker bg-teal p-3 rounded-t">
                {{ __('Reset Password') }}
            </div>
            <div class="bg-white p-3 rounded-b">
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="flex items-stretch mb-3">
                        <label for="email" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">{{ __('E-Mail Address') }}</label>
                        <div class="flex flex-col w-3/4">
                            <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
                            {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex items-stretch mb-3">
                        <label for="password" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">{{ __('Password') }}</label>
                        <div class="flex flex-col w-3/4">
                            <input id="password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                            {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex items-stretch mb-3">
                        <label for="password_confirmation" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">{{ __('Confirm Password') }}</label>
                        <div class="flex flex-col w-3/4">
                            <input id="password_confirmation" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password_confirmation') ? 'border-red-dark' : 'border-grey-light' }}" name="password_confirmation" required>
                            {!! $errors->first('password_confirmation', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-3/4 ml-auto">
                            <button type="submit" class="bg-teal hover:bg-teal-dark text-white text-sm font-semibold py-2 px-4 rounded mr-3">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
