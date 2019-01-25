---
title: Api-Reference
description: Getting started with Epay is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

### Epay API Reference
Here you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them. If you have any issues, questions or comments, feel free to get to us by mail at info@epaygh.com or WhatsApp / Call us on 0508220167.  

>The Epay API is organized around REST. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs

## Introduction
In order to start using Epay’s APIs to receive and/or disburse payments, you would need to have an Epay Account and also create an Integration. Head over to our signup page https://epaygh.com/register to create a new Epay account. 

> Kindly note that your email and telephone number will be verified before you get access to your account.

Once registered, log into your account and head over to your settings sections on your dashboard to generate a Merchant Key. This Key should be kept confidential, as it would grant to access to all protected API Resources as well as direct incoming funds to your Epay Wallet.




## API Basics
To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:
* The endpoints listed are to be applied to the **base Url** https://epaygh.com/api 
* All payments received are **instantly deposited** into your **Epay wallet**
* All **API endpoints** except Authorization **requires authentication**
* An **Integration** must be created on your Epay account to start using the API
* All **API requests** must be made over **HTTPS**.
* All **Bulk fetches via a “list” endpoint** are **Paginated**
* All **API endpoints are versioned** 
* All **Charge API** allow payments from only our **payment methods**


| Resource Name     | Endpoint Url     | Description                          | Last Updated | 
| :------------     | :-----------:    | :------------:                       | -----------: | 
| Authentication    | /v1/token        | This endpoint allows to retrieve a token which will be used to authenticate all requests to our endpoints.    All tokens expire after 1 hour           | 25 Jan 2019 |
| Charges           | /v1/charge       | This single endpoint allows you to charge both mobile money accounts and Credit Cards into your Epay wallet. This endpoint requires Authentication                       | 25 Jan 2019  |
| Customers         | /v1/customers    | TThis endpoint allows you to create a customer, retrieve, details and all transactions from a specific customer as well as list out all your customers.    This endpoint requires Authentication                      | 25 Jan 2019 |
| Transactions      | /v1/transactions | This endpoint allows you to list all transactions under your account and also retrieve information around a specific transaction.   This endpoint requires Authentication                      | 25 Jan 2019 |


>Your API keys carry many privileges, so be sure to keep them secure! Do not share your secret API keys in publicly accessible areas such as GitHub, client-side code, and so forth.      


## Authentication
Once you have created an Epay account, you need to call **/v1/token** to obtain an access token. This access token grants you access to all protected resources. To get your access token, you will need a **merchant_key, app_id** and **app_secret**. You will need to first create an Integration on your dashboard to get your **app_id** and **app_secret**. Your **merchant_key** can be located on your **dashboard under Settings**.

>The **access_token** would grant you access to the protected resources, each generated access_token **expires in 3600 seconds (1hr)**.

##### Endpoint Details

| | |
| :------------ | -------------------------------:|
| Endpoint Url  | https://epaygh.com/api/v1/token |
| Method        | Post                            |


##### Headers

|   |  |
| :------------ | ----------------:|
| Content-Type  | application/json |
| Accept        | application/json |


##### Request Body

| Parameter             | Field type                | Required | Description
| :----------           | :--------------:          | :-------:| -----------:
| merchant_key          | String                    |Yes       | This is a unique key related to your epay account and can be found on your dashboard under settings section.              **This key carries many privileges, so be sure to keep them secure**|
| app_id                | String                    |Yes       | This is a unique ID related to your integration and can also be found on your dashboard under integration section.              **This key carries many privileges, so be sure to keep them secure**|
| app_secret            | String                    |Yes       | This is a unique key related to your integration and can also be found on your dashboard under settings section.              **This key carries many privileges, so be sure to keep them secure**|



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
The chief premise of this endpoint is to provide a single endpoint that allows you to charge your customers mobile money wallet or credit card. Charges are identified by a unique, random ID called **reference**. All payments are instantly deposited into your Epay wallet. The amount taken from your customer is deposited with **zero percent (0%) charge**. 


This is a protected route hence you need to pass your access token through the Authorization header, that is, **Authorization : Bearer access_token**

>We process all transactions **asynchronously**. Hence you would have to set your **callback/webhook** url on your dashboard under the settings section to receive the status of every posted transaction or **call out transaction status check endpoint** to verify status of the transactions.


##### Endpoint Details
|   |  |
| :------------ | ----------------:|
| Enpoint Url   | https://epaygh.com/api/v1/charge |
| Method        | Post |


##### Headers
| Content-Type   | application/json|
| :------------ | ----------------:|
| Accept       | application/json |
| Authorization      | Bearer <access_token>|


##### Request Body Parameters
| Parameter   | Field Type | Required   | Description |
| :------------ | :----------------:| :------------: | ----------------:|
| reference   | string | yes   | This is a unique ID that represents the transaction. |
| amount   | float | yes   | The amount you wish to charge the customer.             Amount must be of type float. Eg; 1.00 or 50.00|
| customer_name   | string | yes   | This is the name of the customer you are charging. |
| customer_email   | string | yes   | This is the email of the customer you are charging. |
| customer_telephone   | string | yes   | This is the telephone number of the customer you are charging. |
| payment_description   | string | no   | This is the description of the payment. |
##### Parameters to Charge Mobile Money Wallet
|   |  |    |  |
| :------------ | :----------------:| :------------: | ----------------:|
| mobile_wallet_number| string | yes, for only mobile money charges|This is the number of the mobile money wallet you wish to charge. |
| mobile_wallet_network| string | yes, for only mobile money charges|This is the network of the mobile money wallet you wish to charge.|
| payment_method| string | yes, for only mobile money charges|This is how you wish to charge the customer and must be set to ‘momo’|
| voucher| string | yes, for only vodafone mobile money wallets|This is the voucher the user generates to authorize the payment.|
##### Parameters to Charge Credit Cards (returns a url to redirect to)
|   |  |   |  |
| :------------ | :----------------:| :------------: | ----------------:|
| payment_method | string| Yes, for only credit card charges | This is how you wish to charge the customer and must be set to  ‘card’|


##### Example Request Body (Mobile Money)
```

{	
	"reference" : "EP-2JBH23JJBJBJ",
	"amount" : 1.00,
	"payment_method" : "momo",
	"customer_name": "Akosua Manu",
	"customer_email" : "akosuamanu@gmail.com",
	"customer_telephone" : "054**********",
	"mobile_wallet_number" : "054**********",
	"mobile_wallet_network":"mtn",
	"payment_description": "A test payment"
}
```

##### Example Response (Mobile Money)
```

{
    "success": true,
    "message": "A payment request has been sent to the mobile wallet. Please Approve Payment.",
    "data": {
        "customer": {
            "id": 37,
            "name": "Akosua Manu",
            "email": "akosuamanu@gmail.com",
            "telephone": "054**********",
            "created_at": "2019-01-22 16:15:32",
            "updated_at": "2019-01-22 16:15:32"
        },
        "transaction": {
            "reference": "EP-2JBH23JJBJBJ",
            "payment_method": "momo",
            "description": "A test payment",
            "amount": 1.00,
            "mobile_wallet_number": "054**********",
            "mobile_wallet_network": "mtn"
        }
    }
}
```

##### Example Request Body (Credit Card)
```

{	
	"reference" : "EP-HBSABSDKKAS",
	"amount" : 1.00,
	"payment_method" : "card",
	"customer_name": "Akosua Manu",
	"customer_email" : "akosuamanu@gmail.com",
	"customer_telephone" : "054**********",
	"payment_description": "A sample payment"
}
```

##### Example Response (Credit Card)
```
{
    "success": true,
    "message": "Redirect to url provided to complete payment",
    "data": {
        "customer": {
            "id": 37,
            "name": "Akosua Manu",
            "email": "akosua manu@gmail.com",
            "telephone": "054**********",
            "created_at": "2019-01-22 16:15:32",
            "updated_at": "2019-01-22 16:15:32"
        },
        "transaction": {
            "reference": "EP-HBSABSDKKAS",
            "payment_method": "card",
            "description": "A sample payment",
            "amount": 1.00
        },
        "redirect_url": "https://migs.mastercard.com.au/vpcpay"
    }
}
```
##### Example Error Response
```
{
    "success": false,
    "message": "Not a valid API request with missing parameters"
}
```

```
{
    "success": false,
    "message": "Authorization Failed! "
}
```
```
{
    "success": false,
    "message": "Ooops! We encountered an issue trying to charge the mobile wallet"
}
```

### List all Customers
The chief premise of this endpoint is to allow you list all customers created under your Epay Account. Kindly take note that this is a protected resource.

>The response returns a paginated list of customers

##### Endpoint Details

|  | |
| :------------ | ----------------:|
| Enpoint Url  | https://epaygh.com/api/v1/customers|
| Method      | GET |


##### Headers

|  | |
| :------------ | ----------------:|
| Content-Type  | application/json|
| Authorization    | Bearer <access_token> |

##### Example Error Response
```
{
    "success": false,
    "message": "Not a valid API request with missing parameters"
}
```
```
{
    "success": false,
    "message": "Authorization Failed! "
}
```

##### Example Response
```

{
    "success": true,
    "message": "Customers retrieved Successfully",
    "customers": {
        "current_page": 1,
        "data": [
            {
                "id": 36,
                "name": "okays",
                "email": "okays@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-12-03 14:25:55",
                "updated_at": "2018-12-03 14:25:55"
            },
            {
                "id": 35,
                "name": "something",
                "email": "some@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-12-03 14:25:13",
                "updated_at": "2018-12-03 14:25:13"
            },
            {
                "id": 34,
                "name": "samiiii",
                "email": "sammii@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-12-03 14:21:10",
                "updated_at": "2018-12-03 14:21:10"
            },
            {
                "id": 33,
                "name": "sam",
                "email": "sam@gmail.cmo",
                "telephone": "054**********",
                "created_at": "2018-11-30 12:18:21",
                "updated_at": "2018-11-30 12:18:21"
            },
            {
                "id": 31,
                "name": "sams",
                "email": "sams@gmail.com",
                "telephone": "054**********",
                "created_at": "2018-10-22 15:12:00",
                "updated_at": "2018-10-22 15:12:00"
            },
            {
                "id": 27,
                "name": "babs",
                "email": "babs@gmail.com",
                "telephone": "0548797248",
                "created_at": "2018-10-13 12:40:17",
                "updated_at": "2018-10-13 12:40:17"
            },
            {
                "id": 26,
                "name": "Akos",
                "email": "akos@gmail.com",
                "telephone": "024**********",
                "created_at": "2018-10-12 16:38:19",
                "updated_at": "2018-10-12 16:38:19"
            },
            {
                "id": 25,
                "name": "Akosa",
                "email": "skos2@gmail.com",
                "telephone": "024**********",
                "created_at": "2018-10-12 16:36:08",
                "updated_at": "2018-10-12 16:36:08"
            },
        ],
        "first_page_url": "http://localhost:8000/api/v1/customers?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http://localhost:8000/api/v1/customers?page=2",
        "next_page_url": "http://localhost:8000/api/v1/customers?page=2",
        "path": "http://localhost:8000/api/v1/customers",
        "per_page": 20,
        "prev_page_url": null,
        "to": 20,
        "total": 32
    }
}
```

### Create a new Customer
The chief premise of this endpoint is to allow you to create a customer under your Epay Account. Kindly take note that this is a protected resource.

##### Endpoint Details
|  | |
| :------------ | ----------------:|
| Endpoint Url  | https://epaygh.com/api/v1/customers|
| Method    | POST|


##### Headers
|  | |
| :------------ | ----------------:|
| Content-Type  | application/json|
| Accept   | application/json|
| Authorization   | Bearer <access_token>|


##### Request Body Parameters
| Parameter |Field Type  | Required| Description
| :------------ | ----------------:|
| name  | String |Yes | This is the name of the customer.|
| email  | String| Yes | This is the email of the customer |
| telephone   | String| Yes | This is the telephone number of the customer |


##### Example Request Body
```
{	
	"name" : "My Name",
	"email" : "myname@gmail.com",
	"telephone": "024************"
}
```

##### Example Response
```
{
    "success": true,
    "message": "Customer created Successfully",
    "data": {
        "customer": [
            {
                "id": 37,
                "name": ""My Name",
                "email": "myname@gmail.com",
                "telephone": "024************",
                "created_at": "2019-01-22 16:15:32",
                "updated_at": "2019-01-22 16:15:32"
            }
        ]
    }
}
```

### Retrieve a Customer
The chief premise of this endpoint is to allow you to retrieve a single customer data as well as all transactions of the customer. Kindly take note that this is a protected resource.


##### Endpoint Details
|  | |
| :------------ | ----------------:|
| Endpoint Url | https://epaygh.com/api/v1/customers/<customer_id>|
| Method   | GET|


##### Headers
|  | |
| :------------ | ----------------:|
| Content-Type | application/json|
| Accept | application/json|
| Authorization   | Bearer <access_token>|


##### Example Response Body
```

{
    "success": true,
    "message": "Transactions retrieved Successfully",
    "data": {
        "customer": {
            "id": 6,
            "name": "Someone",
            "email": "someone@gmail.com",
            "telephone": "0548797248",
            "created_at": "2018-09-08 14:44:19",
            "updated_at": "2018-09-08 14:44:19"
        },
        "transactions": [
            {
                "id": 140,
                "reference": "EP-j9fxp1hMJv9PiAx3",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "22",
                "status": "pending",
                "created_at": "2018-10-31 15:59:44",
                "updated_at": "2018-10-31 15:59:44",
                "type": "payments",
                "description": "loan repayment"
            },
            {
                "id": 139,
                "reference": "EP-eqbgF8Nn0vPTC1lh",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "1",
                "status": "success",
                "created_at": "2018-10-29 22:32:08",
                "updated_at": "2018-10-29 22:32:08",
                "type": "payments",
                "description": "samples"
            },
            {
                "id": 127,
                "reference": "EP-CAHjxoVAvbCmD54W",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "1",
                "status": "failed",
                "created_at": "2018-10-13 23:12:57",
                "updated_at": "2018-10-13 23:12:57",
                "type": "payments",
                "description": "optional"
            },
            {
                "id": 115,
                "reference": "EP-03xROG5LUtYa2UE5",
                "payment_method": "card",
                "payment_no": "card",
                "amount": "5",
                "status": "pending",
                "created_at": "2018-10-13 12:19:55",
                "updated_at": "2018-10-13 12:19:55",
                "type": "payments",
                "description": "Payment of Service"
            },
            {
                "id": 111,
                "reference": "EP-bOroxrb0vac2EMT4",
                "payment_method": "momo",
                "payment_no": "0548797248",
                "amount": "1",
                "status": "failed",
                "created_at": "2018-10-11 14:53:55",
                "updated_at": "2018-10-11 14:54:28",
                "type": "payments",
                "description": "sams"
            }
        ]
    }
}
```

### Retrieve a Transaction
The chief premise of this endpoint is to allow you to retrieve the details of a transaction and can be as well used to check the status of a transaction. Kindly take note that this is a protected resource.

##### Endpoint Details
|  | |
| :------------ | ----------------:|
| Endpoint Url | https://epaygh.com/api/v1/transactions/<transaction_reference>|
| Method   | GET|


##### Headers
|  | |
| :------------ | ----------------:|
| Content-Type | application/json|
| Accept   | application/json|
| Authorization | Bearer <access_token> |


##### Example Response Body
```

{
    "success": true,
    "message": "Transactions retrieved Successfully",
    "transaction": {
        "id": 184,
        "reference": "EP-sbadhb23bb",
        "payment_method": "momo",
        "payment_no": "054**********",
        "amount": "1",
        "customer_id": "37",
        "status": "pending",
        "created_at": "2019-01-23 19:57:30",
        "updated_at": "2019-01-23 19:57:30",
        "type": "payments",
        "description": "test payment"
    }
}
```

##### List all Transactions
The chief premise of this endpoint is to allow you list all transactions under your Epay Account. Kindly take note that this is a protected resource.

>The response returns a paginated list of transactions

##### Endpoint Details
|  | |
| :------------ | ----------------:|
| Endpoint Url | https://epaygh.com/api/v1/transactions |
| Method  | GET|

##### Headers
|  | |
| :------------ | ----------------:|
| Content-Type | application/json |
| Authorization  | Bearer <access_token> |





