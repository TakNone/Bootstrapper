# stickerPack

**Description** : *A stickerpack is a group of stickers associated to the same emoji\.
It is not a sticker pack the way it is usually intended, you may be looking for a StickerSet*

**Layer** : 227

```tl
stickerPack#12b299d4 emoticon:string documents:Vector<long> = StickerPack;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | Emoji |
| <mark>documents</mark> | [`Vector<long>`](type/long) | Stickers |

---

## Type

[StickerPack](type/StickerPack)

---

## Example

```php
$stickerPack = $client->stickerPack(
	emoticon : 'NeQpX261OkTFtgqU',
	documents : array(-6809855940380943914),
);
```