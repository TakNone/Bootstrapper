# payments.updateStarGiftCollection

**Description** : *Add or remove gifts from a star gift collection &raquo;, or rename the collection*

**Layer** : 218

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	collection_id : 63,
	title : 'l6CuBbh9zVHrOg2d',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 80,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : -9216759433404327651,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'iXl2jbm4Lv9NU1on',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 60,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 3866487087617733278,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'gM2RQ379lFy0Zk1w',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 5,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 6944236466931036990,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'N21sjiJTyXhPc7Fz',
		),
	),
);
```