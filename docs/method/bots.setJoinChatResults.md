# bots.setJoinChatResults

**Layer** : 227

```tl
bots.setJoinChatResults#e71a4810 query_id:long result:JoinChatBotResult = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>result</mark> | [`JoinChatBotResult`](type/JoinChatBotResult) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->bots->setJoinChatResults(
	query_id : 6210731039847081252,
	result : $client->joinChatBotResultApproved(),
);
```