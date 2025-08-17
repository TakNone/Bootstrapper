# updateChatParticipants

**Description** : *Composition of chat participants changed*

**Layer** : 211

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
		chat_id : -3494638383603070310,
		self_participant : $client->chatParticipant(
			user_id : -5013428208260859952,
			inviter_id : 4371728948338266096,
			date : 58,
		),
	),
);
```