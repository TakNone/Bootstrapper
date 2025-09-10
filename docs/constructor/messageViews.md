# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 214

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
	views : 51,
	forwards : 91,
	replies : $client->messageReplies(
		comments : true,
		replies : 42,
		replies_pts : 46,
		recent_repliers : array(
			$client->peerUser(
				user_id : -7873130047019313270,
			),
			$client->peerChat(
				chat_id : -2395834781195433039,
			),
			$client->peerChannel(
				channel_id : 4466857848717095727,
			),
		),
		channel_id : -2355014705332025531,
		max_id : 1,
		read_max_id : 62,
	),
);
```