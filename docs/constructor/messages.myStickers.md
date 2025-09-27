# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 214

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
	count : 5,
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
				installed_date : 83,
				id : 1058693302658788982,
				access_hash : -4543589881504059591,
				title : 'yGM0jeRpqOBbskVQ',
				short_name : '7Wf4JEIAOvTVcLyz',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 97,
				thumb_version : 83,
				thumb_document_id : -8739918553728062442,
				count : 45,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -5338417974840164272,
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
				installed_date : 59,
				id : -503864338914893906,
				access_hash : -4863652117734043528,
				title : 'piR29aPYhUvBsJlq',
				short_name : 'wJn1UjWHqtMPVKrL',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 20,
				thumb_version : 45,
				thumb_document_id : 7595869230609176189,
				count : 88,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 7516248104099377737,
				),
				$client->document(
					id : 5082594369568261588,
					access_hash : 6705348151578717495,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 72,
					mime_type : 'CH4glTVxwh53NZfy',
					size : -7510779748530380033,
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
					dc_id : 21,
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
				installed_date : 75,
				id : -6469723592467187251,
				access_hash : -9047216166900900662,
				title : 'dZr6fGLumhw2BbcF',
				short_name : 'DK9ZJsN2rRo50a6E',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 44,
				thumb_version : 33,
				thumb_document_id : 8892301704592667511,
				count : 39,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '6UqOselgmaX0WK3h',
					documents : array(-1139653711799363635),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 7398486623543649709,
					keyword : array('jPsCebORgLaB9X87'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -7792916340316825766,
				),
				$client->document(
					id : -3096797543730939920,
					access_hash : -6163814196818320202,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 38,
					mime_type : 'EMktB28KOiZFPvo6',
					size : -7257744056781990240,
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
					dc_id : 95,
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
				installed_date : 58,
				id : 3392584193047110731,
				access_hash : -6667696560829468760,
				title : 'jfDUpXiKSNo2ALlt',
				short_name : 'M8d4fFUoZDiCAV3j',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 24,
				thumb_version : 48,
				thumb_document_id : 6707252604115137952,
				count : 29,
				hash : 0,
			),
		),
	),
);
```