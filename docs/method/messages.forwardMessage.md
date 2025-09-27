# messages.forwardMessage

**Description** : *Forwards single messages*

**Layer** : 214

```tl
messages.forwardMessage#33963bf9 peer:InputPeer id:int random_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | User or chat where a message will be forwarded |
| <mark>id</mark> | [`int`](type/int) | Forwarded message ID |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->forwardMessage(
	peer : $client->inputPeerEmpty(),
	id : 53,
	random_id : -8260409999066461877,
);
```