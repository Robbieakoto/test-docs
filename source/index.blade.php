@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">Epay Guide</h1>

            <p class="text-lg">Epay is a payment service that makes it easier for African businesses <br class="hidden sm:block">to securely accept online payments (both local and International) 
                <br class="hidden sm:block"> without coding. This contains every information oh how to use Epay easily.</p>

            <div class="flex my-10">
                <a href="/docs/getting-started.md/" title="Gettting started with Epay" class="bg-blue hover:bg-blue-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://epaygh.com/login" title="Read about Epay" class="bg-grey-light hover:bg-grey-dark text-blue-darkest font-normal hover:text-white rounded py-2 px-6">Login to your Account</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">


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
                            </ol>
                    </div>
                </div>

                <div class="md:flex -mx-2 -mx-4">
                        <div class="lg:w-1/3 sm:w-3/3 h-full p-4">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg p-6">
                            <h3 id="intro-mix" class="text-2xl text-blue-dark mb-0">Accept Payment</h3>
                            <p>Accepts payments on your website or mobile app by just creating a payment page.</p>
                            <a href="https://epaygh.com" title="Gettting started with Epay" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded mr-4 py-2 px-6">See more</a>
                        </div>
                    </div>
                        <div class="lg:w-1/3 sm:w-3/3 h-full p-4">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg p-6">
                            <h3 id="intro-mix" class="text-2xl text-blue-dark mb-0">Not a Developer?</h3>
                            <p>If you are not a developer, Epay is still designed for you. You just need to use our extensions.</p>
                            <a href="/docs/getting-started" title="Gettting started with Epay" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded mr-4 py-2 px-6">See more</a>
                
                        </div>
                    </div>
                        <div class="lg:w-1/3 sm:w-3/3 h-full p-4">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg p-6">
                            <h3 id="intro-mix" class="text-2xl text-blue-dark mb-0">API Reference</h3>
                            <p>Check our API documentation and Webhooks guide. How to use and when to choose</p>
                             <a href="/docs/getting-started" title="Gettting started with Epay" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded mr-4 py-2 px-6">See more</a>
                
                        </div>
                    </div>
</div>
</section>
@endsection
