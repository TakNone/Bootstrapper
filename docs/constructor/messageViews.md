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
	views : 70,
	forwards : 31,
	replies : $client->messageReplies(
		comments : true,
		replies : 90,
		replies_pts : 65,
		recent_repliers : array(
			$client->peerUser(
				user_id : 7526630426824910919,
			),
			$client->peerChat(
				chat_id : -7393587649551344109,
			),
			$client->peerChannel(
				channel_id : 6153131671066814442,
			),
		),
		channel_id : 4970678597835828561,
		max_id : 69,
		read_max_id : 90,
	),
);
```