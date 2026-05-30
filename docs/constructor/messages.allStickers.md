# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 222

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
			installed_date : 37,
			id : 2546825805259590324,
			access_hash : -1532644897415431027,
			title : 'QqdJNsaS6MUPWKuE',
			short_name : 'cUjV3ZvMzpeTabXJ',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'WFs6MnA1wXgxlUuP',
				),
				$client->photoSize(
					type : 'yEeUK6iZHkl2ICgm',
					w : 38,
					h : 20,
					size : 28,
				),
				$client->photoCachedSize(
					type : '7EYUhkewRH2NBWOf',
					w : 80,
					h : 4,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '9xGc0pugSv2JzPQy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'BoynubLfh2vxecdJ',
					w : 20,
					h : 44,
					sizes : array(42),
				),
				$client->photoPathSize(
					type : 'Vbtm7RSgeucpx5jy',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 15,
			thumb_version : 40,
			thumb_document_id : -4106601564502377374,
			count : 78,
			hash : 0,
		),
	),
);
```