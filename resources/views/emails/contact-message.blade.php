@component('mail::message')
# New Contact Message

A new contact message has been received from {{ $message->name }}.

**Details:**
- **Name:** {{ $message->name }}
- **Email:** {{ $message->email }}
- **Phone:** {{ $message->phone }}
- **Service:** {{ $message->service }}
- **Message:** {{ $message->message }}

@component('mail::button', ['url' => config('app.url') . '/admin/contacts'])
View Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
