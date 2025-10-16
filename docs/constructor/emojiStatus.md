# emojiStatus

**Description** : *An emoji status*

**Layer** : 216

```tl
emojiStatus#e7ff068a flags:# document_id:long until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>document_id</mark> | [`long`](type/long) | Custom emoji document ID |
| **until** | [`flags.0?int`](type/int) | NOTHING |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->emojiStatus(
	document_id : -1056086499499832408,
	until : 46,
);
```