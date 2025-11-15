# messageReplies

**Description** : *Info about the comment section of a channel post, a simple message thread, a forum topic, or a direct messages topic \(all features ultimately based on message threads\)*

**Layer** : 216

```tl
messageReplies#83d60fc2 flags:# comments:flags.0?true replies:int replies_pts:int recent_repliers:flags.1?Vector<Peer> channel_id:flags.0?long max_id:flags.2?int read_max_id:flags.3?int = MessageReplies;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **comments** | [`flags.0?true`](type/true) | Whether this constructor contains information about the comment section of a channel post, or a simple message thread |
| <mark>replies</mark> | [`int`](type/int) | Contains the total number of replies in this thread or comment section |
| <mark>replies_pts</mark> | [`int`](type/int) | PTS of the message that started this thread |
| **recent_repliers** | [`flags.1?Vector<Peer>`](type/Peer) | For channel post comments, contains information about the last few comment posters for a specific thread, to show a small list of commenter profile pictures in client previews |
| **channel_id** | [`flags.0?long`](type/long) | For channel post comments, contains the ID of the associated discussion supergroup |
| **max_id** | [`flags.2?int`](type/int) | ID of the latest message in this thread or comment section |
| **read_max_id** | [`flags.3?int`](type/int) | Contains the ID of the latest read message in this thread or comment section |

---

## Type

[MessageReplies](type/MessageReplies)

---

## Example

```php
$messageReplies = $client->messageReplies(
	comments : true,
	replies : 46,
	replies_pts : 63,
	recent_repliers : array(
		$client->peerUser(
			user_id : -1179569284636256697,
		),
		$client->peerChat(
			chat_id : 3681549037200731322,
		),
		$client->peerChannel(
			channel_id : 8775507476683065885,
		),
	),
	channel_id : -4913456954201017057,
	max_id : 41,
	read_max_id : 13,
);
```