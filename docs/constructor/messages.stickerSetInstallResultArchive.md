# messages.stickerSetInstallResultArchive

**Description** : *The stickerset was installed, but since there are too many stickersets some were archived*

**Layer** : 214

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
				installed_date : 97,
				id : 1426519495501620982,
				access_hash : -1909205772240726494,
				title : 'sKHr8kLaX6T9Yo1b',
				short_name : 'ngiFt0e3Sof1OaGc',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 66,
				thumb_version : 37,
				thumb_document_id : 2425855410392426072,
				count : 80,
				hash : 7,
			),
			cover : $client->documentEmpty(
				id : 4943437810753888506,
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
				installed_date : 91,
				id : 3012040614204630625,
				access_hash : 6050815850468935745,
				title : 'pf5Vh8ljC1nNtRQP',
				short_name : 'JnpoWObfrQdVXqKw',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 38,
				thumb_version : 1,
				thumb_document_id : -2097924963769742333,
				count : 85,
				hash : 12,
			),
			covers : array(
				$client->documentEmpty(
					id : -1222366835753990775,
				),
				$client->document(
					id : 2410681161634195567,
					access_hash : 8463035426268849334,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 77,
					mime_type : 'UvZ8CrRxVFLweqtO',
					size : -7114012852621522274,
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
					dc_id : 62,
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
				installed_date : 27,
				id : -4582068591484479992,
				access_hash : 8337272887769436891,
				title : 'yZ63baBGgMXRj2TN',
				short_name : 'UAWGnIpXjxCBH2fw',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 54,
				thumb_version : 41,
				thumb_document_id : -1457102987818895082,
				count : 21,
				hash : 74,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'EPWNMXJ4xkYs0u9K',
					documents : array(-4548081618690479816),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 3713806792690921008,
					keyword : array('j1sBt2Sbv9Uo5Hn0'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 7652007435922792361,
				),
				$client->document(
					id : -2107833770544914463,
					access_hash : 4890687609287239064,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 41,
					mime_type : 'tfCe4nmvksboAGZD',
					size : 159917273342575800,
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
					dc_id : 61,
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
				installed_date : 76,
				id : -5671071692412804569,
				access_hash : -1230655021772615376,
				title : '1UTrxZ5JApNmiK2a',
				short_name : 'WIUAYNlcmxK5BV3r',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 19,
				thumb_version : 26,
				thumb_document_id : -6049090265889354646,
				count : 86,
				hash : 50,
			),
		),
	),
);
```