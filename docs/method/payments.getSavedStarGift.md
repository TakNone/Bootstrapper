# payments.getSavedStarGift

**Layer** : 216

```tl
payments.getSavedStarGift#b455a106 stargift:Vector<InputSavedStarGift> = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |

---

## Result

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->getSavedStarGift(
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 18,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -7942321115742005333,
		),
		$client->inputSavedStarGiftSlug(
			slug : '0OdZJxKFeQ7CTu1z',
		),
	),
);
```