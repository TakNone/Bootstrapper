# inputInvoiceStars

**Description** : *Used to top up the Telegram Stars balance of the current account or someone else&#039;s account, or to start a Telegram Star giveaway &raquo;*

**Layer** : 216

```tl
inputInvoiceStars#65f00ce3 purpose:InputStorePaymentPurpose = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | An inputStorePaymentStarsGiveaway, inputStorePaymentStarsTopup or inputStorePaymentStarsGift |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStars(
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```