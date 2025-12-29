# payments.toggleStarGiftsPinnedToTop

**Description** : *Pins a received gift on top of the profile of the user or owned channels by using payments\.toggleStarGiftsPinnedToTop*

**Layer** : 218

```tl
payments.toggleStarGiftsPinnedToTop#1513e7b0 peer:InputPeer stargift:Vector<InputSavedStarGift> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where to pin the gift |
| <mark>stargift</mark> | [`Vector<InputSavedStarGift>`](type/InputSavedStarGift) | The gift to pin |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->payments->toggleStarGiftsPinnedToTop(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	stargift : array(
		$client->inputSavedStarGiftUser(
			msg_id : 63,
		),
		$client->inputSavedStarGiftChat(
			peer : $client->get_input_peer(peer : '@LiveProtoChat'),
			saved_id : 6843000224837199914,
		),
		$client->inputSavedStarGiftSlug(
			slug : 'm7JycoKUVjQ2xw3M',
		),
	),
);
```