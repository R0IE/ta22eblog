
@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto mt-8">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Reset Password</h2>
            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input id="email" name="email" type="email" placeholder="Email" value="{{ old('email', $request->email) }}" class="input input-bordered @error('email') input-error @enderror w-full" required autofocus autocomplete="username" />
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input id="password" name="password" type="password" placeholder="Password" class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="new-password" />
                    <div class="label">
                        @error('password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Confirm Password</span>
                    </div>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" class="input input-bordered @error('password_confirmation') input-error @enderror w-full" required autocomplete="new-password" />
                    <div class="label">
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="flex items-center justify-end mt-4">
                    <input type="submit" class="btn btn-primary" value="Reset Password">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
