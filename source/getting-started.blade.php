@extends('_layouts.master')

@section('body')

<div class="w-full lg:w-6/6 break-words lg:p-7 sm:p-2" v-pre>
    <div class="max-w-xl rounded overflow-hidden shadow-lg w-full break-words p-6 text-grey-darker">

        <h2 id="getting-started " class="text-grey-darker" >What is Epay?</h2>                       
            <p>Epay is a payment service that makes it easier for African businesses to securely accept online payments (both local and International) without coding or having a website and at no cost.</p>
            <p><b>Focus on building a global business and not on payments infrastructure. Get Paid around the World, Grow your Business, Go Global!</b></p>
    </div>

    <br><br>
    
       <div class="bg-grey-lighter border-l-4 border-blue text-black p-4 shadow-sm"" role="alert">
            <p><b> What makes us different?</b>
                <ul>
                <li> Instant settlements with the <b>lowest transaction fees.</b></li>
                    <li>You don't need a website or to write code to be able to accept payments for your business.</li>
                    <li>Developer friendly with webhook and API driven platform</li>
                    <li>Easy to setup and start accepting payments in minutes</li>
                    <li>Your customers need no mobile app installed and don't need to signup on epay to pay you.</li>
                </ul>
            </p>
        </div>

<h4 id="getting-started" class="text-blue-darkest">Getting Started</h4>
<p>All you have to do to start using Epay.</p>
     <div class="bg-grey-lighter border-l-4 border-blue text-black-dark p-4 shadow-sm"" role="alert">
    <p><p><b> Steps on how to accept payments on Epay ;</b>
        <ul>
            <li>Setup your Epay account and verify your Email address</li>
            <li>Create a payment page</li>
            <li>Share page link with customers to get paid</li>
        </ul>
    </p></p>
</div>

<h4 id="setup-account" class="text-blue-darkest">Setting Up Your Epay Account</h4>
<ul>
    <li>Create an Account by signing up</li>
    <li>Verify your email address</li>
    <li>Login to your account</li>
</ul>

<!--Create a page-->
<h4 id="create-payment-page" class="text-blue-darkest">How to Create a Payment Page</h4>
<p>A <b>Payment Page</b> can represent anything you want to charge money for, including; a downloadable product, a private course, T-shirt etc</p>
<ul>
    <li>After you login successfully, head to the navigation and click on <b>Payment Pages.</b></li>
    <li>On the top right corner is a button named <b>Create New Page</b>; click on it to create your payment page.</li>
    <li>Now, copy the link provided you when you create the page and start sharing with whoever needs to pay you.</li>
</ul>
<!--Make Payment-->
<h4 id="create-payment-page" class="text-blue-darkest">How to Make a Payment</h4>
<ul>
    <li>Request a payment link</li>
    <li>Fill out the required details</li>
    <li>Choose your preferred method of payment</li>
    <li>Fill out the payment details and Click <b>Proceed to payment</b></li>

</ul>
<!--Transfer-->
<h4 id="transfer-money" class="text-blue-darkest">Transfer money from your Epay wallet</h4>
<ul>
    <li>Request a payment link</li>
    <li>Fill out the required details</li>
    <li>Choose your preferred method of payment</li>
    <li>Fill out the payment details and Click <b>Proceed to payment</b></li>
</ul>
<b><p> NB:Payments are instant,but should you face any issue, kindly reachout to our support Team</p></b>

<hr/>

<h4 id="developers" class="text-blue-darkest">Developers</h4>
<p>Epay has also been designed for developers. If you are a developer, Epay has been designed to allow you extend and easily integrate into systems in order to accept payment without thinking of the risk that comes with processing payments.</p>
<p>Our well designed and beautiful checkout pages allows you to accept payments for your one-time purchase products and services, and notifies you via webhook whenever a new payment comes through. You don’t need to write a single line of payment code, you only need to worry about how to respond when a payment is successful or not. 
View documentation here</p>

</section>
@endsection
