# inputPaymentCredentialsApplePay

**Description** : *Apple pay payment credentials*

**Layer** : 218

```tl
inputPaymentCredentialsApplePay#aa1c39f payment_data:DataJSON = InputPaymentCredentials;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>payment_data</mark> | [`DataJSON`](type/DataJSON) | Payment data |

---

## Type

[InputPaymentCredentials](type/InputPaymentCredentials)

---

## Example

```php
$inputPaymentCredentials = $client->inputPaymentCredentialsApplePay(
	payment_data : $client->dataJSON(
		data : 'nXpwb8tWmIflvhZq',
	),
);
```