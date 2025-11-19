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
			installed_date : 26,
			id : 1085668846493598655,
			access_hash : -1776064798372669586,
			title : 'Rj8ASvGldxYQOwDC',
			short_name : 'iDPOlaRh8cj0EQWn',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '9k1bBtdcRWOjYJDe',
				),
				$client->photoSize(
					type : 'QenC1MUpjA9BExX7',
					w : 48,
					h : 46,
					size : 93,
				),
				$client->photoCachedSize(
					type : 'Ckowcm34I9hBSPVD',
					w : 77,
					h : 63,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'xLRbSTj9GHyMF0zV',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'rYbDERHM8h5ey2vZ',
					w : 8,
					h : 90,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'MP1p2AoKJRtZSIYq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 65,
			thumb_version : 57,
			thumb_document_id : 3681454463213653927,
			count : 51,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 5800275281201698008,
		),
	),
);
```