# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 211

```tl
messages.stickerSetInstallResultArchive#35e410a8 sets:Vector<StickerSetCovered> = messages.StickerSetInstallResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Archived stickersets |

---

## Type

[messages.StickerSetInstallResult](type/messages.StickerSetInstallResult)

---

## Example

```php
$messagesStickerSetInstallResult = $client->messages->stickerSetInstallResultArchive(
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
				installed_date : 79,
				id : 7565143082227971121,
				access_hash : -6996243388096471789,
				title : '4QVOmxnoljwCpEFg',
				short_name : 'EXC5n0AbYwLfPVBl',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 76,
				thumb_version : 57,
				thumb_document_id : -3152954682194886304,
				count : 98,
				hash : 32,
			),
			cover : $client->documentEmpty(
				id : -7311326361048111550,
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
				installed_date : 87,
				id : 3633572000754683963,
				access_hash : 5832039625780407001,
				title : 'JHGASDOqtRNn4oUY',
				short_name : 'HPdIcaoSe8ypkY4b',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 86,
				thumb_version : 28,
				thumb_document_id : -2040530011878407853,
				count : 7,
				hash : 66,
			),
			covers : array(
				$client->documentEmpty(
					id : 5230749934523026392,
				),
				$client->document(
					id : -1500051313531432306,
					access_hash : 1965789436737602122,
					file_reference : '?}???LiveProto.isp+',
					date : 31,
					mime_type : '2cFXsx9LTSPg6yzZ',
					size : 12175432136906634,
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
					dc_id : 30,
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
				installed_date : 25,
				id : -4483508843099584830,
				access_hash : 3148054136477157209,
				title : 'QoDZKvf1l9dWtRkx',
				short_name : 'gDvjhQF3Yls8qNPf',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 60,
				thumb_version : 49,
				thumb_document_id : 6223653680410239682,
				count : 40,
				hash : 36,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'kJXTDUmB5qQex18v',
					documents : array(-8312213228907282212),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -8655394231834232610,
					keyword : array('rJGwNhluyPM7gnvA'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -5779408910801324229,
				),
				$client->document(
					id : -6152102341229066448,
					access_hash : -1954081976327333059,
					file_reference : 'G?ͽLiveProtoyU?.',
					date : 41,
					mime_type : 'DVXuzCbsMwkgvolP',
					size : 5048832497269730555,
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
					dc_id : 98,
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
				installed_date : 63,
				id : 8978401089688748832,
				access_hash : -7312668607515803532,
				title : 'S9AzvfiHDLF831Pk',
				short_name : 'c3k4N0RvA2lDOUtY',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 9,
				thumb_version : 35,
				thumb_document_id : 868609154205221564,
				count : 86,
				hash : 86,
			),
		),
	),
);
```