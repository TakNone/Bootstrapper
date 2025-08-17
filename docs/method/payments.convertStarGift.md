# payments.convertStarGift

**Description** : *Convert a received gift » into Telegram Stars: this will permanently destroy the gift, converting it into starGift.convert_stars Telegram Stars, added to the user's balance*

**Layer** : 211

```tl
payments.convertStarGift#74bf076b stargift:InputSavedStarGift = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->payments->convertStarGift(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 11,
	),
);
```