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
		installed_date : 59,
		id : -8676006129605526550,
		access_hash : -1941292414699967554,
		title : 'oBCucI5TANEflZJ2',
		short_name : 'cpYyCE81A4BJizKZ',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'axPCRgVTncS5pboZ',
			),
			$client->photoSize(
				type : 'wR7vfk6pID2Wisrc',
				w : 12,
				h : 25,
				size : 29,
			),
			$client->photoCachedSize(
				type : '8QGPu6sinCb7h3or',
				w : 2,
				h : 16,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoStrippedSize(
				type : '3HVbIlcOL6WrjeUE',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->photoSizeProgressive(
				type : 'RNj4UWEnG8f2eqxb',
				w : 26,
				h : 36,
				sizes : array(51),
			),
			$client->photoPathSize(
				type : 'aZFht7WQywk02MJ1',
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
		),
		thumb_dc_id : 78,
		thumb_version : 30,
		thumb_document_id : -3086310673037795497,
		count : 75,
		hash : 0,
	),
);
```