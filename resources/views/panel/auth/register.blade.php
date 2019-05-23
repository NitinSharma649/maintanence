@extends('panel.layouts.app')

@section('content')
<div class="md-card" id="login_card">
    <div class="md-card-content large-padding" id="register_form" style="display: none">
        <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
        <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
        <form method="POST" action="{{ route('panel.register') }}">
            @csrf
            <div class="uk-form-row">
                <label for="name">Name</label>
                <input class="md-input @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="uk-form-row">
                <label for="email">E-mail</label>
                <input class="md-input @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"/>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="uk-form-row">
                <label for="password">Password</label>
                <input class="md-input @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" />

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="uk-form-row">
                <label for="password-confirm">Confirm Password</label>
                <input class="md-input" type="password" id="password-confirm" name="password-confirm"  required autocomplete="new-password"/>
            </div>
            
            <div class="uk-margin-medium-top">
                <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</button>
            </div>
        </form>
    </div>
</div>
@endsection