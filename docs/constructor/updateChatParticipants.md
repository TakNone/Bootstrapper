# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 218

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
		chat_id : 331959046508455252,
		self_participant : $client->chatParticipant(
			user_id : 6500956107501931099,
			inviter_id : 4165138777320480089,
			date : 93,
		),
	),
);
```