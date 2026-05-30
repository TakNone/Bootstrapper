# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 225

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
		chat_id : -4240469740700113412,
		self_participant : $client->chatParticipant(
			user_id : -3938085647488144099,
			inviter_id : -2443809493599299528,
			date : 99,
			rank : 'WiqkSAs31U7M0brl',
		),
	),
);
```