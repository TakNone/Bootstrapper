# messageEntityUnderline

**Description** : *Message entity representing underlined text*

**Layer** : 218

```tl
messageEntityUnderline#9c4e7e8b offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityUnderline(
	offset : 0,
	length : 98,
);
```