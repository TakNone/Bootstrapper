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
	chat_id : -3743906177020494391,
	self_participant : $client->chatParticipant(
		user_id : 3795397776324248111,
		inviter_id : 6800086880312284961,
		date : 73,
		rank : '2Qn5q1Pg89zWT4XH',
	),
);
```