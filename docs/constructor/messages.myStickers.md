# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 211

```tl
messages.myStickers#faff629d count:int sets:Vector<StickerSetCovered> = messages.MyStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of owned stickersets |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Stickersets |

---

## Type

[messages.MyStickers](type/messages.MyStickers)

---

## Example

```php
$messagesMyStickers = $client->messages->myStickers(
	count : 60,
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
				installed_date : 33,
				id : 8347645178481426086,
				access_hash : 5622879700755594822,
				title : '5soK932pznqweTrg',
				short_name : 'ETKvIXU2e4bNcfoL',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 73,
				thumb_version : 48,
				thumb_document_id : -4258719074054937337,
				count : 39,
				hash : 91,
			),
			cover : $client->documentEmpty(
				id : -305596295541076561,
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
				installed_date : 75,
				id : 7465777258911760756,
				access_hash : -8606501325709803139,
				title : 'sYFEVxnmC9I5rKfJ',
				short_name : 'lGEOebHuB4zQWUwS',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 39,
				thumb_version : 34,
				thumb_document_id : -3401290737828977119,
				count : 31,
				hash : 2,
			),
			covers : array(
				$client->documentEmpty(
					id : 610945299213835232,
				),
				$client->document(
					id : -3763684235312592551,
					access_hash : -452922296642096566,
					file_reference : '??>_LiveProto??V	',
					date : 84,
					mime_type : 'N4C02Er3KOmYx9Wk',
					size : 1461032497640742881,
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
					dc_id : 34,
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
				installed_date : 52,
				id : -8907486735011665590,
				access_hash : -2321095964792608167,
				title : 'lmb9d07gnax6L3yC',
				short_name : 'bEJ3jkXyA4oBRfgK',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 53,
				thumb_version : 52,
				thumb_document_id : -2336684560234949603,
				count : 8,
				hash : 75,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '6jLNODKFgG8EI0k2',
					documents : array(4990070579351986633),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -4150322217217124614,
					keyword : array('NlCQb36FcHX29zjp'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 26391840423676877,
				),
				$client->document(
					id : 1639068588946011077,
					access_hash : 8068600194466210458,
					file_reference : '?n??LiveProtoφo?2',
					date : 74,
					mime_type : 'iyjscrCG96v3HASo',
					size : 5927599218338929070,
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
					dc_id : 79,
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
				installed_date : 28,
				id : -3900584047667298225,
				access_hash : -4994037503811753876,
				title : 'xZeQFgnI9WHa6o2h',
				short_name : 'PBrZgQ1I0VJcHGa8',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 12,
				thumb_version : 27,
				thumb_document_id : -1820215897571846203,
				count : 94,
				hash : 30,
			),
		),
	),
);
```