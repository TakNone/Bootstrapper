# updateNewChannelMessage

**Description** : *A new message was sent in a channel/supergroup*

**Layer** : 216

```tl
updateNewChannelMessage#62ba04d9 message:Message pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | New message |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewChannelMessage(
	message : $client->messageEmpty(
		id : 32,
		peer_id : $client->peerUser(
			user_id : 2147984260733181064,
		),
	),
	pts : 4,
	pts_count : 35,
);
```