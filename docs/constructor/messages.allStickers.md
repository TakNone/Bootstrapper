# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 227

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
			installed_date : 55,
			id : 2632310873879322605,
			access_hash : -6544852219517179425,
			title : 'HbOhro4tYcIdMkPT',
			short_name : 'hcyx0R4VSgiXZID2',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'k4vGS6Pg0I8NuipW',
				),
				$client->photoSize(
					type : 'W3IvdT2sh1pmlazq',
					w : 64,
					h : 92,
					size : 98,
				),
				$client->photoCachedSize(
					type : 'cb17jT46AHi0XmrO',
					w : 27,
					h : 30,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'QezEdB5TGWZPp4VM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'DJfVXn3gmkZ4HjBt',
					w : 4,
					h : 48,
					sizes : array(93),
				),
				$client->photoPathSize(
					type : 'r3wJ2vToNiyEA7z5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 20,
			thumb_version : 94,
			thumb_document_id : -608641809713492622,
			count : 94,
			hash : 0,
		),
	),
);
```