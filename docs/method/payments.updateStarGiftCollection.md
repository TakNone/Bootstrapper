# payments.updateStarGiftCollection

**Layer** : 211

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
	collection_id : 99,
	title : '1B0AIReEyGUKStov',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 28,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -7784031712984322594,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'fugoETiqGaOZnIHx',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 64,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 2916996083793331191,
		),
		$client->inputSavedStarGiftSlug(
			slug : '67eshwnydHtaQIkP',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 51,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -8290479857769362940,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'sgctAbzmjLndyB7k',
		),
	),
);
```