# payments.craftStarGift

**Layer** : 222

```tl
payments.craftStarGift#b0f9684f stargift:Vector<InputSavedStarGift> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->payments->craftStarGift(
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 86,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 969113664158179585,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'kdTGVCqaru1ZwchW',
		),
	),
);
```