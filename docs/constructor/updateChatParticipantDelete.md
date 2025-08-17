# updateChatParticipantDelete

**Description** : *A member has left the group*

**Layer** : 211

```tl
updateChatParticipantDelete#e32f3d77 chat_id:long user_id:long version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user |
| <mark>version</mark> | [`int`](type/int) | Used in basic groups to reorder updates and make sure that all of them was received |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantDelete(
	chat_id : -6694654380971070074,
	user_id : -1352590615304996525,
	version : 32,
);
```