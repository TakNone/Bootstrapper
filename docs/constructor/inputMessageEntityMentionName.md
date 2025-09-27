# inputMessageEntityMentionName

**Description** : *Message entity that can be used to create a user user mention: received mentions use the messageEntityMentionName constructor, instead*

**Layer** : 216

```tl
inputMessageEntityMentionName#208e68c9 offset:int length:int user_id:InputUser = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Identifier of the user that was mentioned |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->inputMessageEntityMentionName(
	offset : 0,
	length : 21,
	user_id : $client->inputUserEmpty(),
);
```