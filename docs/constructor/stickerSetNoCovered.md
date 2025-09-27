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
		installed_date : 24,
		id : -1799464250232637991,
		access_hash : 5601022935498588882,
		title : 'kH2WA0wX5cs1RSBJ',
		short_name : 'NloT6tzebqSV3Fdk',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'WktVD8pLjlMJdGsF',
			),
			$client->photoSize(
				type : 'zSY8c456qZ93QEor',
				w : 90,
				h : 68,
				size : 59,
			),
			$client->photoCachedSize(
				type : 'smBcf92eEoDKpjbt',
				w : 60,
				h : 4,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'AyvpYqmCuiM5onTt',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'B5amUEkLIoQHVwz4',
				w : 33,
				h : 66,
				sizes : array(1),
			),
			$client->photoPathSize(
				type : 'So3KaQp2cukCMxtn',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 58,
		thumb_version : 58,
		thumb_document_id : 3822651839156668720,
		count : 7,
		hash : 0,
	),
);
```