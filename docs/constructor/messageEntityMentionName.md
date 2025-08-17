# messageEntityMentionName

**Description** : *Message entity representing a user mention: for creating a mention use inputMessageEntityMentionName*

**Layer** : 211

```tl
messageEntityMentionName#dc7b1140 offset:int length:int user_id:long = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>user_id</mark> | [`long`](type/long) | Identifier of the user that was mentioned |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityMentionName(
	offset : 51,
	length : 51,
	user_id : 1400821077803079885,
);
```