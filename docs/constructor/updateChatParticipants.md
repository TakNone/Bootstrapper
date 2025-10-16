# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 216

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
		chat_id : -7724603116142907942,
		self_participant : $client->chatParticipant(
			user_id : -8591643049676234793,
			inviter_id : -3891144984653167608,
			date : 1,
		),
	),
);
```