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
		installed_date : 58,
		id : -2097649745320821165,
		access_hash : -8894571920109033164,
		title : 's7EbhYRm1dWalTGN',
		short_name : 'FUQi45TWbNVHkqtR',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'vD0IXsa6Nl5JOwUP',
			),
			$client->photoSize(
				type : 'PpxFtL3Ea1XuiUcA',
				w : 41,
				h : 99,
				size : 69,
			),
			$client->photoCachedSize(
				type : 'ZumDEP1ReYhFyUq4',
				w : 2,
				h : 2,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'b46KaUWidIgfq53L',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'e4ZBowUIb1HQTynz',
				w : 76,
				h : 22,
				sizes : array(17),
			),
			$client->photoPathSize(
				type : 'p2YDjGn8VQH7K5co',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 37,
		thumb_version : 39,
		thumb_document_id : 6813632249998308638,
		count : 70,
		hash : 0,
	),
	cover : $client->documentEmpty(
		id : -1255272212073127236,
	),
);
```