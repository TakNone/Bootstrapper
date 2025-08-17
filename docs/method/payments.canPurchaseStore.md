# payments.canPurchaseStore

**Layer** : 211

```tl
payments.canPurchaseStore#4fdc5ea7 purpose:InputStorePaymentPurpose = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->canPurchaseStore(
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```