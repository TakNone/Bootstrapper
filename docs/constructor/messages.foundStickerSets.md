# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 214

```tl
messages.foundStickerSets#8af09dd2 hash:long sets:Vector<StickerSetCovered> = messages.FoundStickerSets;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Found stickersets |

---

## Type

[messages.FoundStickerSets](type/messages.FoundStickerSets)

---

## Example

```php
$messagesFoundStickerSets = $client->messages->foundStickerSets(
	hash : -409839675843580122,
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
				installed_date : 81,
				id : 3582040503390786897,
				access_hash : 8872158987618105636,
				title : 'UfvMT6wOHqdYLF38',
				short_name : '1zIQYTZmP28tg0NR',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 15,
				thumb_version : 51,
				thumb_document_id : 7152729729334036026,
				count : 14,
				hash : 19,
			),
			cover : $client->documentEmpty(
				id : 5732177172315874981,
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
				installed_date : 56,
				id : 6158720063306940321,
				access_hash : 6920387839781352114,
				title : '9q3iYlWAhLMcSGID',
				short_name : 'kAPIH0LEcfdgGwNU',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 99,
				thumb_version : 6,
				thumb_document_id : 5704217560610959385,
				count : 47,
				hash : 99,
			),
			covers : array(
				$client->documentEmpty(
					id : 2832455810730891943,
				),
				$client->document(
					id : -5520814928429681234,
					access_hash : 2454477790421487752,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 62,
					mime_type : 'ogI9i4CYH7OuV86w',
					size : 5742743380161969315,
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
					dc_id : 76,
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
				installed_date : 97,
				id : 1899075220894481969,
				access_hash : 8620932368825961162,
				title : 'mjOvDoFM4yBPniKU',
				short_name : 'R21NqOnsw3DE7oil',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 7,
				thumb_version : 72,
				thumb_document_id : -3224478653872911463,
				count : 93,
				hash : 71,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'QBZTpestIRgN9yOc',
					documents : array(-3093472669700749194),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -3796472133618267483,
					keyword : array('k4tv2e9iJEzIpC8l'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 8600792889029154692,
				),
				$client->document(
					id : 8226045805178656887,
					access_hash : 1069942777584122487,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 9,
					mime_type : '3aqY2UPGubpQeZHA',
					size : -8470238415159935644,
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
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 89,
				id : 899260360421994311,
				access_hash : -2828269229201442832,
				title : '1shbS6jwalAMBZT7',
				short_name : 'bGdUNhX3ng5AulvJ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 22,
				thumb_version : 17,
				thumb_document_id : -1248948964946925025,
				count : 63,
				hash : 18,
			),
		),
	),
);
```