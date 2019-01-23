@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="Epay Docs">Epay Docs</h1>

            <h4 class="font-light mt-4">Accept and disburse Bank, Card and Mobile Money payments</h4>
            <p class="text-md">Welcome to Epay! Accept payments Securely, Globally and Instantly. <br class="hidden sm:block"> Get familiar with Epay and explore our features.
                <br class="hidden sm:block">If you have any questions or comments, feel free to get to us by mail <br class="hidden sm:block">
                at <span class="text-blue-dark">info@epaygh.com</span> or <span class="text-blue-dark">WhatsApp / Call  us on 0508220167.<span></p>

            <div class="flex my-10">
                <a href="docs/getting-started" title="Gettting started with Epay" class="bg-blue hover:bg-blue-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Read Docs</a>

                <a href="docs/try-now" title="Read about Epay" class="bg-grey-light hover:bg-grey-dark text-blue-darkest font-normal hover:text-white rounded py-2 px-6">Try Now</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">


                                
                            </ol>
                    </div>
                </div>

                <div class="md:flex -mx-2 -mx-4">
                        <div class="lg:w-1/3 sm:w-3/3 h-full p-4">
                        <div class="max-w-sm rounded overflow-hidden p-6">
                        <i class="fas fa-credit-card text-4xl text-blue-darkest mt-4"></i>
                            <h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">Accept Payment</h3>
                            <p>Epay allows you to accept payments in minutes. Collect payments easily and securely on mobile, web and even without a website.</p>
                            <a href="https://epaygh.com" title="Gettting started with Epay" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded mr-4 py-2 px-6">See more</a>
                        </div>
                    </div>
                        <div class="lg:w-1/3 sm:w-3/3 h-full p-4">
                        <div class="max-w-sm rounded overflow-hidden  p-6">
                        <i class="fas fa-times text-4xl text-blue-darkest mt-4"></i>
                            <h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">Not a Developer?</h3>
                            <p>Although an Epay integration requires a developer. Payment pages, allows you to securely and
                            easily accept payments without code or a website.</p>
                            <a href="/docs/getting-started" title="Gettting started with Epay" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded mr-4 py-2 px-6">See more</a>
                
                        </div>
                    </div>
                        <div class="lg:w-1/3 sm:w-3/3 h-full p-4">
                            <div class="max-w-sm rounded overflow-hidden p-6">
                            <i class="fas fa-cogs text-4xl text-blue-darkest mt-4"></i>
                            <h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">API Reference</h3>
                            <p>Get familiar with our APIs. We've tried it as easy as possible to get up and running Epay.</p>
                             <a href="/docs/getting-started" title="Gettting started with Epay" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded mr-4 py-2 px-6">See more</a>
                
                        </div>
                    </div>
</div>
</section>
@endsection
