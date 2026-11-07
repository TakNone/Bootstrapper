# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 233

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
		installed_date : 36,
		id : 8310218585109038391,
		access_hash : 8554089406111300239,
		title : '5xKQADMP0Xa24JGq',
		short_name : 'caZjbSCnAKDHEd4U',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '3iA0C6VRjSlJWGD1',
			),
			$client->photoSize(
				type : 'eVNoGtLMyuWilmFp',
				w : 69,
				h : 89,
				size : 48,
			),
			$client->photoCachedSize(
				type : 'KX18WJtLkmPcDaxf',
				w : 8,
				h : 6,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'G4uCNAtxU62Lejql',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'c38lHZESWNOTUC7y',
				w : 55,
				h : 96,
				sizes : array(44),
			),
			$client->photoPathSize(
				type : 'obQ4ks2MdSl5hvXr',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 25,
		thumb_version : 27,
		thumb_document_id : -2323910615947437581,
		count : 27,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -4684979271244695732,
	),
);
```