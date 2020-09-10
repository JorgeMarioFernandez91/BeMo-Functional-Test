Hello {{ $email_instance->receiver }},
This is a demo email for testing purposes! Also, it's the HTML version.
 
Demo object values:
 
Demo One: {{ $email_instance->email_instance_one }}
Demo Two: {{ $email_instance->email_instance_two }}
 
Values passed by With method:
 
testVarOne: {{ $testVarOne }}
testVarOne: {{ $testVarOne }}
 
Thank You,
{{ $email_instance->sender }}