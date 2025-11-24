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
	views : 69,
	forwards : 70,
	replies : $client->messageReplies(
		comments : true,
		replies : 40,
		replies_pts : 54,
		recent_repliers : array(
			$client->peerUser(
				user_id : 5457527293417134035,
			),
			$client->peerChat(
				chat_id : 2984799093939800658,
			),
			$client->peerChannel(
				channel_id : 5229239370747815068,
			),
		),
		channel_id : -4758166864571609146,
		max_id : 79,
		read_max_id : 79,
	),
);
```