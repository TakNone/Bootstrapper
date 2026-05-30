# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 222

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
			installed_date : 17,
			id : -2616737183650952035,
			access_hash : 7701789874161728513,
			title : 'yNIYKSUOp6s7o4XQ',
			short_name : 'zjHgL2dmwBbYvFCV',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'GiYnQhFMOxRDlJmg',
				),
				$client->photoSize(
					type : 'R7PTLEvqZNKaADkl',
					w : 69,
					h : 11,
					size : 97,
				),
				$client->photoCachedSize(
					type : 'u9WqvIEk42OiLhyJ',
					w : 79,
					h : 3,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'sHYAGrgqFQCZcfvL',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YZiGDnsJ7gIWzrfb',
					w : 85,
					h : 31,
					sizes : array(74),
				),
				$client->photoPathSize(
					type : 'ixUrz3DNWhgd1cKn',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 33,
			thumb_version : 39,
			thumb_document_id : 4553337047235496170,
			count : 22,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 1256553060479673447,
		),
	),
);
```