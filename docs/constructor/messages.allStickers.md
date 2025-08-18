# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 211

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
	hash : 2021305852138334162,
	sets : array(
		$client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 67,
			id : 4475327408612831616,
			access_hash : 5476964879567308776,
			title : 'ONgPhZux83MRdYJD',
			short_name : 'c2PpTO0lSDxUnQ1E',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'oesXDr3ZigSy5E4J',
				),
				$client->photoSize(
					type : '86l7Qu2yS4IoZ3ix',
					w : 10,
					h : 10,
					size : 13,
				),
				$client->photoCachedSize(
					type : 'XDbgWaR0Fh3xIEk8',
					w : 82,
					h : 16,
					bytes : '????LiveProto?ͦQ',
				),
				$client->photoStrippedSize(
					type : 'FyLzBgwfq5OidjEx',
					bytes : '??^1?LiveProtot
(?',
				),
				$client->photoSizeProgressive(
					type : '8utVlno5Hs74A29v',
					w : 93,
					h : 27,
					sizes : array(80),
				),
				$client->photoPathSize(
					type : 'uTpMZqnXefhFo3QV',
					bytes : 'q????LiveProto?u$+',
				),
			),
			thumb_dc_id : 62,
			thumb_version : 80,
			thumb_document_id : -5687708702616616262,
			count : 83,
			hash : 39,
		),
	),
);
```