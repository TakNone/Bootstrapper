# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 214

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
		chat_id : -2782947343938468996,
		self_participant : $client->chatParticipant(
			user_id : -1125565838726769589,
			inviter_id : 8602117650814675251,
			date : 61,
		),
	),
);
```