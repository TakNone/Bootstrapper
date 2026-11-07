# payments.getCraftStarGifts

**Description** : *Obtain owned collectible gifts &raquo; of a specific type that can be used for crafting &raquo;*

**Layer** : 229

```tl
payments.getCraftStarGifts#fd05dd00 gift_id:long offset:string limit:int = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | Identifier of the base gift type, equal to starGiftUnique.gift_id of the first selected gift |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->getCraftStarGifts(
	gift_id : -456159811692494063,
	offset : 'szURBdKrS4Tfoqkn',
	limit : 19,
);
```