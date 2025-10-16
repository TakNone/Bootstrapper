# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 216

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
	count : 63,
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
				installed_date : 25,
				id : -1703976538662553397,
				access_hash : 3688457110993316684,
				title : 'Cvl0OiUngb8kopqd',
				short_name : 'zVTIFWShiP3LgBNH',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 19,
				thumb_version : 27,
				thumb_document_id : -6639073890515276036,
				count : 76,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 4205157409550949632,
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
				id : 8251660691735204709,
				access_hash : 1697850291963818228,
				title : 'qWmPSkQNLR9CxcFA',
				short_name : 'rfAHVeKFdhaBpNJx',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 91,
				thumb_version : 50,
				thumb_document_id : 1662704156062049104,
				count : 22,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -6466530339863217761,
				),
				$client->document(
					id : 5401475681849879829,
					access_hash : -2635823196077353515,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 64,
					mime_type : 'y4ewZkTYaPRNtOCJ',
					size : 582684423496934510,
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
		$client->stickerSetFullCovered(
			set : $client->stickerSet(
				archived : true,
				official : true,
				masks : true,
				emojis : true,
				text_color : true,
				channel_emoji_status : true,
				creator : true,
				installed_date : 55,
				id : 28165851446507669,
				access_hash : 3902071363160490098,
				title : '6y3ncS7ePTZuDAKb',
				short_name : 'I3MWFZCHiOo8vV4L',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 53,
				thumb_version : 80,
				thumb_document_id : -5996270349383736891,
				count : 85,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'IczC2KtWGdgux9PV',
					documents : array(-5230290026780796423),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -4415107623946865079,
					keyword : array('x3BoOmG7hTY8wczC'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 3847431251878422175,
				),
				$client->document(
					id : 2961350635046367246,
					access_hash : 5521509679416340110,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 13,
					mime_type : 'Mt5CHn4BoEcWVuhf',
					size : 5624794725422091409,
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
					dc_id : 6,
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
				installed_date : 52,
				id : -5403430018108899238,
				access_hash : -9060717763612393533,
				title : '40glmC63s9obpnVv',
				short_name : '46GWbQ8SB9LuCwcv',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 74,
				thumb_version : 67,
				thumb_document_id : 9117457214413065922,
				count : 31,
				hash : 0,
			),
		),
	),
);
```