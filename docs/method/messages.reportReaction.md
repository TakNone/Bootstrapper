# messages.reportReaction

**Description** : *Report a message reaction*

**Layer** : 214

```tl
messages.reportReaction#3f64c076 peer:InputPeer id:int reaction_peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| <mark>reaction_peer</mark> | [`InputPeer`](type/InputPeer) | Peer that sent the reaction |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->messages->reportReaction(
	peer : $client->inputPeerEmpty(),
	id : 15,
	reaction_peer : $client->inputPeerEmpty(),
);
```