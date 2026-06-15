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
		installed_date : 54,
		id : 5930322429753817067,
		access_hash : 1488529745244940042,
		title : 'jF4mH6zvU1RPrM0V',
		short_name : 'C7arpezqsyAjBbQX',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'eoV68ACcdpixaGZr',
			),
			$client->photoSize(
				type : 'fiHqPjwNeR8VvQAD',
				w : 3,
				h : 4,
				size : 10,
			),
			$client->photoCachedSize(
				type : 'YATByuJzHXtEibfn',
				w : 100,
				h : 44,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : 'VRaZIMqYAk5DepSg',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : '6i8rFVy70PQAOh3Z',
				w : 49,
				h : 4,
				sizes : array(45),
			),
			$client->photoPathSize(
				type : 'dcI4pmClUY37kuHN',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 51,
		thumb_version : 82,
		thumb_document_id : 5958139530811370583,
		count : 37,
		hash : 0,
	),
);
```