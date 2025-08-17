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
	hash : -4163802772707130958,
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
				installed_date : 69,
				id : -7312297246505364305,
				access_hash : -5579554748862863297,
				title : 'CN3xQscFd064pM8m',
				short_name : 'qkLz9dmAVIPXNOZf',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 28,
				thumb_version : 94,
				thumb_document_id : 1810787741506975863,
				count : 29,
				hash : 29,
			),
			cover : $client->documentEmpty(
				id : -7098248643362848125,
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
				installed_date : 83,
				id : 5565958646999569286,
				access_hash : 833838194865943142,
				title : 'Jk0ONvtyngBQGP7a',
				short_name : 'Ng2fCrA0do83GzRQ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 62,
				thumb_version : 30,
				thumb_document_id : -6877924315922754343,
				count : 39,
				hash : 39,
			),
			covers : array(
				$client->documentEmpty(
					id : 4145764668946428477,
				),
				$client->document(
					id : 1084220345502966073,
					access_hash : 8470294076090689574,
					file_reference : '!+b*?LiveProto?AWY%',
					date : 7,
					mime_type : 'jHJUIwMnsZ7Yq4kF',
					size : 8616856318054450377,
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
					dc_id : 56,
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
				installed_date : 64,
				id : 4427770928635863554,
				access_hash : -6324642533563184385,
				title : 'BMihdr6KQVwEUxgH',
				short_name : 'KmQtZES8GMqcsx2e',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 56,
				thumb_version : 71,
				thumb_document_id : 1988886182894828940,
				count : 72,
				hash : 67,
			),
			packs : array(
				$client->stickerPack(
					emoticon : '2IayuEUcQdtLbg9f',
					documents : array(-5301640442484454767),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 3791725892503750229,
					keyword : array('efmbytYhZLSKqQr4'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -8566861556479801593,
				),
				$client->document(
					id : -1634986688880633626,
					access_hash : -5586779950869748543,
					file_reference : 'S?I0vLiveProto?`?g?',
					date : 70,
					mime_type : '7Zr0hPAc6uxaUNB2',
					size : 196954848966995398,
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
					dc_id : 58,
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
				installed_date : 94,
				id : 2271307526144180214,
				access_hash : -2548076085774609651,
				title : 'uS4LUMXrFxW1eJkD',
				short_name : '0bR8vKueAfktWcYp',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 23,
				thumb_version : 59,
				thumb_document_id : -2087988532852925792,
				count : 2,
				hash : 45,
			),
		),
	),
);
```