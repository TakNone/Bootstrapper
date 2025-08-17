# recentMeUrlStickerSet

**Description** : *Recent t.me stickerset installation URL*

**Layer** : 211

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
			installed_date : 67,
			id : -1672466658311178452,
			access_hash : -8488316915203835483,
			title : 's0hX9OP8eASrTyJB',
			short_name : '1gLICoknARvBuOWJ',
			thumbs : array(
				$client->photoSizeEmpty(...),
				$client->photoSize(...),
				$client->photoCachedSize(...),
				$client->photoStrippedSize(...),
				$client->photoSizeProgressive(...),
				$client->photoPathSize(...),
			),
			thumb_dc_id : 42,
			thumb_version : 68,
			thumb_document_id : -8391459243639117946,
			count : 85,
			hash : 37,
		),
		cover : $client->documentEmpty(
			id : 8818488991709296081,
		),
	),
);
```