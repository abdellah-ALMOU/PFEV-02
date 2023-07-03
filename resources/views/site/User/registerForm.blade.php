@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
              <span class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Adventure starts here 🚀</h4>
          <p class="mb-4">Make your app management easy and fun!</p>

          <form id="formAuthentication" class="mb-3" action="{{route('store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Last-name</label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Phone</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">logine</label>
              <input type="text" class="form-control" id="logine" name="logine" placeholder="Enter your logine">
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">confirmer password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="confpassword" class="form-control" name="confirmer password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100"  >
              Sign up
            </button>
            <!-- <p class="text-center">
            <a href="{{route('store')}}">
              <span>kalwa</span>
            </a>
          </p> -->
          </form>

          <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{route('loginForm')}}">
              <span>Sign in instead</span>
            </a>
          </p>
          
        </div>
      </div>
    </div>
    <!-- Register Card -->
  </div>
</div>
</div>
@endsection
<script>

document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('formAuthentication');
  const passwordField = document.getElementById('password');
  const confirmPasswordField = document.getElementById('confirmPassword');

  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche la soumission du formulaire par défaut

    // Réinitialisation des messages d'erreur
    resetErrorMessages();

    // Vérification des champs obligatoires
    const username = document.getElementById('username').value.trim();
    const lastname = document.getElementById('lastname').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const email = document.getElementById('email').value.trim();
    const logine = document.getElementById('logine').value.trim();
    const termsConditions = document.getElementById('terms-conditions').checked;

    if (username === '') {
      displayErrorMessage('username', 'Veuillez entrer votre nom d\'utilisateur.');
    }

    if (lastname === '') {
      displayErrorMessage('lastname', 'Veuillez entrer votre nom de famille.');
    }

    if (phone === '') {
      displayErrorMessage('phone', 'Veuillez entrer votre numéro de téléphone.');
    }

    if (email === '') {
      displayErrorMessage('email', 'Veuillez entrer votre adresse e-mail.');
    }

    if (logine === '') {
      displayErrorMessage('logine', 'Veuillez entrer votre logine.');
    }

    if (!termsConditions) {
      displayErrorMessage('terms-conditions', 'Veuillez accepter les conditions d\'utilisation.');
    }

    // Vérification du mot de passe
    const password = passwordField.value.trim();
    const confirmPassword = confirmPasswordField.value.trim();

    if (password === '') {
      displayErrorMessage('password', 'Veuillez entrer un mot de passe.');
    }

    if (password !== confirmPassword) {
      displayErrorMessage('confirmPassword', 'Les mots de passe ne correspondent pas.');
    }

    // Soumission du formulaire si toutes les vérifications sont réussies
    if (document.querySelectorAll('.error-message').length === 0) {
      form.submit();
    }
  });

  function displayErrorMessage(fieldId, errorMessage) {
    const field = document.getElementById(fieldId);
    const errorElement = document.createElement('div');
    errorElement.classList.add('error-message');
    errorElement.textContent = errorMessage;
    field.parentNode.appendChild(errorElement);
  }

  function resetErrorMessages() {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function(errorMessage) {
      errorMessage.parentNode.removeChild(errorMessage);
    });
  }
});
</script>