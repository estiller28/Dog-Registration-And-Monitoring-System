<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control form-control-lg" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control form-control-lg" type="password" name="password" value="{{ old('password') }}" placeholder="Enter your password" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control form-control-lg" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm your password" />
            </div>

            <div class="text-left mt-3">
                <button type="submit" class="btn btn-lg btn-primary">Reset Password</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
