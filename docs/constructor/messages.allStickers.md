# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 214

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
	hash : -3177457182909234951,
	sets : array(
		$client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 18,
			id : -6448395232913259722,
			access_hash : -2845622276786674363,
			title : 'gekSr9avb3OQJxMh',
			short_name : 'dbvumK4lpEo1s8tN',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'KTBIrxzi3yJNdYDV',
				),
				$client->photoSize(
					type : 'A0WiHvUcSCIDzYQ6',
					w : 81,
					h : 46,
					size : 32,
				),
				$client->photoCachedSize(
					type : 'ZWXGvReqB9b43TUf',
					w : 89,
					h : 22,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'bh7JmSNGdXFeuq6l',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'wBMdg6H4NO7YCVZf',
					w : 55,
					h : 13,
					sizes : array(60),
				),
				$client->photoPathSize(
					type : 'h5xcTWkXnQFM38sm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 81,
			thumb_version : 49,
			thumb_document_id : 3764057210460244446,
			count : 56,
			hash : 32,
		),
	),
);
```