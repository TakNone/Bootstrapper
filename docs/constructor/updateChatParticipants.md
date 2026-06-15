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
		chat_id : 8147941188185319405,
		self_participant : $client->chatParticipant(
			user_id : -8921143182826386611,
			inviter_id : -4862385875038110382,
			date : 26,
			rank : 'rleFySYcmaDf74sQ',
		),
	),
);
```