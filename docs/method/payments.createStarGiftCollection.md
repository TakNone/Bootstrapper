# payments.createStarGiftCollection

**Description** : *Create a star gift collection &raquo;*

**Layer** : 218

```tl
payments.createStarGiftCollection#1f4a0e87 peer:InputPeer title:string stargift:Vector<InputSavedStarGift> = StarGiftCollection;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to create the collection |
| <mark>title</mark> | [`string`](type/string) | Title of the collection |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | Gifts added to the collection |

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
$starGiftCollection = $client->payments->createStarGiftCollection(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	title : 'pPUoqd0lg5KIX4JZ',
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 54,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : -1853711281005485366,
		),
		$client->inputSavedStarGiftSlug(
			slug : '6xeRiVplnrOXDUsC',
		),
	),
);
```