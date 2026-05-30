# stickerKeyword

**Description** : *Keywords for a certain sticker*

**Layer** : 225

```tl
stickerKeyword#fcfeb29c document_id:long keyword:Vector<string> = StickerKeyword;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document_id</mark> | [`long`](type/long) | Sticker ID |
| <mark>keyword</mark> | [`Vector<string>`](type/string) | Keywords |

---

## Type

[StickerKeyword](type/StickerKeyword)

---

## Example

```php
$stickerKeyword = $client->stickerKeyword(
	document_id : 6811196403294343242,
	keyword : array('ypaPhr2cNVsB0Qf9'),
);
```