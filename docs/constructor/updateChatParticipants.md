# updateChatParticipants

**Description** : *The participants of a basic group &raquo; changed*

**Layer** : 233

```tl
updateChatParticipants#7761198 participants:ChatParticipants = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>participants</mark> | [`ChatParticipants`](type/ChatParticipants) | Updated chat participants (also contains the version used to deduplicate/update outdated chat information as specified here ») |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipants(
	participants : $client->chatParticipantsForbidden(
		chat_id : 7754480733475099377,
		self_participant : $client->chatParticipant(
			user_id : -286154607643698633,
			inviter_id : -3952491051378623512,
			date : 57,
			rank : 'TKW9vV63CHaUmYXn',
		),
	),
);
```