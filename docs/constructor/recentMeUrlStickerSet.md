# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 227

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
			installed_date : 79,
			id : -1808401147549879985,
			access_hash : -491286703690754182,
			title : 'eU2KJQIyMxflsk5G',
			short_name : 'Onb6ZKeGkR72cj4d',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'nC1IfbySRO4ZAXJ2',
				),
				$client->photoSize(
					type : 'Kdx9qt6n0OhksejZ',
					w : 79,
					h : 14,
					size : 42,
				),
				$client->photoCachedSize(
					type : 'dNJO6KfokrvpEIXj',
					w : 60,
					h : 21,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '7AUoeD59MjG1sZ83',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'aire8NKYTLBFMwbm',
					w : 98,
					h : 81,
					sizes : array(0),
				),
				$client->photoPathSize(
					type : 'tiHTXo5WNCnJ8zh2',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 52,
			thumb_version : 34,
			thumb_document_id : 6325929718568339785,
			count : 36,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 1726253005454649760,
		),
	),
);
```