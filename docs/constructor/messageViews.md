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
	views : 39,
	forwards : 97,
	replies : $client->messageReplies(
		comments : true,
		replies : 79,
		replies_pts : 60,
		recent_repliers : array(
			$client->peerUser(
				user_id : -352780344819980255,
			),
			$client->peerChat(
				chat_id : 342023897537752886,
			),
			$client->peerChannel(
				channel_id : -8688414811900500884,
			),
		),
		channel_id : -5011874322921674346,
		max_id : 12,
		read_max_id : 85,
	),
);
```