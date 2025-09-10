# messages.featuredStickers

**Description** : *Featured stickersets*

**Layer** : 214

```tl
messages.featuredStickers#be382906 flags:# premium:flags.0?true hash:long count:int sets:Vector<StickerSetCovered> unread:Vector<long> = messages.FeaturedStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **premium** | [`flags.0?true`](type/true) | Whether this is a premium stickerset |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>count</mark> | [`int`](type/int) | Total number of featured stickers |
| <mark>sets</mark> | [`Vector<StickerSetCovered>`](type/StickerSetCovered) | Featured stickersets |
| <mark>unread</mark> | [`Vector<long>`](type/long) | IDs of new featured stickersets |

---

## Type

[messages.FeaturedStickers](type/messages.FeaturedStickers)

---

## Example

```php
$messagesFeaturedStickers = $client->messages->featuredStickers(
	premium : true,
	hash : 0,
	count : 46,
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
				installed_date : 72,
				id : 1941288772154574966,
				access_hash : -4498219127077920484,
				title : 'G4UklcmpRegDJivu',
				short_name : 'awqDeOmHPc3UpnGs',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 47,
				thumb_version : 19,
				thumb_document_id : 4968794922544357201,
				count : 47,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : 1608461464010254622,
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
				installed_date : 30,
				id : 7510645874683560766,
				access_hash : 5997461721277152439,
				title : 'qps0cCXyliDmMJIe',
				short_name : 'ivLQRq4PVWMp0kw9',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 76,
				thumb_version : 0,
				thumb_document_id : 3788661978205199695,
				count : 28,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : 2304321644144067916,
				),
				$client->document(
					id : 4828066117003867271,
					access_hash : -6332232172762725894,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 34,
					mime_type : 'tUd1B4PA2iNHD6wl',
					size : -4631521627342297807,
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
					dc_id : 91,
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
				installed_date : 77,
				id : -2611055061961189575,
				access_hash : 2493025838170486789,
				title : 'ZVepmqyQsL0ljTWY',
				short_name : 'ZydpozWU9ePfiwcJ',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 16,
				thumb_version : 24,
				thumb_document_id : 6250448429834376497,
				count : 72,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'xbueldQn49M6XFwv',
					documents : array(3760589194032495037),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 6787992894964533749,
					keyword : array('SvxLlTO8q72PB1Fk'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : -8397470751919455320,
				),
				$client->document(
					id : 441338271723482726,
					access_hash : 8448435388856599962,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 62,
					mime_type : 'ZnjQR6ewNYa5CqxS',
					size : 9023413626162821598,
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
					dc_id : 2,
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
				installed_date : 38,
				id : 6438202022038315416,
				access_hash : 4992708500826199433,
				title : 'DHpVcia6jtI074uy',
				short_name : 'mJDAKOBE2Q9Io8Rn',
				thumbs : array(
					$client->photoSizeEmpty(...),
					$client->photoSize(...),
					$client->photoCachedSize(...),
					$client->photoStrippedSize(...),
					$client->photoSizeProgressive(...),
					$client->photoPathSize(...),
				),
				thumb_dc_id : 2,
				thumb_version : 13,
				thumb_document_id : 906411947370478684,
				count : 32,
				hash : 0,
			),
		),
	),
	unread : array(-6955465599455284442),
);
```