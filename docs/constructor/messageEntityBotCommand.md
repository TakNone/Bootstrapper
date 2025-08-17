# messageEntityBotCommand

**Description** : *Message entity representing a bot /command*

**Layer** : 211

```tl
messageEntityBotCommand#6cef8ac7 offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityBotCommand(
	offset : 1,
	length : 69,
);
```