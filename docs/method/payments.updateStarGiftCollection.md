# payments.updateStarGiftCollection

**Layer** : 216

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
	collection_id : 9,
	title : 'tZWQIRdEz2gsvq0u',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 47,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -3565507078513734403,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'VYvcuWg3PqKQkxab',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 29,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -3928834286705134421,
		),
		$client->inputSavedStarGiftSlug(
			slug : '3Ghz8WLKNgo2FcMV',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 54,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 5173774343620021476,
		),
		$client->inputSavedStarGiftSlug(
			slug : '3XtlUcBdL17iMnsW',
		),
	),
);
```