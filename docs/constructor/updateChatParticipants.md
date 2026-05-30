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
		chat_id : -7350460010674340831,
		self_participant : $client->chatParticipant(
			user_id : 6635184568737355970,
			inviter_id : -7170059290910789961,
			date : 16,
		),
	),
);
```