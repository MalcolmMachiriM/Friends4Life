@component('mail::message')
# New Customer:

Here are the details submitted via the Get Quote form:

- **Full Name:** {{ $formData['full_name'] }}
- **Email:** {{ $formData['email'] }}
- **Selected Insurance:** {{ $formData['selectedInsurance'] }}
- **Limits of Balance:** ${{ $formData['limitbal'] }}


Thanks,<br>
Friends 4 Life Website

@endcomponent
