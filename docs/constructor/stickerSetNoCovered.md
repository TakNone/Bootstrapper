# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 222

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
		installed_date : 4,
		id : 1315589164683599155,
		access_hash : 2253434743289779264,
		title : '5wRLPcSCGboyqehW',
		short_name : 'iKEWflxo1gcp6Ikt',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'ET50Hj3QimSN2sAl',
			),
			$client->photoSize(
				type : 'M3qSnZm7OCdK19rX',
				w : 42,
				h : 90,
				size : 27,
			),
			$client->photoCachedSize(
				type : 'XCarJVi9PvGxKQ3o',
				w : 76,
				h : 55,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'beLGBjcXtDmR4nTl',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'areZ2L5tPlzup9fM',
				w : 18,
				h : 90,
				sizes : array(71),
			),
			$client->photoPathSize(
				type : 'TR5j2Ni9HEfpqbUa',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 87,
		thumb_version : 84,
		thumb_document_id : 51729614512203744,
		count : 88,
		hash : 0,
	),
);
```