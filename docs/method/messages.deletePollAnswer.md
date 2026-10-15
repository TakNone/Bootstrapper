# messages.deletePollAnswer

**Description** : *Remove an answer option from an open\-answer poll &raquo;*

**Layer** : 229

```tl
messages.deletePollAnswer#ac8505a5 peer:InputPeer msg_id:int option:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the poll is located |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of the poll |
| <mark>option</mark> | [`bytes`](type/bytes) | The option identifier of the answer to remove |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->deletePollAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 7,
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```