
@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto mt-8">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Confirm Password</h2>
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input id="password" name="password" type="password" placeholder="Password" class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="current-password" />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="flex justify-end mt-4">
                    <input type="submit" class="btn btn-primary" value="Confirm">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
