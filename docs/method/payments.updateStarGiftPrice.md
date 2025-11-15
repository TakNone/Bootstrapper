# payments.updateStarGiftPrice

**Description** : *A collectible gift we own &raquo; can be put up for sale on the gift marketplace &raquo; with this method, see here &raquo; for more info*

**Layer** : 216

```tl
payments.updateStarGiftPrice#edbe6ccb stargift:InputSavedStarGift resell_amount:StarsAmount = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The gift to resell |
| <mark>resell_amount</mark> | [`StarsAmount`](type/StarsAmount) | Resale price of the gift |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |
| **STARGIFT_NOT_FOUND** | `400` | The specified gift was not found |

---

## Example

```php
$updates = $client->payments->updateStarGiftPrice(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 97,
	),
	resell_amount : $client->starsAmount(
		amount : 6310285096680427702,
		nanos : 24,
	),
);
```