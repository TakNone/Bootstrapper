# messageEntityTonAddress

**Layer** : 233

```tl
messageEntityTonAddress#fdabbfcd offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityTonAddress(
	offset : 0,
	length : 72,
);
```