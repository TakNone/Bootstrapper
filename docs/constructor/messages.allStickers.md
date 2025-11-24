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
			installed_date : 28,
			id : -5953007284256678040,
			access_hash : 2761760843913197827,
			title : 'vqzywr5Oml6Wuk8X',
			short_name : 'vIbxBS2FWjAt0rXc',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'X8R10QyMj7abZgVE',
				),
				$client->photoSize(
					type : 'fRCcPx3j1I4yDmMZ',
					w : 21,
					h : 92,
					size : 92,
				),
				$client->photoCachedSize(
					type : 'b0oifDSVcJM4YtpB',
					w : 94,
					h : 89,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'STWgLpUY2BqcKhQI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '0yski4XjRW1uCchP',
					w : 44,
					h : 94,
					sizes : array(53),
				),
				$client->photoPathSize(
					type : 'aQphwGUfjS35c4Le',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 100,
			thumb_version : 35,
			thumb_document_id : -1250573165661925463,
			count : 35,
			hash : 0,
		),
	),
);
```