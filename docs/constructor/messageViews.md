# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 218

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
	views : 92,
	forwards : 66,
	replies : $client->messageReplies(
		comments : true,
		replies : 61,
		replies_pts : 52,
		recent_repliers : array(
			$client->peerUser(
				user_id : 5882745164081514193,
			),
			$client->peerChat(
				chat_id : 4326028998361438099,
			),
			$client->peerChannel(
				channel_id : 8147190554624808576,
			),
		),
		channel_id : -9049668278795064133,
		max_id : 46,
		read_max_id : 53,
	),
);
```