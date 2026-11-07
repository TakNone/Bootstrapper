# updateChatParticipantRank

**Description** : *The tag &raquo; of a participant of a basic group &raquo; has changed*

**Layer** : 229

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
	chat_id : 3768854719558879980,
	user_id : -6306662162840126964,
	rank : 'mLjr8sY9VaJT0RCy',
	version : 61,
);
```