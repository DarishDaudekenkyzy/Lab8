Hello {{ $demo->receiver }},
This is an email for testing purposes.

Demo object values:

Demo One: {{ $demo->demo_one }}
Demo Two: {{ $demo->demo_two }}

Values passed by this method:

testVarOne: {{ $testVarOne }}
testVarTwo: {{ $testVarTwo }}

Thank you,
{{ $demo->sender }}