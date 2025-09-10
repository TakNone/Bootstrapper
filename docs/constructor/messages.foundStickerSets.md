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
	hash : 0,
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
				installed_date : 20,
				id : -5990599026594333470,
				access_hash : 6396714246772430895,
				title : 'xlrhauWwPjLSBCvq',
				short_name : 'YSq3Jp5Ii28OL19T',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 57,
				thumb_version : 13,
				thumb_document_id : -7182877101536148410,
				count : 81,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -9045834547177866180,
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
				installed_date : 60,
				id : -6263723954100626447,
				access_hash : -646958712515635918,
				title : 'tMeugX6AaK2kUh4C',
				short_name : '3ulfLKHz0gc42ZBi',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 7,
				thumb_version : 40,
				thumb_document_id : -1726981227751003900,
				count : 49,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -2619696950841513164,
				),
				$client->document(
					id : 4120611512612193478,
					access_hash : 5672330519684064899,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 29,
					mime_type : '7xvuyJ9YPLtGKpR6',
					size : 6019020038676258360,
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
					dc_id : 55,
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
				installed_date : 7,
				id : -7716412766613154772,
				access_hash : -2808732582155012448,
				title : 'SrgU1oeKY0askXPN',
				short_name : 'kJrtSjIHbdF9zKyW',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 92,
				thumb_version : 96,
				thumb_document_id : -1127473966359206172,
				count : 16,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'JNLiBbZrdEnYm2tW',
					documents : array(-8849529707546700464),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -396351606935576809,
					keyword : array('NHJ9jOFT3pmiCo6e'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -5745689902941408637,
				),
				$client->document(
					id : -2395548190152631500,
					access_hash : 8864169032590031045,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 80,
					mime_type : 'JcQgrSd7UjXqT3Vu',
					size : 516639049500010107,
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
					dc_id : 99,
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
				installed_date : 65,
				id : 5901096883994440505,
				access_hash : 7085857102590309487,
				title : 'PYfIBwOAzSCk6lsG',
				short_name : 'pKYxgy2VFnfiC3eM',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 94,
				thumb_version : 1,
				thumb_document_id : -7500116009830278595,
				count : 73,
				hash : 0,
			),
		),
	),
);
```