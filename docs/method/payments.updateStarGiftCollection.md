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
	collection_id : 23,
	title : 'dSIk6zTFv08HEXJl',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 81,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 60586495549024257,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'sfLEFvHUSnM9xTYI',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 73,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 2878794077646149228,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'kbSBMHOGDyPYTUZz',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 34,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : 5552640176154224010,
		),
		$client->inputSavedStarGiftSlug(
			slug : '6ps0tRHANZVDqbzj',
		),
	),
);
```