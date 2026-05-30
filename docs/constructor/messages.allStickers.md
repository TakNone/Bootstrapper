# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 222

```tl
messages.allStickers#cdbbcebb hash:long sets:Vector<StickerSet> = messages.AllStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSet>`](type/StickerSet) | All stickersets |

---

## Type

[messages.AllStickers](type/messages.AllStickers)

---

## Example

```php
$messagesAllStickers = $client->messages->allStickers(
	hash : 0,
	sets : array(
		$client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 5,
			id : 2276375235995769667,
			access_hash : -6466608477294370039,
			title : 'ZCYhOEjxHALXPGQJ',
			short_name : 'cnPQIWBbRXMjDltq',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '98TFB1wQx0dP7Ect',
				),
				$client->photoSize(
					type : 'icYkepf4GV1WbnHN',
					w : 66,
					h : 58,
					size : 50,
				),
				$client->photoCachedSize(
					type : 'zTj6ks1FGpfMdLOu',
					w : 87,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'CtuKxODjLnQZ31hl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'AUOv9Huw14Bxz7lJ',
					w : 12,
					h : 29,
					sizes : array(98),
				),
				$client->photoPathSize(
					type : 'ZD6POjH1tXTgsfQm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 88,
			thumb_version : 1,
			thumb_document_id : -8079367419764078199,
			count : 37,
			hash : 0,
		),
	),
);
```