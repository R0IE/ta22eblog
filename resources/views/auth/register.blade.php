
@extends('partials.layout')
@section('title', 'Register')
@section('content')
<div class="container mx-auto">
    <div class="card bg-base-300 w-full max-w-md shadow-xl mx-auto mt-8">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Name</span>
                    </div>
                    <input name="name" type="text" placeholder="Name" value="{{ old('name') }}" class="input input-bordered @error('name') input-error @enderror w-full" required autofocus autocomplete="name" />
                    <div class="label">
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <label class="form-control w-full mb-4">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="input input-bordered @error('email') input-error @enderror w-full" required autocomplete="username" />
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
                    <input name="password" type="password" placeholder="Password" class="input input-bordered @error('password') input-error @enderror w-full" required autocomplete="new-password" />
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
                    <input name="password_confirmation" type="password" placeholder="Confirm Password" class="input input-bordered @error('password_confirmation') input-error @enderror w-full" required autocomplete="new-password" />
                    <div class="label">
                        @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="flex justify-between items-center gap-2">
                    <a href="{{ route('login') }}" class="link link-hover">Already registered?</a>
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
