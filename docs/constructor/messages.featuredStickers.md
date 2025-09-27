# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 216

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : 0,
	count : 85,
	sets : array(
		$client->stickerSetCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 54,
				id : 7266941732004629166,
				access_hash : 45111348256864220,
				title : 'STkjAbKUE81Cyar2',
				short_name : 'LMSCtHuKdU9lX1QW',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 51,
				thumb_version : 84,
				thumb_document_id : 87648345325639707,
				count : 94,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4031029544114214309,
			),
		),
		$client->stickerSetMultiCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 100,
				id : 4424046733104803716,
				access_hash : -1296334603706289883,
				title : 'qCwZzk8V7Kaup3mJ',
				short_name : 'e5nCmOarSc93HwQR',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 33,
				thumb_version : 79,
				thumb_document_id : 1735874221642855257,
				count : 39,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 8079076464480170791,
				),
				$client->document(
					id : 7129467482789927707,
					access_hash : -2958492649106983616,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 57,
					mime_type : 'gwbO3vVDZoz0KXck',
					size : -5359979084843149508,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 67,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
		),
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 16,
				id : -6629138439999286416,
				access_hash : 2371476821770341660,
				title : 'nY5H9obfORaQym3h',
				short_name : 'S4Y1fiRmcLv2PtCK',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 22,
				thumb_version : 97,
				thumb_document_id : 2707980945586544693,
				count : 82,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'to7AQ5r3CgLvpzFf',
					documents : array(-1813367527000507074),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -7450545051652996258,
					keyword : array('h7UD28mscixN0a6o'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -6730243803700621063,
				),
				$client->document(
					id : -3416231677515476047,
					access_hash : -1477564235559109085,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 88,
					mime_type : 'HNtpnyTwjb9G7RVm',
					size : 5285943861212951037,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 70,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
		),
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 30,
				id : 3068663458498706796,
				access_hash : -2511880742907013254,
				title : 'XhM3kfqseSBQHUwb',
				short_name : 'dpiZ1sR0KGhEaTnb',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 86,
				thumb_version : 10,
				thumb_document_id : 38613459343786923,
				count : 19,
				hash : 0,
			),
		),
	),
	unread : array(-1420953725366740331),
);
```