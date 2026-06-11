# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 227

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
			installed_date : 35,
			id : 9175898708595081935,
			access_hash : 6290953329208589674,
			title : 'EZwSUxQ6Hp4ejTok',
			short_name : 'WD1i483tcXEpKuBh',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'IPEMvbLT3XYGydtk',
				),
				$client->photoSize(
					type : '1h8Qf2JeElnMjdga',
					w : 88,
					h : 57,
					size : 57,
				),
				$client->photoCachedSize(
					type : 'knuY7qPizs51MmFj',
					w : 95,
					h : 97,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ESmOVB0Kfql7z89A',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'NEZQVbK98j6xBPdn',
					w : 17,
					h : 30,
					sizes : array(38),
				),
				$client->photoPathSize(
					type : 'fG4Xwb3UoC0zkey6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 44,
			thumb_version : 9,
			thumb_document_id : 638171710448530170,
			count : 31,
			hash : 0,
		),
	),
);
```