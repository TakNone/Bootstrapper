# messages.getPollResults

**Description** : *Get poll results*

**Layer** : 233

```tl
messages.getPollResults#eda3e33b peer:InputPeer msg_id:int poll_hash:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the poll was found |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of poll message |
| <mark>poll_hash</mark> | [`long`](type/long) | Pass the poll.hash from the last received poll state; the server skips returning unchanged data |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->getPollResults(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 98,
	poll_hash : -3244434240418498969,
);
```