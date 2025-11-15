# emojiStatus

**Description** : *An emoji status*

**Layer** : 218

```tl
emojiStatus#e7ff068a flags:# document_id:long until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>document_id</mark> | [`long`](type/long) | Custom emoji document ID |
| **until** | [`flags.0?int`](type/int) | If set, the emoji status will be active until the specified unixtime |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->emojiStatus(
	document_id : 7505711348264961781,
	until : 52,
);
```