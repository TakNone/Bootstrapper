# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 214

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
		installed_date : 23,
		id : -5795849582939258334,
		access_hash : -7739931521334239732,
		title : 'oPUSx6FAihkveZX3',
		short_name : 'wS9JglvIHnU72u1s',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'b41CXYAODP5IeBZG',
			),
			$client->photoSize(
				type : 'YNKFkePo9nIRug3Z',
				w : 55,
				h : 8,
				size : 79,
			),
			$client->photoCachedSize(
				type : 'ECsJeVNy6QdlFiHp',
				w : 27,
				h : 97,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'THomFJOqxAua6b9G',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'BO7w64Qqt59rYXHu',
				w : 86,
				h : 73,
				sizes : array(61),
			),
			$client->photoPathSize(
				type : 'NZIOQrsqmLWA05HP',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 24,
		thumb_version : 88,
		thumb_document_id : 5242341536931248865,
		count : 9,
		hash : 59,
	),
);
```