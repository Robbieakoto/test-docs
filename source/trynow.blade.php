@extends('_layouts.master')

@section('body')
<div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
    <div class="mt-8">
        <h3>Try Now</h3>
        <p class="text-lg">Get up and running with our webhook driven service and start your integration. Integrating Epay into your app or website can begin as soon as you <a href="https://epaygh.com/register">Create an Account, </a>requiring only three steps;</p>
                <ol>
                <li ><strong class="text-blue-dark">Configure your Webhook</strong> to receive webhook notifications through the specified <a href="https://epaygh.com/settings">endpoint</a>. Example:<strong> https://graph.epaygh.com/</strong> </li>
                <li><strong class="text-blue-dark">Connect your payment page</strong></li>
<pre>
<code class="language-html"> <strong>HTML</strong>
&lt;a href="https://epaygh.com/pay/st-event-demo-app" class="btn btn-primary"&gt;pay&lt;/a&gt;
</code>
</pre>
<li><strong class="text-blue-dark">Receive and Handle Webhook Notifications</strong> to confirm payment transactions and fulfill purchases</li><p>
<pre>
<code class="language-json">
<strong>JSON</strong>
{
"success": true,
"transaction": {
"reference": "EP-XSks6NGSvtd",
"payment_method": "momo",
"amount": "1",
"status": "success",
"description": "Payment for sample event",
"customer": {
"name": "sam",
"email": "sam@gmail.com",
"telephone": "054********"
},
"page": {
"id": 73,
"name": "Event Demo App",
"description": "A demo payment page ",
"slug": "st-event-demo-app"
}
}
}
</code>
</pre>

@endsection