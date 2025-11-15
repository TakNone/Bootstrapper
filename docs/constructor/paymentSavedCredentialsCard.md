# paymentSavedCredentialsCard

**Description** : *Saved credit card*

**Layer** : 216

```tl
paymentSavedCredentialsCard#cdc27a1f id:string title:string = PaymentSavedCredentials;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Card ID |
| <mark>title</mark> | [`string`](type/string) | Title |

---

## Type

[PaymentSavedCredentials](type/PaymentSavedCredentials)

---

## Example

```php
$paymentSavedCredentials = $client->paymentSavedCredentialsCard(
	id : 'hO7LtTAEYSFjwenl',
	title : 'YnS51UH4mKzEqZWP',
);
```