# payments.canPurchaseStore

**Description** : *Checks whether a purchase is possible\. Must be called before in\-store purchase, official apps only*

**Layer** : 218

```tl
payments.canPurchaseStore#4fdc5ea7 purpose:InputStorePaymentPurpose = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | Payment purpose |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_PURPOSE_INVALID** | `400` | The specified payment purpose is invalid |
| **PREMIUM_CURRENTLY_UNAVAILABLE** | `406` | You cannot currently purchase a Premium subscription |

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