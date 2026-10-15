# updateChatParticipants

**Description** : *The participants of a basic group &raquo; changed*

**Layer** : 229

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
		chat_id : -7396473657683915988,
		self_participant : $client->chatParticipant(
			user_id : -9156928638676663189,
			inviter_id : 547593344585007536,
			date : 75,
			rank : 'ciWdSeDrGmbpBhOH',
		),
	),
);
```