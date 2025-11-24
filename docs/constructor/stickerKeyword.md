# stickerKeyword

**Description** : *Keywords for a certain sticker*

**Layer** : 218

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
	document_id : 7816522221911875214,
	keyword : array('5NBjr97CMLF4RecA'),
);
```