---
title: Api-Reference
description: Getting started with Epay is as easy as 1, 2, 3.
extends: _layouts.documentation
section: content
---

#### API Reference
Here you’ll find detailed information about our APIs – what they’re for, how to use them and when to use them.

#### Introduction
In order to start using Epay to receive and/or disburse payments, you would need to have an Epay Account. Head over to our signup page https://epaygh.com/register and create a new Epay account. Kindly note that your email and telephone number will be verified before you get access to your account.

Once registered, log into your account and head over to your settings page on the dashboard to generate your *Merchant Key*. This API Key should be kept confidential, as it would help you to authorise all API calls related to your account, as well as direct incoming funds to your Epay Wallet.

The Epay API is organized around **REST**. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication and verbs.

#### API Basics
To help you get oriented with Epay’s API and what it can help you do, let’s start by defining some basics:
* The endpoints listed are to be applied to the **base Url** https://epaygh.com/api 
* All payments received are **instantly deposited** into your **Epay wallet**
* All **API endpoints** except Authorization **requires authentication**
* An **Integration** must be created on your Epay account to start using the API
* All **API requests** must be made over **HTTPS**.
* All **Bulk fetches via a “list” endpoint** are **Paginated**
* All **API endpoints are versioned** to apps from breaking when we realize breaking changes

    |  Endpoint Name  |  Endpoint Url  |
    |  -------------  |  ------------- |
    |  Endpoint Name  |  Endpoint Url  |
    |  Endpoint Name  |  Endpoint Url  |



