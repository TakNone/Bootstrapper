# inputInvoicePremiumAuthCode

**Layer** : 216

```tl
inputInvoicePremiumAuthCode#3e77f614 purpose:InputStorePaymentPurpose = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoicePremiumAuthCode(
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```