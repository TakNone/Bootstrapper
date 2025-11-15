# updateChatParticipantAdmin

**Description** : *Admin permissions of a user in a basic group were changed*

**Layer** : 218

```tl
updateChatParticipantAdmin#d7ca61a2 chat_id:long user_id:long is_admin:Bool version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Chat ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the (de)admined user |
| <mark>is_admin</mark> | [`Bool`](type/Bool) | Whether the user was rendered admin |
| <mark>version</mark> | [`int`](type/int) | Used in basic groups to reorder updates and make sure that all of them was received |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantAdmin(
	chat_id : 7684316965785094880,
	user_id : -2677216001805510055,
	is_admin : false,
	version : 61,
);
```