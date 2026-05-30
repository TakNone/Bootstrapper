# payments.craftStarGift

**Layer** : 225

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
			msg_id : 83,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : -3759195313378254847,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'j7f130KNYiu2vMTp',
		),
	),
);
```