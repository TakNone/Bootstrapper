# emojiStatus

**Description** : *An emoji status*

**Layer** : 227

```tl
emojiStatus#e7ff068a flags:# document_id:long until:flags.0?int = EmojiStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>document_id</mark> | [`long`](type/long) | Custom emoji document ID |
| **until** | [`flags.0?int`](type/int) | If set, the emoji status will be active until the specified unixtime |

---

## Type

[EmojiStatus](type/EmojiStatus)

---

## Example

```php
$emojiStatus = $client->emojiStatus(
	document_id : -4526489148266074007,
	until : 1,
);
```