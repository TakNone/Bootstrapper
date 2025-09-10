# updateNewScheduledMessage

**Layer** : 214

```tl
updateNewScheduledMessage#39a51dfb message:Message = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewScheduledMessage(
	message : $client->messageEmpty(
		id : 45,
		peer_id : $client->peerUser(
			user_id : 1204036733767356378,
		),
	),
);
```