# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 227

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
	views : 51,
	forwards : 38,
	replies : $client->messageReplies(
		comments : true,
		replies : 18,
		replies_pts : 68,
		recent_repliers : array(
			$client->peerUser(
				user_id : -6850249322800776730,
			),
			$client->peerChat(
				chat_id : -3016895329924526766,
			),
			$client->peerChannel(
				channel_id : -1858429752504996732,
			),
		),
		channel_id : 5145851097821612129,
		max_id : 72,
		read_max_id : 64,
	),
);
```