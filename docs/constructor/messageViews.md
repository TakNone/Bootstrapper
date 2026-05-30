# messageViews

**Description** : *View, forward counter \+ info about replies of a specific message*

**Layer** : 225

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
	views : 93,
	forwards : 17,
	replies : $client->messageReplies(
		comments : true,
		replies : 96,
		replies_pts : 7,
		recent_repliers : array(
			$client->peerUser(
				user_id : 4570668979714769224,
			),
			$client->peerChat(
				chat_id : -8474987297083116376,
			),
			$client->peerChannel(
				channel_id : 1379946912590157654,
			),
		),
		channel_id : 3737649910575533728,
		max_id : 86,
		read_max_id : 91,
	),
);
```