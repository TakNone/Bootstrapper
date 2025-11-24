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
		chat_id : -364174872642720357,
		self_participant : $client->chatParticipant(
			user_id : -5954145829914038383,
			inviter_id : -7721474574766642282,
			date : 96,
		),
	),
);
```