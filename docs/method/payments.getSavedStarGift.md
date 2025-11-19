# payments.getSavedStarGift

**Description** : *Fetch info about specific gifts owned by a peer we control*

**Layer** : 218

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
			msg_id : 38,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : -1153761249062018518,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'RLrfK17gFyVqtDOj',
		),
	),
);
```