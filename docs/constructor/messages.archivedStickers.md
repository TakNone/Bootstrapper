# messages.archivedStickers

**Description** : *Archived stickersets*

**Layer** : 216

```tl
messages.archivedStickers#4fcba9c8 count:int sets:Vector<StickerSetCovered> = messages.ArchivedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of archived stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.ArchivedStickers](type/messages.ArchivedStickers)

---

## Example

```php
$messagesArchivedStickers = $client->messages->archivedStickers(
	count : 66,
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
				installed_date : 18,
				id : 5635475959443955824,
				access_hash : 3802546764316671513,
				title : 'lZDys6vfBdPYtKHh',
				short_name : 'PsAng5MTzZhR9V0N',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 66,
				thumb_version : 61,
				thumb_document_id : 3465554789298552106,
				count : 7,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 3619063336056215752,
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
				installed_date : 93,
				id : 69200666208395428,
				access_hash : 3463111882562145690,
				title : 'wqVTL5arZY7loNU2',
				short_name : '4cxBsepTW7GM9YES',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 63,
				thumb_version : 11,
				thumb_document_id : -5292183898332250287,
				count : 52,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 1073077858789972418,
				),
				$client->document(
					id : -5511885788153103486,
					access_hash : -3420033534082687312,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : 'YNSdIr7voXWAHJnK',
					size : -5155357923728479652,
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
					dc_id : 57,
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
				installed_date : 59,
				id : 2830160891113906504,
				access_hash : 5337370729910121904,
				title : 'P4JgxUriEAS86G0X',
				short_name : 'cuS1pO9EbW0g8yCX',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 87,
				thumb_version : 68,
				thumb_document_id : -6324813640263858574,
				count : 12,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'PDflU2N5M9IBEXsR',
					documents : array(426811440171462120),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -67514771814865098,
					keyword : array('0p7diw5Z3vzEWu8q'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2401173140846285717,
				),
				$client->document(
					id : 9103679075059173439,
					access_hash : -5397838048966257516,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 21,
					mime_type : '6GYvHWocfLQB8EDO',
					size : -7959641292525155588,
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
		$client->stickerSetNoCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 64,
				id : 5861676658320565653,
				access_hash : -5332245351769079135,
				title : 'buKBcIdTLtRF3pma',
				short_name : 'mdoTfBpLE0ONC7zK',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 95,
				thumb_version : 1,
				thumb_document_id : -5904968018350804848,
				count : 66,
				hash : 0,
			),
		),
	),
);
```