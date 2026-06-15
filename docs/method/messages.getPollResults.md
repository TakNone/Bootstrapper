# messages.getPollResults

**Description** : *Get poll results*

**Layer** : 227

```tl
messages.getPollResults#eda3e33b peer:InputPeer msg_id:int poll_hash:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the poll was found |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of poll message |
| <mark>poll_hash</mark> | [`long`](type/long) | NOTHING |

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
	msg_id : 79,
	poll_hash : -5957053614507858828,
);
```