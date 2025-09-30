
@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto mt-8">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Forgot your password?</h2>
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            @if (session('status'))
                <div class="mb-4 text-success">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered @error('email') input-error @enderror w-full" required autofocus />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="flex items-center justify-end mt-4">
                    <input type="submit" class="btn btn-primary" value="Email Password Reset Link">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
