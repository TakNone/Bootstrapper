# messageEntityBlockquote

**Description** : *Message entity representing a block quote*

**Layer** : 214

```tl
messageEntityBlockquote#f1ccaaac flags:# collapsed:flags.0?true offset:int length:int = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **collapsed** | [`flags.0?true`](type/true) | Whether the quote is collapsed by default |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityBlockquote(
	collapsed : true,
	offset : 94,
	length : 69,
);
```