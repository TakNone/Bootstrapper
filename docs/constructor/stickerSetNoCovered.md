# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 225

```tl
stickerSetNoCovered#77b15d1c set:StickerSet = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset information |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetNoCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 72,
		id : 3075240935112819615,
		access_hash : -9143208754996886314,
		title : 'OJjdN5hLuwIMPpBf',
		short_name : '5VjuiSomXNEOcg0M',
		thumbs : array(
			$client->photoSizeEmpty(
				type : '9oUjb7h0wyDIaiWG',
			),
			$client->photoSize(
				type : '8qsRfcVnd0QJGjp4',
				w : 41,
				h : 100,
				size : 59,
			),
			$client->photoCachedSize(
				type : 'g2knJZySqWQBl57E',
				w : 30,
				h : 76,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'bPmacDh6lQ1YLUzX',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '483UZPDQN2ir1eJn',
				w : 52,
				h : 95,
				sizes : array(22),
			),
			$client->photoPathSize(
				type : 'Jp1z0gFoTRHiPYWm',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 31,
		thumb_version : 16,
		thumb_document_id : 933516616097425610,
		count : 95,
		hash : 0,
	),
);
```