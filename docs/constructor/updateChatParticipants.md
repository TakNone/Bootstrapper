# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 211

```tl
updateChatParticipants#7761198 participants:ChatParticipants = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participants</mark> | [`ChatParticipants`](type/ChatParticipants) | Updated chat participants |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipants(
	participants : $client->chatParticipantsForbidden(
		chat_id : 6993939350283208336,
		self_participant : $client->chatParticipant(
			user_id : -3658209424671506922,
			inviter_id : 8505019303063690442,
			date : 51,
		),
	),
);
```