# messageActionTTLChange

**Layer** : 216

```tl
messageActionTTLChange#55555552 ttl:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>ttl</mark> | [`int`](type/int) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionTTLChange(
	ttl : 68,
);
```