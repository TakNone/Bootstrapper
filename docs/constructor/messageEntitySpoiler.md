# messageEntitySpoiler

**Description** : *Message entity representing a spoiler*

**Layer** : 216

```tl
messageEntitySpoiler#32ca960f offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntitySpoiler(
	offset : 0,
	length : 32,
);
```