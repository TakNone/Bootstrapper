# payments.assignAppStoreTransaction

**Description** : *Informs server about a purchase made through the App Store: for official applications only*

**Layer** : 218

```tl
payments.assignAppStoreTransaction#80ed747d receipt:bytes purpose:InputStorePaymentPurpose = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>receipt</mark> | [`bytes`](type/bytes) | Receipt |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | Payment purpose |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_PURPOSE_INVALID** | `400` | The specified payment purpose is invalid |
| **RECEIPT_EMPTY** | `400` | The specified receipt is empty |

---

## Example

```php
$updates = $client->payments->assignAppStoreTransaction(
	receipt : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```