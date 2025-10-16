# messages.readSavedHistory

**Description** : *Mark messages as read in a monoforum topic &raquo;*

**Layer** : 216

```tl
messages.readSavedHistory#ba4a3b5b parent_peer:InputPeer peer:InputPeer max_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>parent_peer</mark> | [`InputPeer`](type/InputPeer) | ID of the monoforum group |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | ID of the topic |
| <mark>max_id</mark> | [`int`](type/int) | If a positive value is passed, only messages with identifiers less or equal than the given one will be read |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PARENT_PEER_INVALID** | `400` | The specified parent_peer is invalid |

---

## Example

```php
$bool = $client->messages->readSavedHistory(
	parent_peer : $client->inputPeerEmpty(),
	peer : $client->inputPeerEmpty(),
	max_id : 20,
);
```