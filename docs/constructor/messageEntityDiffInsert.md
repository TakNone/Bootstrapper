# messageEntityDiffInsert

**Layer** : 225

```tl
messageEntityDiffInsert#71777116 offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityDiffInsert(
	offset : 0,
	length : 61,
);
```