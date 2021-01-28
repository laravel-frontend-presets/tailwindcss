@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:max-w-3xl sm:mt-10">
        <div class="flex">
            <div class="w-full">

                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Verify Your Email Address') }}
                    </header>

                    <div class="w-full flex flex-wrap text-gray-700 leading-normal text-sm p-6 sm:text-base">
                        @if (session('resent'))
                            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                                 role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class="mb-3">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                        </p>

                        {{ __('If you did not receive the email') }},

                        <form method="POST" action="{{ route('verification.send') }}" class="inline-block ml-1">
                            @csrf
                            <button type="submit"
                                    class="inline-block text-blue-500 hover:text-blue-700 no-underline hover:underline cursor-pointer border-0 bg-transparent">
                                {{ __('click here to request another') }}
                            </button>.
                        </form>
                    </div>

                </section>
            </div>
        </div>
    </main>
@endsection
