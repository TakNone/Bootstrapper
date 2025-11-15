# updateNewScheduledMessage

**Description** : *A message was added to the schedule queue of a chat*

**Layer** : 218

```tl
updateNewScheduledMessage#39a51dfb message:Message = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | Message |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewScheduledMessage(
	message : $client->messageEmpty(
		id : 0,
		peer_id : $client->peerUser(
			user_id : 658446174142251804,
		),
	),
);
```