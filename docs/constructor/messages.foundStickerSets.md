# messages.foundStickerSets

**Description** : *Found stickersets*

**Layer** : 211

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
	hash : 546469522873182896,
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
				installed_date : 0,
				id : -295749053664751339,
				access_hash : -5913926174703163270,
				title : 'CnbcgwYmTRPhMl6D',
				short_name : '6DKn8lE2rCAkqLae',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 82,
				thumb_version : 78,
				thumb_document_id : -8361985014994388776,
				count : 37,
				hash : 24,
			),
			cover : $client->documentEmpty(
				id : -6347499100689034403,
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
				installed_date : 14,
				id : 8998348358797574757,
				access_hash : -6797803122396543846,
				title : '2YoQmWfHgUOJVjPN',
				short_name : 'Zy9HIMGAr5uUL0vz',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 56,
				thumb_version : 48,
				thumb_document_id : 8007560794835818892,
				count : 77,
				hash : 1,
			),
			covers : array(
				$client->documentEmpty(
					id : 5853308765648432901,
				),
				$client->document(
					id : 6284577209193986009,
					access_hash : 2262545137697478554,
					file_reference : 'N?BғLiveProtoȦ?z?',
					date : 27,
					mime_type : 'EL4h9IO1pWd3TuJZ',
					size : 6092568816283831349,
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
					dc_id : 15,
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
				installed_date : 41,
				id : -6888651479600261950,
				access_hash : -7755734382877825865,
				title : 'dTtSsGLg1QVFDpU9',
				short_name : 'kwhnMLA6C1cRTmO0',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 4,
				thumb_version : 98,
				thumb_document_id : 2818165787422261515,
				count : 58,
				hash : 100,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'cQk9Cn1whdqBSJle',
					documents : array(4526738197320187625),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -8513658671506770563,
					keyword : array('RY8HwhSkWf4C7ouz'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -2550558110543678987,
				),
				$client->document(
					id : 2649079658640280284,
					access_hash : 4425717450395177507,
					file_reference : 'a?x??LiveProto?I??',
					date : 73,
					mime_type : 'V5r0yktY4ue1GbJs',
					size : -1059267657275345691,
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
					dc_id : 66,
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
				installed_date : 96,
				id : -5030019558656810092,
				access_hash : -5200057481918744515,
				title : 'fGoVSDFRpdKrYOk7',
				short_name : 'fca61h7gm3sSt2kx',
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
				thumb_document_id : -2393422540281594505,
				count : 56,
				hash : 40,
			),
		),
	),
);
```