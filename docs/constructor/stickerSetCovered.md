# stickerSetCovered

**Description** : *Stickerset with a single sticker as preview*

**Layer** : 211

```tl
stickerSetCovered#6410a5d2 set:StickerSet cover:Document = StickerSetCovered;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>set</mark> | [`StickerSet`](type/StickerSet) | Stickerset |
| <mark>cover</mark> | [`Document`](type/Document) | Preview |

---

## Type

[StickerSetCovered](type/StickerSetCovered)

---

## Example

```php
$stickerSetCovered = $client->stickerSetCovered(
	set : $client->stickerSet(
		archived : true,
		official : true,
		masks : true,
		emojis : true,
		text_color : true,
		channel_emoji_status : true,
		creator : true,
		installed_date : 82,
		id : -7906344817205159760,
		access_hash : 8594628348676577305,
		title : 'IPChgFvL2wztGYom',
		short_name : 'DbX8CIopSH9smNc7',
		thumbs : array(
			$client->photoSizeEmpty(
				type : 'V9nGotRDIbcx4Jgp',
			),
			$client->photoSize(
				type : '12jZmMFfa0LJ8GBz',
				w : 27,
				h : 53,
				size : 18,
			),
			$client->photoCachedSize(
				type : 'olO5e6agju0HvzEF',
				w : 64,
				h : 30,
				bytes : 'U??LiveProto?T??',
			),
			$client->photoStrippedSize(
				type : 'hVUZgC2mynFQIcNk',
				bytes : 'WDfWLiveProto@???@',
			),
			$client->photoSizeProgressive(
				type : '7WX54hZCxiSnLpmI',
				w : 56,
				h : 16,
				sizes : array(64),
			),
			$client->photoPathSize(
				type : 'oMxHbVG2WzuyBNdL',
				bytes : '{?.tLiveProtoپ??E',
			),
		),
		thumb_dc_id : 39,
		thumb_version : 7,
		thumb_document_id : 8779012545822693509,
		count : 9,
		hash : 20,
	),
	cover : $client->documentEmpty(
		id : 8710608163627568602,
	),
);
```