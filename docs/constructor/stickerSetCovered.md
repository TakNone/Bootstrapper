# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 225

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
		installed_date : 55,
		id : 858533049870870180,
		access_hash : 6454860337430077115,
		title : 'fX03y9FBTgwDHGMJ',
		short_name : 'L4rXJzmHFp2b68IS',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'Nqk9ZbxHKTmQ53sV',
			),
			$client->photoSize(
				type : 'AZu6idy15rb9oz0P',
				w : 19,
				h : 12,
				size : 82,
			),
			$client->photoCachedSize(
				type : 'pdxNhnj3k2A8UBTv',
				w : 93,
				h : 57,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'VAt5QdSplq7PY2Na',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'NTuRp8hfyL379cmQ',
				w : 38,
				h : 90,
				sizes : array(65),
			),
			$client->photoPathSize(
				type : 'pEUyLCkIMGiY51Q3',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 36,
		thumb_version : 35,
		thumb_document_id : 63152189475194163,
		count : 33,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -8639042628116407676,
	),
);
```