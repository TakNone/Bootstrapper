# recentMeUrlStickerSet

**Description** : *Recent t\.me stickerset installation URL*

**Layer** : 216

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
			installed_date : 0,
			id : 5301261960501302061,
			access_hash : 1198616055166803247,
			title : 'MY98aRLODE37qTVQ',
			short_name : 'pV0eFYB8XKZ267jk',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 72,
			thumb_version : 79,
			thumb_document_id : -2181826495843364878,
			count : 96,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : -3370470330045030755,
		),
	),
);
```