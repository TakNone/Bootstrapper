# payments.paymentVerificationNeeded

**Description** : *Payment was not successful, additional verification is needed*

**Layer** : 211

```tl
payments.paymentVerificationNeeded#d8411139 url:string = payments.PaymentResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | URL for additional payment credentials verification |

---

## Type

[payments.PaymentResult](type/payments.PaymentResult)

---

## Example

```php
$paymentsPaymentResult = $client->payments->paymentVerificationNeeded(
	url : 'https://docs.liveproto.dev',
);
```