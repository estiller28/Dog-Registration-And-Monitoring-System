<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
          <div class="mt-5">
              <h1 class="fw-bold">Welcome to Bureau of Animal Industry</h1>
          </div>
        </x-slot>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control form-control-lg" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                <small>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                </small>
            </div>
            <div>
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                    <span class="form-check-label">
                Remember me next time
            </span>
                </label>
            </div>
            <div class="text-left mt-3">
                <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
            </div>

        </form>
    </x-auth-card>


</x-guest-layout>
