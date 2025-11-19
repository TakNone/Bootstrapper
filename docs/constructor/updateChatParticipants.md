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
		chat_id : 6718447525613218580,
		self_participant : $client->chatParticipant(
			user_id : -1896628670731255030,
			inviter_id : -3651573693562220137,
			date : 21,
		),
	),
);
```