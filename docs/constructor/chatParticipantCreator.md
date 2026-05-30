# chatParticipantCreator

**Description** : *Represents the creator of the group*

**Layer** : 225

```tl
chatParticipantCreator#e1f867b8 flags:# user_id:long rank:flags.0?string = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that created the group |
| **rank** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipantCreator(
	user_id : -6695632739667439536,
	rank : 'CMKr0O5dITatxFXk',
);
```