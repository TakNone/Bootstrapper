# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 218

```tl
recentMeUrlStickerSet#bc0a57dc url:string set:StickerSetCovered = RecentMeUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | t.me URL |
| <mark>set</mark> | [`StickerSetCovered`](type/StickerSetCovered) | Stickerset |

---

## Type

[RecentMeUrl](type/RecentMeUrl)

---

## Example

```php
$recentMeUrl = $client->recentMeUrlStickerSet(
	url : 'https://docs.liveproto.dev',
	set : $client->stickerSetCovered(
		set : $client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 96,
			id : 1525997536506917020,
			access_hash : 3852759982038653637,
			title : 'uSoR1wKvXf7Up0lG',
			short_name : 'KZEyV03TzkIR9PUW',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '8Zqm3gVAJTcUlv4L',
				),
				$client->photoSize(
					type : 'T3DprBCoQGgO7u8N',
					w : 29,
					h : 2,
					size : 8,
				),
				$client->photoCachedSize(
					type : 'MTyXE7lunPpI4hba',
					w : 79,
					h : 74,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'I6sK0NY7piRPBCme',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'lkZeObNnwHWu36mE',
					w : 96,
					h : 39,
					sizes : array(68),
				),
				$client->photoPathSize(
					type : 'mOd8WMqZiyoGvK7s',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 33,
			thumb_version : 33,
			thumb_document_id : -8831076554991032193,
			count : 90,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : -8529619746322468529,
		),
	),
);
```