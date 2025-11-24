# payments.transferStarGift

**Description** : *Transfer a collectible gift to another user or channel: can only be used if transfer is free \(i\.e\. messageActionStarGiftUnique\.transfer\_stars is not set\); see here &raquo; for more info on the full flow \(including the different flow to use in case the transfer isn&#039;t free\)*

**Layer** : 218

```tl
payments.transferStarGift#7f18176a stargift:InputSavedStarGift to_id:InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The gift to transfer |
| <mark>to_id</mark> | [`InputPeer`](type/InputPeer) | Destination peer |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PAYMENT_REQUIRED** | `400` | Payment is required for this action, see here » for more info |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |
| **STARGIFT_NOT_FOUND** | `400` | The specified gift was not found |
| **STARGIFT_OWNER_INVALID** | `400` | You cannot transfer or sell a gift owned by another user |
| **STARGIFT_PEER_INVALID** | `400` | The specified inputSavedStarGiftChat.peer is invalid |

---

## Example

```php
$updates = $client->payments->transferStarGift(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 4,
	),
	to_id : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```