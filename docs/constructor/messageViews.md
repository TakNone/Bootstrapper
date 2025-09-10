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
	views : 98,
	forwards : 25,
	replies : $client->messageReplies(
		comments : true,
		replies : 21,
		replies_pts : 82,
		recent_repliers : array(
			$client->peerUser(
				user_id : 5302062072723317673,
			),
			$client->peerChat(
				chat_id : 2995480753340297405,
			),
			$client->peerChannel(
				channel_id : -2666789938517005312,
			),
		),
		channel_id : -6451498549349351029,
		max_id : 47,
		read_max_id : 87,
	),
);
```