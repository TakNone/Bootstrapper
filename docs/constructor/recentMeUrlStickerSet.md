# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 229

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
			installed_date : 46,
			id : -7385934849310232468,
			access_hash : -576456956135368301,
			title : 'su3BVdKaIbGMEtkx',
			short_name : '5RzdxYEPTLaV8y9O',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '0PSvsahIubp76yd3',
				),
				$client->photoSize(
					type : '4EGfa6d50B3uXg7r',
					w : 42,
					h : 53,
					size : 24,
				),
				$client->photoCachedSize(
					type : 'ExJeAvTMcDyNsriZ',
					w : 33,
					h : 87,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'nkGxt6MeWQKmpUOA',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '8mVovbLs1x79EMy6',
					w : 13,
					h : 26,
					sizes : array(54),
				),
				$client->photoPathSize(
					type : '8kIxdQ46UNrMoyql',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 22,
			thumb_version : 64,
			thumb_document_id : 8998250638375233684,
			count : 26,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : -194633618365563137,
		),
	),
);
```