# payments.craftStarGift

**Description** : *Craft a new collectible gift &raquo; by combining 1 to 4 owned collectible gifts of the same base gift type*

**Layer** : 229

```tl
payments.craftStarGift#b0f9684f stargift:Vector<InputSavedStarGift> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | 1 to 4 owned collectible gifts of the same type to use for crafting ». The first gift's ID is reused if crafting succeeds |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |

---

## Example

```php
$updates = $client->payments->craftStarGift(
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 24,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 955790504016743053,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'KutVchJCALmdy35E',
		),
	),
);
```