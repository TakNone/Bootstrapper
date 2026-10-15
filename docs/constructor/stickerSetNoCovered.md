# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 229

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
		installed_date : 77,
		id : 2410057429770421557,
		access_hash : -2818126365215985015,
		title : '483Hy16kGz2sRXpD',
		short_name : '4OHiFe7zL1IlcyqE',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'hqAW1ga3BoYLbMrf',
			),
			$client->photoSize(
				type : 'u4ktPGvi0bNSc1FL',
				w : 38,
				h : 15,
				size : 7,
			),
			$client->photoCachedSize(
				type : '5DJRyi0TKIBjUCo2',
				w : 55,
				h : 92,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '9LBmRFZJAQq8rp13',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'twAsbqrcL2UoWHfd',
				w : 49,
				h : 83,
				sizes : array(59),
			),
			$client->photoPathSize(
				type : 'HQSqJbPsLt152KDO',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 55,
		thumb_version : 32,
		thumb_document_id : 2032493200431196660,
		count : 33,
		hash : 0,
	),
);
```