# messages.readPollVotes

**Description** : *Mark all unread poll votes &raquo; in a chat as read*

**Layer** : 233

```tl
messages.readPollVotes#1720b4d8 flags:# peer:InputPeer top_msg_id:flags.0?int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat to mark poll votes as read in |
| **top_msg_id** | [`flags.0?int`](type/int) | If the chat is a forum, restrict to this topic |

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
$messagesAffectedHistory = $client->messages->readPollVotes(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 50,
);
```