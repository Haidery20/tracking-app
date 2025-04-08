@component('mail::message')
# New Contact Form Submission

A new message has been sent through the KONEKTA contact form:

**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
**Subject:** {{ $data['subject'] }}

**Message:**
{{ $data['message'] }}

@component('mail::button', ['url' => config('app.url')])
Visit Website
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
