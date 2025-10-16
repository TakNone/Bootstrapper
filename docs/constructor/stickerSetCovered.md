# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 216

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
		installed_date : 89,
		id : 7691377217836978336,
		access_hash : -7268988486895405505,
		title : 'oe9lqnsDJ2zfEQ0W',
		short_name : 'o6KBzFqGyTiINVdX',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '9tDWMY4gzw1LqZrS',
			),
			$client->photoSize(
				type : 'QqBfAaCghT2wt1Rk',
				w : 49,
				h : 51,
				size : 72,
			),
			$client->photoCachedSize(
				type : 'W56CkD3gOAtRynxM',
				w : 53,
				h : 90,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'hG6fyacTn5xo7pPU',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'DvXjf7Vql8JepuBn',
				w : 78,
				h : 46,
				sizes : array(83),
			),
			$client->photoPathSize(
				type : 'EJKhXFgmIUsPSCMO',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 86,
		thumb_version : 59,
		thumb_document_id : -918041359972914486,
		count : 77,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : 8786400116307752634,
	),
);
```