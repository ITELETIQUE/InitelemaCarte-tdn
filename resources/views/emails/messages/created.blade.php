@component('mail::message')
# Hey adimn

- {{ $name}}
- {{ $email}}

@component('mail::panel')
   {{ $msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
