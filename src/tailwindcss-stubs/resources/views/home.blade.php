@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 px-6">
    <div class="w-full">

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                {{ __('Dashboard') }}
            </header>

            <div class="w-full p-6">
                @if (session('status'))
                    <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="text-gray-700">
                    {{ __('You are logged in!') }}
                </p>
            </div>
        </section>
    </div>
</main>
@endsection
