# messages.deleteSavedHistory

**Description** : *Deletes messages forwarded from a specific peer to saved messages &raquo;*

**Layer** : 211

```tl
messages.deleteSavedHistory#4dc5085f flags:# parent_peer:flags.0?InputPeer peer:InputPeer max_id:int min_date:flags.2?int max_date:flags.3?int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer, whose messages will be deleted from saved messages » |
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
	parent_peer : $client->inputPeerEmpty(),
	peer : $client->inputPeerEmpty(),
	max_id : 37,
	min_date : 52,
	max_date : 89,
);
```