# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 214

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
	hash : 3076508059378367516,
	count : 11,
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
				installed_date : 8,
				id : 332558749772453550,
				access_hash : -3681458264626986610,
				title : 'raPXKmdUzRfkhqSs',
				short_name : 'WBEfxkdsvjwaypOL',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 15,
				thumb_version : 6,
				thumb_document_id : -7202164488853969482,
				count : 32,
				hash : 14,
			),
			cover : $client->documentEmpty(
				id : -6566530790871126825,
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
				installed_date : 57,
				id : 6989160665892873495,
				access_hash : -8512908799028230406,
				title : 'N0M45ySWvApblwIq',
				short_name : 'S0JWHMqP1aAciVEN',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 43,
				thumb_version : 94,
				thumb_document_id : -937701159972730915,
				count : 90,
				hash : 37,
			),
			covers : array(
				$client->documentEmpty(
					id : -2204919014706099216,
				),
				$client->document(
					id : 9131430934238180527,
					access_hash : 2371378233777272394,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 5,
					mime_type : 'HDRYdIxEsiZSF92v',
					size : 8120709253566449383,
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
					dc_id : 9,
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
				installed_date : 91,
				id : -4140144137749661746,
				access_hash : -3424104679023288938,
				title : 'xHS6hbOEV2fn1rqz',
				short_name : 'gr1l3cJKeh4HTUOw',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 87,
				thumb_version : 20,
				thumb_document_id : -8710797422458132012,
				count : 13,
				hash : 14,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'TN40ERg9GyQ58rnL',
					documents : array(-1422477595102647283),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 7346092596320954764,
					keyword : array('NpyojncEv3CIe09V'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2941850774064001671,
				),
				$client->document(
					id : -3792899865244805653,
					access_hash : -7302451026244051307,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 31,
					mime_type : 'etqpsRNl1PW9Fzx2',
					size : 2366713165507880058,
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
					dc_id : 46,
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
				installed_date : 11,
				id : -1605658409981212347,
				access_hash : 2504313444798062303,
				title : 'yi0rmwctehvfqWAb',
				short_name : 'vV9xw5Z8HQUFsWeG',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 15,
				thumb_version : 60,
				thumb_document_id : -5716180875389394450,
				count : 37,
				hash : 84,
			),
		),
	),
	unread : array(-1012223227845560255),
);
```