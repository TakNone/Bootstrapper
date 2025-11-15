# stickerSetNoCovered

**Description** : *Just the stickerset information, with no previews*

**Layer** : 218

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
		installed_date : 80,
		id : -3652296404776901034,
		access_hash : 6443368377283017408,
		title : 'rqGDaotNyTJVuMFE',
		short_name : 'heZSmsxybWKgTVpM',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'MRvjQsV6Fzgf5YcU',
			),
			$client->photoSize(
				type : 'tgb9U8esu4OiADm0',
				w : 45,
				h : 19,
				size : 33,
			),
			$client->photoCachedSize(
				type : 'z39ihqfxgAYLW1vS',
				w : 49,
				h : 78,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'gysxazbReqtjF2B8',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'UIt4SEOui6rP0ewd',
				w : 25,
				h : 2,
				sizes : array(62),
			),
			$client->photoPathSize(
				type : 'rNs7mHEYZ0l8n45I',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 31,
		thumb_version : 8,
		thumb_document_id : -976427988264007234,
		count : 83,
		hash : 0,
	),
);
```