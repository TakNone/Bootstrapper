# chatParticipantsForbidden

**Description** : *Info on members is unavailable*

**Layer** : 227

```tl
chatParticipantsForbidden#8763d3e1 flags:# chat_id:long self_participant:flags.0?ChatParticipant = ChatParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>chat_id</mark> | [`long`](type/long) | Group ID |
| **self_participant** | [`flags.0?ChatParticipant`](type/ChatParticipant) | Info about the group membership of the current user |

---

## Type

[ChatParticipants](type/ChatParticipants)

---

## Example

```php
$chatParticipants = $client->chatParticipantsForbidden(
	chat_id : -8878885742860725046,
	self_participant : $client->chatParticipant(
		user_id : -8042850282896228058,
		inviter_id : -8737467505747622049,
		date : 20,
		rank : 'RkQb1LMWv2DsteT4',
	),
);
```