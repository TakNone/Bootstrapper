# messageActionPaidMessagesRefunded

**Layer** : 214

```tl
messageActionPaidMessagesRefunded#ac1f1fcd count:int stars:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>stars</mark> | [`long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaidMessagesRefunded(
	count : 47,
	stars : -352708894913669875,
);
```