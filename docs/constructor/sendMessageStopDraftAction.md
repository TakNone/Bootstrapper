# sendMessageStopDraftAction

**Layer** : 229

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
	random_id : 4848978218109902149,
);
```