# messageEntityEmail

**Description** : *Message entity representing an email@example\.com*

**Layer** : 216

```tl
messageEntityEmail#64e475c2 offset:int length:int = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityEmail(
	offset : 0,
	length : 48,
);
```