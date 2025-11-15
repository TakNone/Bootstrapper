# chatParticipantsForbidden

**Description** : *Info on members is unavailable*

**Layer** : 218

```tl
chatParticipantsForbidden#8763d3e1 flags:# chat_id:long self_participant:flags.0?ChatParticipant = ChatParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>chat_id</mark> | [`long`](type/long) | Group ID |
| **self_participant** | [`flags.0?ChatParticipant`](type/ChatParticipant) | Info about the group membership of the current user |

---

## Type

[ChatParticipants](type/ChatParticipants)

---

## Example

```php
$chatParticipants = $client->chatParticipantsForbidden(
	chat_id : -7386626563793622948,
	self_participant : $client->chatParticipant(
		user_id : 7509021021639452984,
		inviter_id : 4340208116429432895,
		date : 9,
	),
);
```