# chatParticipantAdmin

**Description** : *Chat admin*

**Layer** : 225

```tl
chatParticipantAdmin#360d5d2 flags:# user_id:long inviter_id:long date:int rank:flags.0?string = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | ID of a group member that is admin |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user that added the member to the group |
| <mark>date</mark> | [`int`](type/int) | Date when the user was added |
| **rank** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipantAdmin(
	user_id : -533792968720184037,
	inviter_id : -5014449768677462156,
	date : 46,
	rank : 'CYb7ZmXl1j2kRaML',
);
```