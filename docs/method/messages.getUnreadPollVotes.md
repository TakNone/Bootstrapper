# messages.getUnreadPollVotes

**Layer** : 227

```tl
messages.getUnreadPollVotes#43286cf2 flags:# peer:InputPeer top_msg_id:flags.0?int offset_id:int add_offset:int limit:int max_id:int min_id:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **top_msg_id** | [`flags.0?int`](type/int) | NOTHING |
| <mark>offset_id</mark> | [`int`](type/int) | NOTHING |
| <mark>add_offset</mark> | [`int`](type/int) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |
| <mark>max_id</mark> | [`int`](type/int) | NOTHING |
| <mark>min_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->getUnreadPollVotes(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 35,
	offset_id : 0,
	add_offset : 16,
	limit : 95,
	max_id : 67,
	min_id : 62,
);
```