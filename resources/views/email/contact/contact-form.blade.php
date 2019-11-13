@component('mail::message')
#Thank your
   Name:{{$contact['name']}}
   Email:{{$contact['email']}}

    Message
    {{$contact['message']}}
@endcomponent
