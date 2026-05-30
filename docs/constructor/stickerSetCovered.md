# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 222

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
		installed_date : 46,
		id : -7788437527545482696,
		access_hash : 2634416009773321909,
		title : '4CU8OGBgL2ITnmpW',
		short_name : '4Gg9uwCIelomshyt',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 's8CDNrIlwfz2Anc1',
			),
			$client->photoSize(
				type : '3LcvobJQwu9RFKOM',
				w : 77,
				h : 91,
				size : 5,
			),
			$client->photoCachedSize(
				type : '7Zj5bs6XLKg3etHS',
				w : 53,
				h : 40,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '1O9AMy7izG6gZ5cQ',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'A4ROkfdzEQgS7imM',
				w : 33,
				h : 62,
				sizes : array(68),
			),
			$client->photoPathSize(
				type : '8oDZpHxOEdujcyqC',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 72,
		thumb_version : 12,
		thumb_document_id : 7711395149663616305,
		count : 11,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -5676156070909062453,
	),
);
```