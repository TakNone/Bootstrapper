# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 227

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
		installed_date : 90,
		id : -6579676595170623606,
		access_hash : -805117719733315369,
		title : 'xhT9MR05cS3WtpZs',
		short_name : '4IDBPiCMAxXLGuz6',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ZpUMmEdtrXB8IWRs',
			),
			$client->photoSize(
				type : 'MsgepD5Pu0vYHzFL',
				w : 69,
				h : 32,
				size : 11,
			),
			$client->photoCachedSize(
				type : 'La1Mb4qkTm8ZAGtH',
				w : 77,
				h : 64,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'YLzhMrRJacuvAsmK',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'QinheCG94opqHFuA',
				w : 30,
				h : 37,
				sizes : array(84),
			),
			$client->photoPathSize(
				type : 'eCn6ySDigkYXrVJp',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 8,
		thumb_version : 34,
		thumb_document_id : 3247929742185342582,
		count : 95,
		hash : 0,
	),
);
```