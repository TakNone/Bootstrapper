# messageEntityUrl

**Description** : *Message entity representing an in\-text url: https://google\.com; for text urls, use messageEntityTextUrl*

**Layer** : 218

```tl
messageEntityUrl#6ed02538 offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityUrl(
	offset : 0,
	length : 96,
);
```