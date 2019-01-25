---
title: Api-Reference
description: Getting started with Epay is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

### API Reference
Here you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.


## Introduction
In order to start using Epay to receive and/or disburse payments, you would need to have an Epay Account. Head over to our signup page https://epaygh.com/register and create a new Epay account. Kindly note that your email and telephone number will be verified before you get access to your account.

Once registered, log into your account and head over to your settings page on the dashboard to generate your *Merchant Key*. This API Key should be kept confidential, as it would help you to authorise all API calls related to your account, as well as direct incoming funds to your Epay Wallet.

The Epay API is organized around **REST**. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.

## API Basics
To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:
* The endpoints listed are to be applied to the **base Url** https://epaygh.com/api 
* All payments received are **instantly deposited** into your **Epay wallet**
* All **API endpoints** except Authorization **requires authentication**
* An **Integration** must be created on your Epay account to start using the API
* All **API requests** must be made over **HTTPS**.
* All **Bulk fetches via a “list” endpoint** are **Paginated**
* All **API endpoints are versioned** to apps from breaking when we realize breaking changes

### Table
| EndpointName  | EndpointUrl   | EndpointName   | EndpointUrl  | 
| :------------ | :-----------: | :------------: | -----------: | 
| EndpointName  | EndpointUrl   | EndpointName   | EndpointUrl  |
| EndpointName  | EndpointUrl   | EndpointName   | EndpointUrl  |


>Your API keys carry many privileges, so be sure to keep them secure! Do not share your secret API keys in publicly accessible areas such as GitHub, client-side code, and so forth

## Authentication
Once you have an account, you need to call **/v1/token** to obtain an access token. This access token grants you access to all protected resources. To get your access token, you will need a **merchant_key, app_id** and **app_secret**. You will need to first create an Integration on your dashboard to get your **app_id** and **app_secret**. Your **merchant_key** can be located on your **dashboard under Settings**.

>The **access_token** would grant you access to the protected resources, each generated access_token **expires in 3600 seconds (1hr)**.

### Table

##### Example Request Body
```
{	
	"merchant_key" : "AWDFEv7eTFrzCSIY",
	"app_id" : "5c654089bcd30",
	"app_secret": "ASDSDCGKj9IWtkM2hNIgPDHbvvEPb67X"
}
```
##### Example Response
```
{
    "success": true,
    "message": "Verification Successful",
    "data": {
        "access_token": "eUJGUmR2a0RxQ0hESlhCTVl6VVlyYndNWDJhYlZwQDS=5c4af8b9a3681",
        "expires_at": "2019-01-25 12:53:29"
    }
}
```
##### Example error response
```
{
    "success": false,
    "message": "We couldn't verify your identity!"
}
```
```
{
    "success": false,
    "message": "Not a valid API request with missing parameters"
}
```
```
{
    "success": false,
    "message": "Your identity couldn't be validated!"
}
```

## Charge
The chief premise of this endpoint is to provide a single endpoint that allows you to charge your customers mobile money wallet or credit card. Charges are identified by a unique, random ID. called **reference** Payments are instantly deposit into your Epay wallet. The amount taken from your customer is deposited in Epay wallet with **zero percent (0%) charge**.


This is a protected route hence you need to pass your access token through the Authorization header, that is, **Authorization : Bearer access_token**

>We process all transactions **asynchronously**. Hence you would have to set your **callback/webhook** url on your dashboard under the settings section to receive the status of every posted transaction or **call out transaction status check endpoint** to verify status of the transactions.





