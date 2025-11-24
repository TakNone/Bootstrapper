# messageEntityStrike

**Description** : *Message entity representing strikethrough text*

**Layer** : 218

```tl
messageEntityStrike#bf0693d4 offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityStrike(
	offset : 0,
	length : 24,
);
```