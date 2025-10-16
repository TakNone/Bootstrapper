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
			installed_date : 4,
			id : -8959195882192422045,
			access_hash : 3395891707302206285,
			title : 'SBuIso18CwUTlF06',
			short_name : 'W3glAtZv9fRxJUoT',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 4,
			thumb_version : 76,
			thumb_document_id : -6080339806371887031,
			count : 72,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 5403840224969235820,
		),
	),
);
```