# messages.readMentions

**Description** : *Mark mentions as read*

**Layer** : 216

```tl
messages.readMentions#36e5bf4d flags:# peer:InputPeer top_msg_id:flags.0?int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Dialog |
| **top_msg_id** | [`flags.0?int`](type/int) | Mark as read only mentions within the specified forum topic |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesAffectedHistory = $client->messages->readMentions(
	peer : $client->inputPeerEmpty(),
	top_msg_id : 50,
);
```