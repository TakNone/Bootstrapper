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
	collection_id : 2,
	title : 'heOMbUaWf1Rrp8wS',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 7,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 3538032673512713653,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'Jebm9B6Mody2XSUk',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 82,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -8654136298687336855,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'YjNTaOL63GhbADXC',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 74,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -8961223293112752792,
		),
		$client->inputSavedStarGiftSlug(
			slug : '2SOrADivcmtfP6UH',
		),
	),
);
```