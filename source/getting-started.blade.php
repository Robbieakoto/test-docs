@extends('_layouts.master')

@section('body')
<main role="main" class="w-full flex-auto">
    <section class="container max-w-4lg mx-auto px-6 md:px-2 py-4">
    <div class="flex flex-col lg:flex-row">
    <nav id="js-nav-menu" class="nav-menu hidden lg:block">


        <a href="/docs/getting-started" class="lvl0  active font-semibold text-blue nav-menu__item hover:text-blue">
            Introduction
        </a>

                
            <ul class="list-reset my-0">
                <li class="list-reset pl-4">
                    <a href="/docs/getting-started" class="lvl1   nav-menu__item hover:text-blue">
                        What is Epay?
                    </a>
                </li>

                <a href="#getting-started" class="lvl0   nav-menu__item hover:text-blue">
                    Getting Started
                </a>
                
                    <li class="list-reset pl-4">
                        <a href="#setup-account" class="lvl1   nav-menu__item hover:text-blue">
                            Setup Account
                        </a>
                    </li>

                    <li class="list-reset pl-4">
                        <a href="#create-payment-page" class="lvl1   nav-menu__item hover:text-blue">
                            Create a Payment Page
                        </a>
                    </li>
                    <li class="list-reset pl-4">   
                        <a href="#create-payment-page" class="lvl1   nav-menu__item hover:text-blue">
                            How to make Payment
                        </a>
                    </li>
                    <li class="list-reset pl-4">   
                        <a href="#transfer-money" class="lvl1   nav-menu__item hover:text-blue">
                            Transfer money from your wallet
                        </a>
                    </li>
                <a href="#developers" class="lvl0   nav-menu__item hover:text-blue">
                    Developers
                </a>

                <a href="#epay-dashboard" class="lvl0   nav-menu__item hover:text-blue">
                    Epay Dashboard
                </a>
                <a href="#payment-channels" class="lvl0   nav-menu__item hover:text-blue">
                    Payment Channels
                </a>
                
                <a href="#international" class="lvl0   nav-menu__item hover:text-blue">
                    International  Transfers
                </a>
                <a href="#account" class="lvl0   nav-menu__item hover:text-blue">
                    Account Management
                </a>
                <a href="#notification" class="lvl0   nav-menu__item hover:text-blue">
                    Instant Notification 
                </a>
                <a href="#offline" class="lvl0   nav-menu__item hover:text-blue">
                    Offline capabilities
                </a>
    
        </ul>
    </nav>

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

<!--<pre><code class="language-yaml">---
title: Navigation
description: Building a navigation menu for your site
extends: _layouts.documentation
section: content
---</code></pre>

<p><a href="https://jigsaw.tighten.co/docs/content-blade/">Read more about Jigsaw layouts.</a></p>-->

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

<h4 id="epay-dashboard" class="text-blue-darkest">Epay Dashboard</h4>
<p>Make use of your dashboard very well. Your dashboard provides you with all information you need. You can;</p>
    <ul>
        <li>View your wallet, total amount you have transferred and also all your income on epay</li>
        <li>Total number of payment pages you have</li>
        <li>Total number of customers with all their details</li>
        <li>Revenue you've made from a month, to half a year and even a year as a whole</li>
    </ul>

 <h4 id="payment-channels" class="text-blue-darkest">Payment Channels</h4>
    <p>Below are the payment channels available on Epay;</p>
    <ul>
        <li><b>Bank Transfers</b>: Transfer funds from your Epay wallet directly into your bank account.</li>
        <li><b>Mobile Money(MOMO)</b> : Recieve and transfer funds into your Mobile money</li>
        <li><b>Card Payment</b>: Pay using your card (Visa and Master Card)</li>
    </ul>

 <h4 id="international" class="text-blue-darkest">International Transfers</h4>
    <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4 shadow-md"" role="alert">
        <p class="font-bold">Coming Soon!</p>
        <p>Information about this is coming soon</p>
    </div>
 <h4 id="account" class="text-blue-darkest">Account Management</h4>
    <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4 shadow-md"" role="alert">
        <p class="font-bold">Coming Soon!</p>
        <p>Information about this is coming soon</p>
    </div>
 <h4 id="notification" class="text-blue-darkest">Instant Notification</h4>
    <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4 shadow-md"" role="alert">
        <p class="font-bold">Coming Soon!</p>
        <p>Information about this is coming soon</p>
    </div>
<h4 id="offline" class="text-blue-darkest">Offline Capabilities</h4>
    <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4 shadow-md"" role="alert">
        <p class="font-bold">Coming Soon!</p>
        <p>Information about this is coming soon</p>
    </div>


</div>
    </div>
    </div>
   

@endsection