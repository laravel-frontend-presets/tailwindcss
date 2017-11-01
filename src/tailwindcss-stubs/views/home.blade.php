@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-brand-darker bg-brand-lighter p-3 rounded rounded-t">
                Dashboard
            </div>
            <div class="bg-white p-3 rounded rounded-b">
                @if (session('status'))
                    <div class="bg-green-lightest border border-green-light text-green-dark text-sm px-4 py-3 rounded mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="text-grey-dark text-sm">
                    You are logged in!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
