# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 233

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
			installed_date : 19,
			id : 3961497861778608229,
			access_hash : -8676292307757285492,
			title : 'CVAfnBrJMZ46yNdI',
			short_name : 'gkp6isT3qU4eZ7Xh',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'DWkHXxYdsmGbhrCR',
				),
				$client->photoSize(
					type : 'QkW7Y8Nnrh1iRM9j',
					w : 7,
					h : 88,
					size : 97,
				),
				$client->photoCachedSize(
					type : 'FCAW96dwYaKSrftL',
					w : 23,
					h : 85,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'g4fMn10QVt6hF9UG',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7kDESPuJo9stcUh1',
					w : 97,
					h : 51,
					sizes : array(84),
				),
				$client->photoPathSize(
					type : 'RcI4aiZm2e1f76BJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 62,
			thumb_version : 65,
			thumb_document_id : -7137191925465935235,
			count : 14,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 7492803123225978354,
		),
	),
);
```