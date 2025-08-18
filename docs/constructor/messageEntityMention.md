# messageEntityMention

**Description** : *Message entity mentioning a user by @username; messageEntityMentionName can also be used to mention users by their ID*

**Layer** : 211

```tl
messageEntityMention#fa04579d offset:int length:int = MessageEntity;
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
$messageEntity = $client->messageEntityMention(
	offset : 63,
	length : 74,
);
```