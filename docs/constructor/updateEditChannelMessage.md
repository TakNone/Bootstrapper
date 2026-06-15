# updateEditChannelMessage

**Description** : *A message was edited in a channel/supergroup*

**Layer** : 227

```tl
updateEditChannelMessage#1b3f4df7 message:Message pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The new message |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEditChannelMessage(
	message : $client->messageEmpty(
		id : 77,
		peer_id : $client->peerUser(
			user_id : -1624203000914475787,
		),
	),
	pts : 85,
	pts_count : 40,
);
```