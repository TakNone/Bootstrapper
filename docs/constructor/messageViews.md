# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 233

```tl
messageViews#455b853d flags:# views:flags.0?int forwards:flags.1?int replies:flags.2?MessageReplies = MessageViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	views : 85,
	forwards : 82,
	replies : $client->messageReplies(
		comments : true,
		replies : 6,
		replies_pts : 91,
		recent_repliers : array(
			$client->peerUser(
				user_id : 6623550351660341468,
			),
			$client->peerChat(
				chat_id : 7552012051621235006,
			),
			$client->peerChannel(
				channel_id : -1401312976116678011,
			),
		),
		channel_id : -6026868630235393702,
		max_id : 14,
		read_max_id : 53,
	),
);
```