@extends('layouts.app')

@section('content')
    <div class="w3-content">
        <!-- Contact Section -->
        <div class="w3-container w3-padding-32" id="contact">
            <h1 class="w3-border-bottom w3-border-light-grey w3-padding-32">تسجيل الدخول</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p>
                    <input id="email" type="email" class="w3-input w3-section w3-border" name="email"
                        value="m.m@sael.com" required autocomplete="email" autofocus>
                </p>
                @error('email')
                    <span class="w3-txet-red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <p>
                    <input id="password" type="password" class="w3-input w3-section w3-border" name="password"
                        value="password" required autocomplete="password" autofocus>
                </p>
                @error('password')
                    <span class="w3-txet-red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <p>
                    <input class="w3-check" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        تذكرني
                    </label>
                </p>
                <p>
                    @if (Route::has('password.request'))
                        <a class="w3-bar-item" href="{{ route('password.request') }}">
                            هل نسيت كلمة المرور
                        </a>
                    @endif
                </p>
                <button class="w3-button w3-black w3-section" type="submit">
                    تسجيل الدخول
                </button>
            </form>
        </div>
    </div>
@endsection
