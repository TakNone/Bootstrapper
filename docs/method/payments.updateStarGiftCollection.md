# payments.updateStarGiftCollection

**Description** : *Add or remove gifts from a star gift collection &raquo;, or rename the collection*

**Layer** : 227

```tl
payments.updateStarGiftCollection#4fddbee7 flags:# peer:InputPeer collection_id:int title:flags.0?string delete_stargift:flags.1?Vector<InputSavedStarGift> add_stargift:flags.2?Vector<InputSavedStarGift> order:flags.3?Vector<InputSavedStarGift> = StarGiftCollection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	collection_id : 34,
	title : 'mWdSkYMuDZ8wFXgj',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 88,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : -8997320804851740958,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'B5ojJu9m7QicLsyC',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 55,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 4178152023077968277,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'yKz9igkaHRxo6UcM',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 42,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 3475913870521823339,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'NOVu7gASiDmwxaE3',
		),
	),
);
```