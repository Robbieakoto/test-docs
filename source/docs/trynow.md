---
title: Epay
description: Epay's documentation
extends: _layouts.documentation
section: content
---

# Try Now 

Get up and running with our webhook driven service and start your integration. Integrating Epay into your app or website can begin as soon as you [Create an account](https://epaygh.com/register), requires only 3 steps;

1. **Configure your Webhooks** to receive webhook notifications through the specified endpoint. Example: **https://graph.epaygh.com**
2. **Connect your payment page** so you can take payments from your customers directly into your Epay wallet.
```
<code class="language-html"> <strong>HTML</strong>
        <a href="https://epaygh.com/pay/st-event-demo-app" class="btn btn-primary">pay</a>;
</code>
````
3. **Receive and Handle Webhook Notifications** to confirm payment transactions and fulfill purchases
```
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
```

