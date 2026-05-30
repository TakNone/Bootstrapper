# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 222

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
		chat_id : 6721483211458523901,
		self_participant : $client->chatParticipant(
			user_id : 280217935578881376,
			inviter_id : 1264108861502815313,
			date : 60,
		),
	),
);
```