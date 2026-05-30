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
		installed_date : 78,
		id : -4597150970947759385,
		access_hash : 6465224102494481823,
		title : 'EF3nyBQURuSPZjIA',
		short_name : 'cvm5nDuVGEkpfhrM',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '5LhsUTyNuK4EjDFZ',
			),
			$client->photoSize(
				type : 'eRTIPstUC1u89Glb',
				w : 15,
				h : 74,
				size : 98,
			),
			$client->photoCachedSize(
				type : '8lN4YJOFy2bMWwR0',
				w : 49,
				h : 56,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'EXm10rRJuAZipDv3',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'nRrz1uNpZc67wWiY',
				w : 59,
				h : 29,
				sizes : array(78),
			),
			$client->photoPathSize(
				type : 'mKUrIqMTpePtRZ2w',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 97,
		thumb_version : 63,
		thumb_document_id : -7008080038007385529,
		count : 91,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -7814395328924489598,
	),
);
```