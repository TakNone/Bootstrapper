# payments.updateStarGiftCollection

**Description** : *Add or remove gifts from a star gift collection &raquo;, or rename the collection*

**Layer** : 222

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
	collection_id : 74,
	title : 'U2NK4raEn8v5dSAV',
	delete_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 20,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 6319985454461589895,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'B8bUMpjmuSa1Tv3I',
		),
	),
	add_stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 78,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 8797672381164638141,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'oSpwhblkzqG9VO7M',
		),
	),
	order : array(
		$client->inputSavedStarGiftUser(
			msg_id : 15,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : -495687722027717635,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'M21vFfQLZSjErK5s',
		),
	),
);
```