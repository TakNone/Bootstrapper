# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 229

```tl
messages.allStickers#cdbbcebb hash:long sets:Vector<StickerSet> = messages.AllStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSet>`](type/StickerSet) | All stickersets |

---

## Type

[messages.AllStickers](type/messages.AllStickers)

---

## Example

```php
$messagesAllStickers = $client->messages->allStickers(
	hash : 0,
	sets : array(
		$client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 57,
			id : -6491367788364595580,
			access_hash : -1226172046365337834,
			title : 'oRXIqUHALg9YWzxS',
			short_name : 'YMPstgnJ5axI2ef1',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'bz5RBygY94mp6FVM',
				),
				$client->photoSize(
					type : 'jNbL185OdrCF9YMq',
					w : 69,
					h : 6,
					size : 20,
				),
				$client->photoCachedSize(
					type : 'pFLsmYWV684yvSuO',
					w : 9,
					h : 4,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Tjux0L2nfIByEAdJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '3N0th9WCcT86PZyR',
					w : 57,
					h : 46,
					sizes : array(17),
				),
				$client->photoPathSize(
					type : 'pCWOS9no0fP8ytd6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 38,
			thumb_version : 92,
			thumb_document_id : -5575164323446189158,
			count : 86,
			hash : 0,
		),
	),
);
```