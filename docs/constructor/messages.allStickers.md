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
	hash : -91881245739467092,
	sets : array(
		$client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 0,
			id : -3812020695826509665,
			access_hash : 846892222194327782,
			title : 'i06z3SswMkjQdm5y',
			short_name : 'IaAodcGPskELjrf7',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'Z4FhdufceT5qOwL7',
				),
				$client->photoSize(
					type : 'NYa98tvAJU3PsKkp',
					w : 58,
					h : 3,
					size : 24,
				),
				$client->photoCachedSize(
					type : '1ikJ8HFwbVv53eAx',
					w : 8,
					h : 79,
					bytes : 'Z??*LiveProto?ʙ??',
				),
				$client->photoStrippedSize(
					type : 'ut7T8KNrICdcMf0z',
					bytes : '????LiveProto?,??t',
				),
				$client->photoSizeProgressive(
					type : 'RIC2xXr7mwPqFMfc',
					w : 61,
					h : 97,
					sizes : array(100),
				),
				$client->photoPathSize(
					type : 'unevU0CI29jlNHQO',
					bytes : '??/b?LiveProtozf??0',
				),
			),
			thumb_dc_id : 0,
			thumb_version : 97,
			thumb_document_id : -3837871598341230807,
			count : 26,
			hash : 83,
		),
	),
);
```