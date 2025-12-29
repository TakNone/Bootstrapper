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
			installed_date : 8,
			id : -5390068938292666446,
			access_hash : 638716577895964605,
			title : 'xymvbZ1f6SFT0q4Q',
			short_name : 'b5GT6BeFHgWJ20Os',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'YC2MVImBvuPRHS17',
				),
				$client->photoSize(
					type : 'DS931u8Cy4MxmIPl',
					w : 24,
					h : 36,
					size : 25,
				),
				$client->photoCachedSize(
					type : 'ShmgeoCyYKGZTJpu',
					w : 0,
					h : 3,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'XzjgxrERWwQk3Bp1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'JkeAdWIpHB5Ob9TE',
					w : 91,
					h : 20,
					sizes : array(4),
				),
				$client->photoPathSize(
					type : 'Aai3cPLG60Wbx2r8',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 41,
			thumb_version : 67,
			thumb_document_id : -6581881270658134432,
			count : 29,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 3831048988078769055,
		),
	),
);
```