# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

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
	views : 94,
	forwards : 43,
	replies : $client->messageReplies(
		comments : true,
		replies : 74,
		replies_pts : 76,
		recent_repliers : array(
			$client->peerUser(
				user_id : 8600817785838623324,
			),
			$client->peerChat(
				chat_id : 398347548316431913,
			),
			$client->peerChannel(
				channel_id : 3890848281874898944,
			),
		),
		channel_id : 5816177484529013823,
		max_id : 53,
		read_max_id : 96,
	),
);
```