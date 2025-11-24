# messages.getUnreadReactions

**Description** : *Get unread reactions to messages you sent*

**Layer** : 218

```tl
messages.getUnreadReactions#bd7f90ac flags:# peer:InputPeer top_msg_id:flags.0?int saved_peer_id:flags.1?InputPeer offset_id:int add_offset:int limit:int max_id:int min_id:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| **top_msg_id** | [`flags.0?int`](type/int) | If set, considers only reactions to messages within the specified forum topic |
| **saved_peer_id** | [`flags.1?InputPeer`](type/InputPeer) | If set, must be equal to the ID of a monoforum topic: will affect that topic in the monoforum passed in peer |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>add_offset</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>max_id</mark> | [`int`](type/int) | Only return reactions for messages up until this message ID |
| <mark>min_id</mark> | [`int`](type/int) | Only return reactions for messages starting from this message ID |

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
$messagesMessages = $client->messages->getUnreadReactions(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 96,
	saved_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset_id : 0,
	add_offset : 78,
	limit : 67,
	max_id : 69,
	min_id : 69,
);
```