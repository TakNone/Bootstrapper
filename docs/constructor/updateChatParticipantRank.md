# updateChatParticipantRank

**Layer** : 227

```tl
updateChatParticipantRank#bd8367b9 chat_id:long user_id:long rank:string version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>rank</mark> | [`string`](type/string) | NOTHING |
| <mark>version</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantRank(
	chat_id : -1819827706099225036,
	user_id : -6569772884316070545,
	rank : '39V651RZMmvYLbpE',
	version : 13,
);
```