@component('mail::message')
# Introduction

The body of your message.

- The first line
- The Second Line
- New Line

## Code 

**New Code**

> Some php Code

```
function test(){
	echo time();
}
```
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
