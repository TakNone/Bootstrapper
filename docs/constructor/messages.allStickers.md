# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 216

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
			installed_date : 50,
			id : -8544013943483472803,
			access_hash : -4896171546598940486,
			title : 'J1NDaz2x43gWKf6Z',
			short_name : 'aeNXugDK8MbzQOH4',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'ga8x5RA2pmQuqYPT',
				),
				$client->photoSize(
					type : 'ditCBr7IURTQOk50',
					w : 67,
					h : 54,
					size : 34,
				),
				$client->photoCachedSize(
					type : 'j5ECnGxrfYTNw1qX',
					w : 54,
					h : 12,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '8f6KWpXcs7AliBvt',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'EPsYdSRxkzl0M8ZO',
					w : 13,
					h : 94,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : 'E7QZnHwL94NW12uR',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 100,
			thumb_version : 19,
			thumb_document_id : 7766981117086334914,
			count : 51,
			hash : 0,
		),
	),
);
```