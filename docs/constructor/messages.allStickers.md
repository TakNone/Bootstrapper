# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 218

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
			id : 584252473110824812,
			access_hash : 8130541650582043207,
			title : '0xGX9ojuVZRD5f1w',
			short_name : 'vRskCHjKmlM0BJAL',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'XzdGWDYI4E1Zj5TB',
				),
				$client->photoSize(
					type : 'bQ8pBkuW6cLKqlid',
					w : 57,
					h : 13,
					size : 1,
				),
				$client->photoCachedSize(
					type : '24cx9Nj6tpQiW7mP',
					w : 42,
					h : 60,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'HbCt4KD1FIwMmUJ6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'WRUPCZs5qbp8SeM9',
					w : 84,
					h : 74,
					sizes : array(59),
				),
				$client->photoPathSize(
					type : 'fUOBqTJzFCdV63D0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 18,
			thumb_version : 98,
			thumb_document_id : -4271989171429649616,
			count : 96,
			hash : 0,
		),
	),
);
```