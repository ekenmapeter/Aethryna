@component('mail::layout')

{{-- Header --}}
@slot('header')
    {{ config('app.name') }}
@endslot

{{-- Body --}}
# Thank you for registering!

We are excited to have you join our upcoming Skills Co‑op session.

@component('mail::button', ['url' => $eventLink])
View Event Details
@endcomponent

@if(isset($imageUrl))
<img src="{{ $imageUrl }}" alt="Event Banner" style="width:100%; max-width:600px; border-radius:8px; margin-top:20px;" />
@endif

Thanks,<br>
{{ config('app.name') }} Team

@endcomponent
