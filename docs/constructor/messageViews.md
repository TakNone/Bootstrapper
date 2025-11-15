# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 216

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
	views : 31,
	forwards : 72,
	replies : $client->messageReplies(
		comments : true,
		replies : 53,
		replies_pts : 67,
		recent_repliers : array(
			$client->peerUser(
				user_id : -4410440937511992186,
			),
			$client->peerChat(
				chat_id : 7923044873562359345,
			),
			$client->peerChannel(
				channel_id : 8054268930683043227,
			),
		),
		channel_id : 1452157267015479472,
		max_id : 99,
		read_max_id : 31,
	),
);
```