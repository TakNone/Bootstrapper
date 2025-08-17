# messageViews

**Description** : *View, forward counter + info about replies of a specific message*

**Layer** : 211

```tl
messageViews#455b853d flags:# views:flags.0?int forwards:flags.1?int replies:flags.2?MessageReplies = MessageViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **views** | [`flags.0?int`](type/int) | View count of message |
| **forwards** | [`flags.1?int`](type/int) | Forward count of message |
| **replies** | [`flags.2?MessageReplies`](type/MessageReplies) | Reply and thread information of message |

---

## Type

[MessageViews](type/MessageViews)

---

## Example

```php
$messageViews = $client->messageViews(
	views : 54,
	forwards : 44,
	replies : $client->messageReplies(
		comments : true,
		replies : 20,
		replies_pts : 39,
		recent_repliers : array(
			$client->peerUser(
				user_id : 2123842223598844630,
			),
			$client->peerChat(
				chat_id : 7749602541404693026,
			),
			$client->peerChannel(
				channel_id : -3847993208393491230,
			),
		),
		channel_id : 723226352545764937,
		max_id : 32,
		read_max_id : 92,
	),
);
```