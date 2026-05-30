# payments.getStarGiftUpgradeAttributes

**Layer** : 225

```tl
payments.getStarGiftUpgradeAttributes#6d038b58 gift_id:long = payments.StarGiftUpgradeAttributes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[payments.StarGiftUpgradeAttributes](type/payments.StarGiftUpgradeAttributes)

---

## Example

```php
$paymentsStarGiftUpgradeAttributes = $client->payments->getStarGiftUpgradeAttributes(
	gift_id : 5416186616800338253,
);
```