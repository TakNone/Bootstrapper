# messages.getReplies

**Description** : *Get messages in a reply thread*

**Layer** : 218

```tl
messages.getReplies#22ddd30c peer:InputPeer msg_id:int offset_id:int offset_date:int add_offset:int limit:int max_id:int min_id:int hash:long = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>offset_date</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>add_offset</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>max_id</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with ID smaller than max_id |
| <mark>min_id</mark> | [`int`](type/int) | If a positive value was transferred, the method will return only messages with ID bigger than min_id |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

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
| **TOPIC_ID_INVALID** | `400` | The specified topic ID is invalid |

---

## Example

```php
$messagesMessages = $client->messages->getReplies(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 30,
	offset_id : 0,
	offset_date : 0,
	add_offset : 27,
	limit : 57,
	max_id : 7,
	min_id : 52,
	hash : 0,
);
```