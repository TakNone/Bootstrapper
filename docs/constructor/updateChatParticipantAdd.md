# updateChatParticipantAdd

**Description** : *New group member*

**Layer** : 233

```tl
updateChatParticipantAdd#3dda5451 chat_id:long user_id:long inviter_id:long date:int version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the new member |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user, who added member to the group |
| <mark>date</mark> | [`int`](type/int) | When was the participant added |
| <mark>version</mark> | [`int`](type/int) | Used similarly to pts values to deduplicate/update outdated chat information as specified here » |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantAdd(
	chat_id : 9191382393158455359,
	user_id : 1646046175764098664,
	inviter_id : -4934438597854781735,
	date : 51,
	version : 80,
);
```