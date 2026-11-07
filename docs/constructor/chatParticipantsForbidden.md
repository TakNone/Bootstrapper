# chatParticipantsForbidden

**Description** : *The full list of members of basic groups &raquo; is not available to you, because you were banned*

**Layer** : 233

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
	chat_id : -2674052609946431296,
	self_participant : $client->chatParticipant(
		user_id : 552266004239154116,
		inviter_id : 3756182320410496590,
		date : 23,
		rank : '4hZjnQ7uE2bm19AB',
	),
);
```