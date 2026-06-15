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
			installed_date : 35,
			id : 271553476079648442,
			access_hash : 4886689030992709414,
			title : 'iRWHSMf0XY51mh3g',
			short_name : 'qE2Ihs0RaLmAwlYu',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '3RKIos75jBGpQtlY',
				),
				$client->photoSize(
					type : 'jDWgQ9mrSbdVu0Ba',
					w : 61,
					h : 100,
					size : 12,
				),
				$client->photoCachedSize(
					type : 'U4FOfsrjiuHCRXqK',
					w : 73,
					h : 75,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'tgIZBA4jqk7o5Gcx',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Fi48aNQkg1ZdyCsX',
					w : 31,
					h : 56,
					sizes : array(0),
				),
				$client->photoPathSize(
					type : 'lfxy1hFdk6UE4G83',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 7,
			thumb_version : 65,
			thumb_document_id : -5154568813400850941,
			count : 66,
			hash : 0,
		),
		cover : $client->documentEmpty(
			id : 8366723603726305335,
		),
	),
);
```