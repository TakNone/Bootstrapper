# paymentSavedCredentialsCard

**Description** : *Saved credit card*

**Layer** : 225

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
	id : 'SyPDRf06jKTXuzor',
	title : '4UlTVXPDnzeK8xFR',
);
```