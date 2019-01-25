@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12 ">
        <div class="w-full lg:w-3/5 break-words pb-16 lg:pl-4" v-pre>
            <h4>API Reference</h4>
<p>Here you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.</p>
<h4>Introduction</h4>
<p>In order to start using Epay to receive and/or disburse payments, you would need to have an Epay Account. Head over to our signup page <a href="https://epaygh.com/register">https://epaygh.com/register</a> and create a new Epay account. Kindly note that your email and telephone number will be verified before you get access to your account.</p>
<p>Once registered, log into your account and head over to your settings page on the dashboard to generate your <em>Merchant Key</em>. This API Key should be kept confidential, as it would help you to authorise all API calls related to your account, as well as direct incoming funds to your Epay Wallet.</p>
<p>The Epay API is organized around <strong>REST</strong>. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.</p>
<h4>API Basics</h4>
<p>To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:</p>
<ul>
<li>The endpoints listed are to be applied to the <strong>base Url</strong> <a href="https://epaygh.com/api">https://epaygh.com/api</a> </li>
<li>All payments received are <strong>instantly deposited</strong> into your <strong>Epay wallet</strong></li>
<li>All <strong>API endpoints</strong> except Authorization <strong>requires authentication</strong></li>
<li>An <strong>Integration</strong> must be created on your Epay account to start using the API</li>
<li>All <strong>API requests</strong> must be made over <strong>HTTPS</strong>.</li>
<li>All <strong>Bulk fetches via a “list” endpoint</strong> are <strong>Paginated</strong></li>
<li>All <strong>API endpoints are versioned</strong> to apps from breaking when we realize breaking changes</li>

<li>
    <table>
        <thead>
            <tr>
                <th>EndpointName</th>
                <th>EndpointUrl</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>EndpointName</td>
                <td>EndpointUrl</td>
            </tr>
            <tr>
                <td>EndpointName</td>
                <td>EndpointUrl</td>    
            </tr>
        </tbody>
    </table>
</li>
</ul>        </div>
    </div>
</section>
@endsection