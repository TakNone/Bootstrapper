# inputPaymentCredentialsGooglePay

**Description** : *Google Pay payment credentials*

**Layer** : 216

```tl
inputPaymentCredentialsGooglePay#8ac32801 payment_token:DataJSON = InputPaymentCredentials;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>payment_token</mark> | [`DataJSON`](type/DataJSON) | Payment token |

---

## Type

[InputPaymentCredentials](type/InputPaymentCredentials)

---

## Example

```php
$inputPaymentCredentials = $client->inputPaymentCredentialsGooglePay(
	payment_token : $client->dataJSON(
		data : 'zZJX1wRSle4bjNHo',
	),
);
```