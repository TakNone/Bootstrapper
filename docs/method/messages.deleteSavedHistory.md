# messages.deleteSavedHistory

**Description** : *Deletes messages from a monoforum topic &raquo;, or deletes messages forwarded from a specific peer to saved messages &raquo;*

**Layer** : 218

```tl
messages.deleteSavedHistory#4dc5085f flags:# parent_peer:flags.0?InputPeer peer:InputPeer max_id:int min_date:flags.2?int max_date:flags.3?int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | If set, affects the messages of the passed monoforum topic », otherwise affects saved messages » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer, whose messages will be deleted from saved messages », or the ID of the topic |
| <mark>max_id</mark> | [`int`](type/int) | Maximum ID of message to delete |
| **min_date** | [`flags.2?int`](type/int) | Delete all messages newer than this UNIX timestamp |
| **max_date** | [`flags.3?int`](type/int) | Delete all messages older than this UNIX timestamp |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesAffectedHistory = $client->messages->deleteSavedHistory(
	parent_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	max_id : 44,
	min_date : 46,
	max_date : 43,
);
```