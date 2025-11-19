# messages.getUnreadMentions

**Description** : *Get unread messages where we were mentioned*

**Layer** : 218

```tl
messages.getUnreadMentions#f107e790 flags:# peer:InputPeer top_msg_id:flags.0?int offset_id:int add_offset:int limit:int max_id:int min_id:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to look for mentions |
| **top_msg_id** | [`flags.0?int`](type/int) | If set, considers only messages within the specified forum topic |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>add_offset</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>max_id</mark> | [`int`](type/int) | Maximum message ID to return, see pagination |
| <mark>min_id</mark> | [`int`](type/int) | Minimum message ID to return, see pagination |

---

## Result

[messages.Messages](type/messages.Messages)

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
$messagesMessages = $client->messages->getUnreadMentions(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 17,
	offset_id : 0,
	add_offset : 39,
	limit : 9,
	max_id : 68,
	min_id : 2,
);
```