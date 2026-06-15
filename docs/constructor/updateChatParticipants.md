# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 227

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
		chat_id : -246884684855949533,
		self_participant : $client->chatParticipant(
			user_id : -4124105567816947715,
			inviter_id : 6188806883655026513,
			date : 48,
			rank : 'AL243tkbqnfF7Slm',
		),
	),
);
```