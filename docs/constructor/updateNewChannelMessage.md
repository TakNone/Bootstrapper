# updateNewChannelMessage

**Description** : *A new message was sent in a channel/supergroup*

**Layer** : 211

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
		id : 21,
		peer_id : $client->peerUser(
			user_id : 7449362762809554982,
		),
	),
	pts : 11,
	pts_count : 82,
);
```