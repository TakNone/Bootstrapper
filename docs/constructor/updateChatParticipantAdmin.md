# updateChatParticipantAdmin

**Description** : *Admin permissions of a user in a basic group were changed*

**Layer** : 229

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
| <mark>version</mark> | [`int`](type/int) | Used similarly to pts values to deduplicate/update outdated chat information as specified here » |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantAdmin(
	chat_id : 5519968105205325529,
	user_id : -7329433739738857530,
	is_admin : true,
	version : 49,
);
```