# payments.updateStarGiftCollection

**Layer** : 214

```tl
payments.updateStarGiftCollection#4fddbee7 flags:# peer:InputPeer collection_id:int title:flags.0?string delete_stargift:flags.1?Vector<InputSavedStarGift> add_stargift:flags.2?Vector<InputSavedStarGift> order:flags.3?Vector<InputSavedStarGift> = StarGiftCollection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>collection_id</mark> | [`int`](type/int) | NOTHING |
| **title** | [`flags.0?string`](type/string) | NOTHING |
| **delete_stargift** | [`flags.1?Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |
| **add_stargift** | [`flags.2?Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |
| **order** | [`flags.3?Vector<InputSavedStarGift>`](type/InputSavedStarGift) | NOTHING |

---

## Result

[StarGiftCollection](type/StarGiftCollection)

---

## Example

```php
$starGiftCollection = $client->payments->updateStarGiftCollection(
	peer : $client->inputPeerEmpty(),
	collection_id : 18,
	title : 'PaNydXTw4IG7r1Wb',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 96,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 5120222286062166310,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'kCp4X9EGvLo7nDfa',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 29,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -8712514760916296614,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'MlmQ7kTv0xzgrjRq',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 46,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 5515221276384983220,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'fImhC4iJPxDzZU3W',
		),
	),
);
```