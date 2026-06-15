# updateJoinChatWebViewDecision

**Layer** : 227

```tl
updateJoinChatWebViewDecision#bdac7e70 peer:Peer query_id:long result:JoinChatBotResult = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>result</mark> | [`JoinChatBotResult`](type/JoinChatBotResult) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateJoinChatWebViewDecision(
	peer : $client->peerUser(
		user_id : -6184854412138454887,
	),
	query_id : 2024008584487749882,
	result : $client->joinChatBotResultApproved(),
);
```