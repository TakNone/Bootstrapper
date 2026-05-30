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
		installed_date : 68,
		id : 2848589547369533837,
		access_hash : 7651777795771226596,
		title : '6DYuKP8aCdfkHWlZ',
		short_name : 'AkC3t5NGUjSxs6Vg',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'J3N5QelZXUoHwYDs',
			),
			$client->photoSize(
				type : 'xsSTmY3RQnMhLBdH',
				w : 15,
				h : 82,
				size : 8,
			),
			$client->photoCachedSize(
				type : 'CMhnKgHl7A3Ismqr',
				w : 39,
				h : 29,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 't3EC4wGsKPABfyvT',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'ef3x5CSAHnEpWQY4',
				w : 100,
				h : 80,
				sizes : array(48),
			),
			$client->photoPathSize(
				type : 'a8JUIv9GZWTfYcey',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 90,
		thumb_version : 86,
		thumb_document_id : -2387742073427866047,
		count : 27,
		hash : 0,
	),
);
```