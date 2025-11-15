# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 216

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
			installed_date : 79,
			id : -2654017652556825421,
			access_hash : -5945955231569614275,
			title : 'bzIrSFfq059iHZjt',
			short_name : 'yKJba2GomwE5fVnM',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'F4MhbOkeaWPHCf2q',
				),
				$client->photoSize(
					type : '6NsECgbnHLKARYcQ',
					w : 50,
					h : 68,
					size : 25,
				),
				$client->photoCachedSize(
					type : 'MHnuOsdvPxyUot8z',
					w : 55,
					h : 67,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Ufoj7pH1RyD8KYq0',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'y4Eo60gFWAnYKRSI',
					w : 66,
					h : 100,
					sizes : array(22),
				),
				$client->photoPathSize(
					type : 'jv0UuRFXAVTkLMx5',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 24,
			thumb_version : 68,
			thumb_document_id : -1263108477158582683,
			count : 30,
			hash : 0,
		),
	),
);
```