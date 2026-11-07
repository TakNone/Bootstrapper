# messageActionChatJoinedViaCommunity

**Layer** : 233

```tl
messageActionChatJoinedViaCommunity#4a8bfe80 community_id:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>community_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionChatJoinedViaCommunity(
	community_id : 6404166085392850031,
);
```