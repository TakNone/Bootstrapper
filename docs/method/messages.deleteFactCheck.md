# messages.deleteFactCheck

**Description** : *Delete a fact\-check from a message*

**Layer** : 214

```tl
messages.deleteFactCheck#d1da940c peer:InputPeer msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ACTION_FORBIDDEN** | `403` | You cannot execute this action |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->deleteFactCheck(
	peer : $client->inputPeerEmpty(),
	msg_id : 49,
);
```