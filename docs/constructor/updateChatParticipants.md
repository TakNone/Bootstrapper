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
		chat_id : 6037894561828441531,
		self_participant : $client->chatParticipant(
			user_id : 7665633445006751352,
			inviter_id : 6150123597251449935,
			date : 39,
		),
	),
);
```