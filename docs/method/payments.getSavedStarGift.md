# payments.getSavedStarGift

**Description** : *Fetch info about specific gifts owned by a peer we control*

**Layer** : 227

```tl
payments.getSavedStarGift#b455a106 stargift:Vector<InputSavedStarGift> = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | List of gifts to fetch info about |

---

## Result

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |
| **STARGIFT_SLUG_INVALID** | `400` | The specified gift slug is invalid |

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->getSavedStarGift(
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 100,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 8724101778252577192,
		),
		$client->inputSavedStarGiftSlug(
			slug : '0m7t1N9e6SkYMXZF',
		),
	),
);
```