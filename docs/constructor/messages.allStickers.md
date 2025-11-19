# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 218

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
			installed_date : 16,
			id : 539173061132404803,
			access_hash : 9202425174532338566,
			title : 'UxoZYwzNbl9fT2nA',
			short_name : 'TFeUH4Igp3hn9BJA',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '32YoKAyJfrcHPTwD',
				),
				$client->photoSize(
					type : 'HLomejphPGTM7yqs',
					w : 19,
					h : 45,
					size : 87,
				),
				$client->photoCachedSize(
					type : 'nNZKcwV5bFyGAd0s',
					w : 2,
					h : 88,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'oVxN2UtjLMvZcQqH',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'YhqzmK2nJgbMtApB',
					w : 21,
					h : 76,
					sizes : array(49),
				),
				$client->photoPathSize(
					type : 'E8VgfwaIvZNCQBuK',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 21,
			thumb_version : 56,
			thumb_document_id : -1206860479692951483,
			count : 0,
			hash : 0,
		),
	),
);
```