# chatParticipant

**Description** : *Basic group member \(not usable by supergroups\)*

**Layer** : 229

```tl
chatParticipant#38e79fde flags:# user_id:long inviter_id:long date:int rank:flags.0?string = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | Member user ID |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user that added the member to the group |
| <mark>date</mark> | [`int`](type/int) | Date added to the group |
| **rank** | [`flags.0?string`](type/string) | The participant's tag » |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipant(
	user_id : -1028461548771173020,
	inviter_id : -7954404212075357532,
	date : 22,
	rank : 'I9tOyw5EDxS7FXlA',
);
```