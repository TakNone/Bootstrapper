# messages.getPollResults

**Description** : *Get poll results*

**Layer** : 218

```tl
messages.getPollResults#73bb643b peer:InputPeer msg_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the poll was found |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of poll message |

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
	msg_id : 69,
);
```