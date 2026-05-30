# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 225

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
			installed_date : 74,
			id : 8820001693887910754,
			access_hash : -6531261626516794909,
			title : 'yvhl4m0SeQFBoH2K',
			short_name : 'NeXJ1gShVDqfAmTc',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'fACuH97JNywcshQR',
				),
				$client->photoSize(
					type : 'bLB3PrIxFeDvZMAS',
					w : 38,
					h : 84,
					size : 26,
				),
				$client->photoCachedSize(
					type : 'buRBhZApWKviode0',
					w : 48,
					h : 90,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'OQgd8Sl3EvY90eTt',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'fzdVp69DbvFOsQoP',
					w : 60,
					h : 16,
					sizes : array(33),
				),
				$client->photoPathSize(
					type : 'EOHNl46jswo9Dicu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 2,
			thumb_version : 88,
			thumb_document_id : 2359568007905365670,
			count : 63,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 6987988024505621153,
		),
	),
);
```