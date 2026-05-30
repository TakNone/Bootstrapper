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
			installed_date : 49,
			id : 8754603334803365673,
			access_hash : 3998204792947677294,
			title : 'jitQSncBKZPUvF68',
			short_name : 'bfId4iqMPzCjmJZ7',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '6yhClXw8PvnE3bs2',
				),
				$client->photoSize(
					type : 'n80SjWPFsN5U2Q1J',
					w : 55,
					h : 66,
					size : 85,
				),
				$client->photoCachedSize(
					type : 'zXrD4Y3Ut0yO6NT1',
					w : 17,
					h : 64,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'jxk4aF9D1N6Y3VS7',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ZyG3utqaiJvFNYXT',
					w : 29,
					h : 94,
					sizes : array(99),
				),
				$client->photoPathSize(
					type : 'pwoHY2XDs4r185m6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 72,
			thumb_version : 11,
			thumb_document_id : 8532592967508751502,
			count : 36,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 1056944102125523206,
		),
	),
);
```