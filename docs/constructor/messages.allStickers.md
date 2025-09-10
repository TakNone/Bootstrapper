# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 214

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
			installed_date : 84,
			id : -3933937666675849479,
			access_hash : -8903840820256685786,
			title : 'r6jFBtuziKL9Invd',
			short_name : 'NbBYfswvQj29LTMp',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'DjUQ9uAIlZxFHv7O',
				),
				$client->photoSize(
					type : 'EkyHwuKlA7oaIGV9',
					w : 37,
					h : 3,
					size : 13,
				),
				$client->photoCachedSize(
					type : '5sH4mCU7nLcBfpQD',
					w : 68,
					h : 91,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'jJTx5BnYA0C4ihO7',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '18mp3MD706dSvQyE',
					w : 50,
					h : 12,
					sizes : array(32),
				),
				$client->photoPathSize(
					type : 'lROI91LZvbmNEawo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 73,
			thumb_version : 48,
			thumb_document_id : 2361194543924865281,
			count : 78,
			hash : 0,
		),
	),
);
```