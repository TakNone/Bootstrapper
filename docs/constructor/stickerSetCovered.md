# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 218

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
		installed_date : 73,
		id : -354185016972184308,
		access_hash : 8397564250324726584,
		title : 'ql2j47WRNAsnx5cp',
		short_name : 'XVq2wQHOBz9l5vao',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'E3nxgpQ2ysjWJl1z',
			),
			$client->photoSize(
				type : 'FstoLIcDRvSMZ7r1',
				w : 61,
				h : 65,
				size : 33,
			),
			$client->photoCachedSize(
				type : 'dAUHWq0FKSf2lGm8',
				w : 6,
				h : 42,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'OikLaSUXch96WKFr',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'h2ND6RVyU5QaIL3M',
				w : 63,
				h : 7,
				sizes : array(80),
			),
			$client->photoPathSize(
				type : 'e4rDR70mUAsIPuCO',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 90,
		thumb_version : 52,
		thumb_document_id : -8434687205364609687,
		count : 98,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -4832664476165822759,
	),
);
```