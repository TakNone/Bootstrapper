# payments.craftStarGift

**Layer** : 227

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
			msg_id : 29,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 3105361213781127642,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'uc79wfkOLKGN0Fhy',
		),
	),
);
```