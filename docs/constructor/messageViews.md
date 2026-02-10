# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 222

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
	views : 57,
	forwards : 60,
	replies : $client->messageReplies(
		comments : true,
		replies : 84,
		replies_pts : 56,
		recent_repliers : array(
			$client->peerUser(
				user_id : -1789001194573018833,
			),
			$client->peerChat(
				chat_id : -2465906933428855618,
			),
			$client->peerChannel(
				channel_id : 7715296148578050473,
			),
		),
		channel_id : 8110373963643365098,
		max_id : 91,
		read_max_id : 37,
	),
);
```