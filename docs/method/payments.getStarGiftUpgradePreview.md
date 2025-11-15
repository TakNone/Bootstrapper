# payments.getStarGiftUpgradePreview

**Description** : *Obtain a preview of the possible attributes \(chosen randomly\) a gift &raquo; can receive after upgrading it to a collectible gift &raquo;, see here &raquo; for more info*

**Layer** : 216

```tl
payments.getStarGiftUpgradePreview#9c9abcb1 gift_id:long = payments.StarGiftUpgradePreview;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | The gift to upgrade |

---

## Result

[payments.StarGiftUpgradePreview](type/payments.StarGiftUpgradePreview)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsStarGiftUpgradePreview = $client->payments->getStarGiftUpgradePreview(
	gift_id : 40108362483948591,
);
```