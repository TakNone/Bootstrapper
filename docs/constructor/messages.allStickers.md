# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 233

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
			installed_date : 91,
			id : -7024693036988524062,
			access_hash : -5635826041435277819,
			title : 'bSCaH4mFTEXcqKgU',
			short_name : 'WdNcBG7gJnHLq3YD',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'M6AwheoKCEdyQb9U',
				),
				$client->photoSize(
					type : 'lPTefS7Otk0NZwQ9',
					w : 46,
					h : 94,
					size : 0,
				),
				$client->photoCachedSize(
					type : 'Yc81rtPOMq7FSQRx',
					w : 18,
					h : 75,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'XuwY4zEGSsVQ6t2U',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'msFxUJAwCVItf165',
					w : 96,
					h : 86,
					sizes : array(8),
				),
				$client->photoPathSize(
					type : 'SPaOpovEA0efCqHk',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 8,
			thumb_version : 22,
			thumb_document_id : -7926711721454518112,
			count : 39,
			hash : 0,
		),
	),
);
```