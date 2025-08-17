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
				installed_date : 86,
				id : -6385381417499627056,
				access_hash : -3177430444782495021,
				title : 'hvwjoBHtTSe7mX0f',
				short_name : 'Yjc3JGRawzqXFbZS',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 73,
				thumb_version : 36,
				thumb_document_id : -2081308090603341656,
				count : 76,
				hash : 85,
			),
			cover : $client->documentEmpty(
				id : -160826119467558926,
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
				installed_date : 31,
				id : -6351540155365815194,
				access_hash : -8260545512246246686,
				title : '3qTeEsMNbWD1A2jQ',
				short_name : 'ezUPQtjIYi91Vd73',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 64,
				thumb_version : 27,
				thumb_document_id : -437179811119160235,
				count : 53,
				hash : 59,
			),
			covers : array(
				$client->documentEmpty(
					id : 753401996157180136,
				),
				$client->document(
					id : 1115708855664899500,
					access_hash : -7443942172908953992,
					file_reference : '?P?.?LiveProto?6?Rx',
					date : 57,
					mime_type : 'VCz7hdPceI3EMYb2',
					size : 1662702527353105670,
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
				installed_date : 13,
				id : 856447090516537899,
				access_hash : -8917019892761101714,
				title : '1PctOXSye6Whkv9w',
				short_name : 'JbwY7VvPEafN8H9S',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 54,
				thumb_version : 93,
				thumb_document_id : -2669695986259335856,
				count : 50,
				hash : 15,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'UcO85z1XbajgSoJ0',
					documents : array(-7267012283588952793),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : -5679872529801697456,
					keyword : array('ij8L4ugN1k0UsOpH'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 2001287913458608999,
				),
				$client->document(
					id : -3145985533167056955,
					access_hash : -6165488999204607371,
					file_reference : '? ??LiveProto˴
??',
					date : 28,
					mime_type : 'z7NT4scYZi8ngpQO',
					size : -3772669692759297196,
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
					dc_id : 25,
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
				installed_date : 50,
				id : 5863942369500301786,
				access_hash : 2193139659084930461,
				title : 'swp1tuBlibVXnC9K',
				short_name : '54a6OP0usvWz3dVh',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 56,
				thumb_version : 91,
				thumb_document_id : 5344342139090944903,
				count : 24,
				hash : 45,
			),
		),
	),
);
```