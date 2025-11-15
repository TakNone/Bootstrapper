# payments.updateStarGiftCollection

**Description** : *Add or remove gifts from a star gift collection &raquo;, or rename the collection*

**Layer** : 216

```tl
payments.updateStarGiftCollection#4fddbee7 flags:# peer:InputPeer collection_id:int title:flags.0?string delete_stargift:flags.1?Vector<InputSavedStarGift> add_stargift:flags.2?Vector<InputSavedStarGift> order:flags.3?Vector<InputSavedStarGift> = StarGiftCollection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer that owns the collection |
| <mark>collection_id</mark> | [`int`](type/int) | Collection ID |
| **title** | [`flags.0?string`](type/string) | Title of the collection, to rename the collection |
| **delete_stargift** | [`flags.1?Vector<InputSavedStarGift>`](type/InputSavedStarGift) | Can contain a list of gifts to remove from the collection |
| **add_stargift** | [`flags.2?Vector<InputSavedStarGift>`](type/InputSavedStarGift) | Can contain a list of gifts to add to the collection |
| **order** | [`flags.3?Vector<InputSavedStarGift>`](type/InputSavedStarGift) | Can contain the new gift order |

---

## Result

[StarGiftCollection](type/StarGiftCollection)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$starGiftCollection = $client->payments->updateStarGiftCollection(
	peer : $client->inputPeerEmpty(),
	collection_id : 28,
	title : 'd1h85POULCWsYgkb',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 0,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -8626870539286419825,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'AmYBduTMCioJZ9Fa',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 38,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -1262470964043039479,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'EoYqp2NZGshPm8O1',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 96,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->inputPeerEmpty(),
			saved_id : -7213020667223642710,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'dEkCDMsj72qGSY0l',
		),
	),
);
```