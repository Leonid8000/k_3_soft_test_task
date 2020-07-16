@component('mail::message')
# Email Confirmation

To complete the registration follow the link:

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
Verify Email
@endcomponent

@endcomponent
