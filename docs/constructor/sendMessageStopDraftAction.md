# sendMessageStopDraftAction

**Layer** : 233

```tl
sendMessageStopDraftAction#fbf902b0 random_id:long = SendMessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |

---

## Type

[SendMessageAction](type/SendMessageAction)

---

## Example

```php
$sendMessageAction = $client->sendMessageStopDraftAction(
	random_id : 1996862593794183710,
);
```