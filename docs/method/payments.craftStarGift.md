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
			msg_id : 70,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 7675364261982664266,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'nydgIaHsXQYNF3E2',
		),
	),
);
```