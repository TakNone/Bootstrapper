# messageEntityCustomEmoji

**Description** : *Represents a custom emoji\.
Note that this entity must wrap exactly one regular emoji \(the one contained in documentAttributeCustomEmoji\.alt\) in the related text, otherwise the server will ignore it*

**Layer** : 216

```tl
messageEntityCustomEmoji#c8cf05f8 offset:int length:int document_id:long = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>document_id</mark> | [`long`](type/long) | Document ID of the custom emoji, use messages.getCustomEmojiDocuments to fetch the emoji animation and the actual emoji it represents |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityCustomEmoji(
	offset : 0,
	length : 19,
	document_id : -8067019607318085512,
);
```