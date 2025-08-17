# payments.paymentResult

**Description** : *Payment result*

**Layer** : 211

```tl
payments.paymentResult#4e5f810d updates:Updates = payments.PaymentResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Updates`](type/Updates) | Info about the payment |

---

## Type

[payments.PaymentResult](type/payments.PaymentResult)

---

## Example

```php
$paymentsPaymentResult = $client->payments->paymentResult(
	updates : $client->updatesTooLong(),
);
```