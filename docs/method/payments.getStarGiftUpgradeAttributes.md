# payments.getStarGiftUpgradeAttributes

**Description** : *Obtains the full list of just the collectible attributes that may appear for a gift type once it&#039;s upgraded to a collectible gift &raquo;*

**Layer** : 229

```tl
payments.getStarGiftUpgradeAttributes#6d038b58 gift_id:long = payments.StarGiftUpgradeAttributes;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | Non-collectible base gift ID, from starGift.id |

---

## Result

[payments.StarGiftUpgradeAttributes](type/payments.StarGiftUpgradeAttributes)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsStarGiftUpgradeAttributes = $client->payments->getStarGiftUpgradeAttributes(
	gift_id : -6090572381500247911,
);
```