# chatParticipantsForbidden

**Description** : *Info on members is unavailable*

**Layer** : 216

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
	chat_id : -5272086391822248961,
	self_participant : $client->chatParticipant(
		user_id : -4048615386871592906,
		inviter_id : -4392194449142385675,
		date : 55,
	),
);
```