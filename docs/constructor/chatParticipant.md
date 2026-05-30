# chatParticipant

**Description** : *Group member*

**Layer** : 225

```tl
chatParticipant#38e79fde flags:# user_id:long inviter_id:long date:int rank:flags.0?string = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | Member user ID |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user that added the member to the group |
| <mark>date</mark> | [`int`](type/int) | Date added to the group |
| **rank** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipant(
	user_id : -8539473077750451658,
	inviter_id : -769735974741592657,
	date : 46,
	rank : '2UWOPhkS96jG5ADZ',
);
```