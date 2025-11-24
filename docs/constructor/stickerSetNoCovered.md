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
		installed_date : 21,
		id : -4675069073075943046,
		access_hash : -4880240193155122640,
		title : 'UazdVN0JDio2upFt',
		short_name : 'YvRW8DKEFIZsS3mf',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'cMNsgA1tvd68hJGe',
			),
			$client->photoSize(
				type : 'dqj6SrhTZFXAoWGi',
				w : 57,
				h : 38,
				size : 55,
			),
			$client->photoCachedSize(
				type : 'hiR7rHJQxjb59kCv',
				w : 36,
				h : 50,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'oP6cBOfKNu1FqC0L',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'pUz05ZlHNQgkCrLJ',
				w : 38,
				h : 48,
				sizes : array(33),
			),
			$client->photoPathSize(
				type : 'ZOVrtgSabjuWL6Yv',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 28,
		thumb_version : 63,
		thumb_document_id : 5623963169807359911,
		count : 82,
		hash : 0,
	),
);
```