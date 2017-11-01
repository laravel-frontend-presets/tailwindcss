@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            <div class="rounded shadow">
                <div class="font-bold text-lg bg-grey-light p-3 rounded rounded-t">
                    Login
                </div>
                <div class="bg-white p-3 rounded rounded-b">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="flex items-stretch mb-3">
                            <label for="email" class="font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">E-Mail Address</label>
                            <div class="flex flex-col w-3/4">
                                <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" autofocus>
                                {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                            </div>
                        </div>

                        <div class="flex items-stretch mb-3">
                            <label for="password" class="font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Password</label>
                            <div class="flex flex-col w-3/4">
                                <input id="password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password">
                                {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                            </div>
                        </div>

                        <div class="flex mb-3">
                            <label class="w-3/4 ml-auto">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="text-sm text-grey-dark"> Remember Me</span>
                            </label>
                        </div>

                        <div class="flex">
                            <div class="w-3/4 ml-auto">
                                <button type="submit" class="bg-blue hover:bg-blue-dark text-white text-sm font-sembiold py-2 px-4 rounded mr-3">
                                    Login
                                </button>
                                <a class="no-underline hover:underline text-blue-dark text-sm" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
