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
		chat_id : 5302389431937166881,
		self_participant : $client->chatParticipant(
			user_id : -9087940058869660659,
			inviter_id : 8471291776254855031,
			date : 43,
		),
	),
);
```