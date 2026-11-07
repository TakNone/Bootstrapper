# chatParticipantCreator

**Description** : *Represents the creator of the basic group &raquo;*

**Layer** : 233

```tl
chatParticipantCreator#e1f867b8 flags:# user_id:long rank:flags.0?string = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that created the group |
| **rank** | [`flags.0?string`](type/string) | The participant's tag » |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipantCreator(
	user_id : -4174771341813481721,
	rank : '5j2ASFlHr1fBZNRb',
);
```