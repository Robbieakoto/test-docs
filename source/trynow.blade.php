@extends('_layouts.master')

@section('body')

<section class="container max-w-2xl mx-auto px-4 py-6 md:py-8 ">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-2">
            <h1 id="Epay Docs">Try Now</h1>

            <h4 class="font-light mt-4">Try Our APIs or Webhooks now.</h4>
                
                <ol>
                    <li>
                        <p><strong class="text-blue-dark">Configure your Webhooks</strong> to receive webhook notifications through the specified endpoint. Example: <strong>https://graph.epaygh.com</strong>
                    </li>
                    <li>
                        <p><strong class="text-blue-dark">Connect your payment page</strong> so you can take payments from your customers directly into your Epay wallet
                    </li>
                </ol>
               
        </div>
    </section>

@endsection