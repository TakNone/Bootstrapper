# inputStorePaymentPremiumSubscription

**Description** : *Info about a Telegram Premium purchase*

**Layer** : 211

```tl
inputStorePaymentPremiumSubscription#a6751e66 flags:# restore:flags.0?true upgrade:flags.1?true = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **restore** | [`flags.0?true`](type/true) | Pass true if this is a restore of a Telegram Premium purchase; only for the App Store |
| **upgrade** | [`flags.1?true`](type/true) | Pass true if this is an upgrade from a monthly subscription to a yearly subscription; only for App Store |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentPremiumSubscription(
	restore : true,
	upgrade : true,
);
```