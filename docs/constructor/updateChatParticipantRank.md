# updateChatParticipantRank

**Description** : *The tag &raquo; of a participant of a basic group &raquo; has changed*

**Layer** : 233

```tl
updateChatParticipantRank#bd8367b9 chat_id:long user_id:long rank:string version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Basic group ID |
| <mark>user_id</mark> | [`long`](type/long) | User ID |
| <mark>rank</mark> | [`string`](type/string) | The new tag |
| <mark>version</mark> | [`int`](type/int) | Used similarly to pts values to deduplicate/update outdated chat information as specified here » |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantRank(
	chat_id : 8825606933714084138,
	user_id : -3569181148120893679,
	rank : 'tmJpwBhA359n2NoD',
	version : 34,
);
```