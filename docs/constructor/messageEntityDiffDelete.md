# messageEntityDiffDelete

**Layer** : 227

```tl
messageEntityDiffDelete#652c1c5 offset:int length:int = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | NOTHING |
| <mark>length</mark> | [`int`](type/int) | NOTHING |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityDiffDelete(
	offset : 0,
	length : 41,
);
```