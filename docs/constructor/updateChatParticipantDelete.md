# updateChatParticipantDelete

**Description** : *A member has left the basic group*

**Layer** : 233

```tl
updateChatParticipantDelete#e32f3d77 chat_id:long user_id:long version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the user |
| <mark>version</mark> | [`int`](type/int) | Used similarly to pts values to deduplicate/update outdated chat information as specified here » |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantDelete(
	chat_id : 3517458787941091860,
	user_id : 1177241749244348335,
	version : 34,
);
```