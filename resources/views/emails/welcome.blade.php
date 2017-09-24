
@component('mail::panel')
This is the panel content. {{ $name }}
@endcomponent

@component('mail::message')
# Order Shipped

Your order has been shipped!


@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

@component('mail::button', ['url' => 'https://g.cn', 'color' => 'green'])
View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent