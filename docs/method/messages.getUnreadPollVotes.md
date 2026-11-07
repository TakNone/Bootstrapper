# messages.getUnreadPollVotes

**Description** : *Get messages containing polls with unread votes &raquo;*

**Layer** : 233

```tl
messages.getUnreadPollVotes#43286cf2 flags:# peer:InputPeer top_msg_id:flags.0?int offset_id:int add_offset:int limit:int max_id:int min_id:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat to fetch unread poll votes from |
| **top_msg_id** | [`flags.0?int`](type/int) | If the chat is a forum, restrict results to this topic |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>add_offset</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>max_id</mark> | [`int`](type/int) | Only return messages with IDs less than or equal to this value |
| <mark>min_id</mark> | [`int`](type/int) | Only return messages with IDs greater than or equal to this value |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getUnreadPollVotes(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 6,
	offset_id : 0,
	add_offset : 38,
	limit : 31,
	max_id : 99,
	min_id : 37,
);
```