# updateMessageWidgetData

**Layer** : 233

```tl
updateMessageWidgetData#bbb078dd flags:# peer:Peer msg_id:int public_data:flags.0?string public_data_hash:flags.0?long chat_data:flags.1?string pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| **public_data** | [`flags.0?string`](type/string) | NOTHING |
| **public_data_hash** | [`flags.0?long`](type/long) | NOTHING |
| **chat_data** | [`flags.1?string`](type/string) | NOTHING |
| <mark>pts</mark> | [`int`](type/int) | NOTHING |
| <mark>pts_count</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessageWidgetData(
	peer : $client->peerUser(
		user_id : 3085019209676186953,
	),
	msg_id : 31,
	public_data : 'My1cXZP7B9bIzUpj',
	public_data_hash : -2737481148635848352,
	chat_data : 'RFdyDmoYLnjUQI4c',
	pts : 4,
	pts_count : 62,
);
```