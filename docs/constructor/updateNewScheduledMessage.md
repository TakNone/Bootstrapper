# updateNewScheduledMessage

**Description** : *A message was added to the schedule queue of a chat*

**Layer** : 216

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
		id : 31,
		peer_id : $client->peerUser(
			user_id : 8872522332153885476,
		),
	),
);
```