# messageEntityHashtag

**Description** : *\#hashtag message entity*

**Layer** : 218

```tl
messageEntityHashtag#6f635b0d offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityHashtag(
	offset : 0,
	length : 5,
);
```