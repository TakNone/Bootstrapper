# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 216

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
		installed_date : 35,
		id : 3763069460994123447,
		access_hash : 8479555462944745224,
		title : 'OrYS7CqBAbygL9Di',
		short_name : 'wd8CuniZIv9tToFD',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'DrOsq7CP3udJfcMU',
			),
			$client->photoSize(
				type : '9nQRfwrPUyb2LCvq',
				w : 1,
				h : 84,
				size : 95,
			),
			$client->photoCachedSize(
				type : 'Cfj25QJxqsUXpMnm',
				w : 51,
				h : 2,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '6NV9zjFXnUdBKkfw',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'OFcUrAVCtyiIusLm',
				w : 59,
				h : 23,
				sizes : array(39),
			),
			$client->photoPathSize(
				type : 'wSKrZHMvaPgmdCU3',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 34,
		thumb_version : 28,
		thumb_document_id : 6237028473892206411,
		count : 66,
		hash : 0,
	),
);
```