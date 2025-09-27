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
	views : 26,
	forwards : 9,
	replies : $client->messageReplies(
		comments : true,
		replies : 74,
		replies_pts : 4,
		recent_repliers : array(
			$client->peerUser(
				user_id : -5661343858412554740,
			),
			$client->peerChat(
				chat_id : -8895342984329504196,
			),
			$client->peerChannel(
				channel_id : 742032936533020483,
			),
		),
		channel_id : -1941241897682707096,
		max_id : 66,
		read_max_id : 62,
	),
);
```