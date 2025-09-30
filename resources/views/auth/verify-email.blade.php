
@extends('partials.layout')
@section('title', 'Verify Email')
@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto mt-8">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Verify Email</h2>
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-success">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <input type="submit" class="btn btn-primary" value="Resend Verification Email">
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
