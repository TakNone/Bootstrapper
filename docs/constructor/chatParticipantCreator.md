# chatParticipantCreator

**Description** : *Represents the creator of the group*

**Layer** : 216

```tl
chatParticipantCreator#e46bcee4 user_id:long = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user that created the group |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipantCreator(
	user_id : -1559734128569121595,
);
```