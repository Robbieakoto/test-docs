@extends('_layouts.master')

@section('body')

<section class="container max-w-2xl mx-auto px-4 py-6 md:py-8 ">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-2">
            <h1>Try Now</h1>
<p class="text-lg">Get up and running with our webhook driven service and start your integration. Integrating Epay into your app or website can begin as soon as you <a href="https://epaygh.com/register">Create an Account, </a>requiring only three steps;</p>
<ol>
    <li><strong>Configure your Webhooks</strong> to receive webhook notifications through the specified endpoint. Example: <strong><a href="https://graph.epaygh.com">https://graph.epaygh.com</a></strong></li>
    <li><strong>Connect your payment page</strong> so you can take payments from your customers directly into your Epay wallet.</li>
        <pre>
<code class="language-html"> <strong>HTML</strong>
    &lt;a href="https://epaygh.com/pay/st-event-demo-app" class="btn btn-primary"&gt;pay&lt;/a&gt;
</code>
</pre>
        <li>Receive and Handle Webhook Notifications to confirm payment transactions and fulfill purchases</li><p>
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

</ol>        
        </div>
    </section>

@endsection