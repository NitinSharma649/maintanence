@extends('panel.layouts.app')

@section('content')

<div class="md-card" id="login_card">
    <div class="md-card-content large-padding" id="login_form">
        <div class="login_heading">
            <div class="user_avatar"></div>
        </div>
        <form method="POST" action="{{ route('panel.login') }}">
            @csrf
            <div class="uk-form-row">
                <label for="email">Email</label>
                <input id="email" type="email" class="md-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="uk-form-row">
                <label for="password">Password</label>
                <input id="password" type="password" class="md-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="uk-margin-medium-top">
                <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</button>
            </div>
            {{--  <div class="uk-margin-top">
                <a href="#" id="login_help_show" class="uk-float-right">Need help?</a>
                <span class="icheck-inline">
                    <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                    <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                </span>
            </div>  --}}
        </form>
    </div>
    {{--  <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
        <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
        <h2 class="heading_b uk-text-success">Can't log in?</h2>
        <p>Here’s the info to get you back in to your account as quickly as possible.</p>
        <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
        <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
    </div>
    <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
        <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
        <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
        <form>
            <div class="uk-form-row">
                <label for="login_email_reset">Your email address</label>
                <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
            </div>
            <div class="uk-margin-medium-top">
                <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
            </div>
        </form>
    </div>
      --}}
</div>
{{--  <div class="uk-margin-top uk-text-center">
    <a href="#" id="signup_form_show">Create an account</a>
</div>  --}}
    
@endsection