# messages.allStickers

**Description** : *Info about all installed stickers*

**Layer** : 225

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
			installed_date : 39,
			id : -4000376700418466093,
			access_hash : -6568929190076825273,
			title : 'MJi8QHgkWfR1ou0d',
			short_name : 'fSAV0U4C6rIBZpFs',
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'd5TtvgA6El2JuILQ',
				),
				$client->photoSize(
					type : '8vjcVgo0DPyzFU2R',
					w : 9,
					h : 88,
					size : 50,
				),
				$client->photoCachedSize(
					type : 'JE9jKln0XVLF8NrI',
					w : 94,
					h : 96,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'aqdEMrH728fycUVv',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'OfVF01oJI76yDbUL',
					w : 21,
					h : 100,
					sizes : array(25),
				),
				$client->photoPathSize(
					type : 'pe7YOT64Ea81FhHu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 45,
			thumb_version : 73,
			thumb_document_id : 3335772667316835362,
			count : 69,
			hash : 0,
		),
	),
);
```