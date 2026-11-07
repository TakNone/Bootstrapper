# chatParticipantAdmin

**Description** : *Basic group admin \(not usable by supergroups\)*

**Layer** : 229

```tl
chatParticipantAdmin#360d5d2 flags:# user_id:long inviter_id:long date:int rank:flags.0?string = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | ID of a group member that is admin |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user that added the member to the group |
| <mark>date</mark> | [`int`](type/int) | Date when the user was added |
| **rank** | [`flags.0?string`](type/string) | The participant's tag » |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipantAdmin(
	user_id : -8434473294975116322,
	inviter_id : 5861540119395171642,
	date : 99,
	rank : 'OUknaZpu15QoqsJB',
);
```