# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 229

```tl
stickerSetCovered#6410a5d2 set:StickerSet cover:Document = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>cover</mark> | [`Document`](type/Document) | Preview |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 93,
		id : 4376474208572279294,
		access_hash : -2380615010542095338,
		title : 'jdCqH7YFg9hlkJyM',
		short_name : 'dInXlNAHqriomUfx',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '976j4hXzxVMpBeyb',
			),
			$client->photoSize(
				type : 'CKHtoOSfkF4JyBwj',
				w : 22,
				h : 26,
				size : 29,
			),
			$client->photoCachedSize(
				type : '7fKqHPU6RVn8JhtC',
				w : 40,
				h : 89,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'JqZ7hzdU2niEMj9f',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'rERLImu61dQeTp7P',
				w : 53,
				h : 89,
				sizes : array(74),
			),
			$client->photoPathSize(
				type : 'qVYluWjgehrdA6Sp',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 78,
		thumb_version : 97,
		thumb_document_id : 8863513133084484565,
		count : 86,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -8495879585636517329,
	),
);
```