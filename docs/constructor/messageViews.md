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
	views : 55,
	forwards : 72,
	replies : $client->messageReplies(
		comments : true,
		replies : 64,
		replies_pts : 79,
		recent_repliers : array(
			$client->peerUser(
				user_id : -2526338853022783010,
			),
			$client->peerChat(
				chat_id : 3213492723047624764,
			),
			$client->peerChannel(
				channel_id : 1157820738993592725,
			),
		),
		channel_id : 1325097552005214559,
		max_id : 47,
		read_max_id : 91,
	),
);
```