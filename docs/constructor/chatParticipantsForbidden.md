# chatParticipantsForbidden

**Description** : *Info on members is unavailable*

**Layer** : 225

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
	chat_id : 1026151107148635260,
	self_participant : $client->chatParticipant(
		user_id : 554763026871665991,
		inviter_id : 6440186431607335874,
		date : 98,
		rank : 'Ds0rJoQOngBjc3iC',
	),
);
```