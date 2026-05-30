# messages.myStickers

**Description** : *The list of stickersets owned by the current account &raquo;*

**Layer** : 222

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
	count : 13,
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
				id : -8697972505386109644,
				access_hash : 6443229063805469831,
				title : 'sJiyl4LojHq9BvpE',
				short_name : 'wtXBNknF4aZerfPE',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'OXynWDwCujGpsq7H',
					),
					$client->photoSize(
						type : '9WAUSn6TEex4c1Dq',
						w : 98,
						h : 58,
						size : 26,
					),
					$client->photoCachedSize(
						type : 'pFaSo5EALi1O2D0U',
						w : 23,
						h : 59,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'OoS74ERGFh0296Jc',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : '9l1T0Vdj8cFDJwCA',
						w : 48,
						h : 47,
						sizes : array(30),
					),
					$client->photoPathSize(
						type : '04bkSyZBAXndRuE3',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 23,
				thumb_version : 46,
				thumb_document_id : -8644076927313338414,
				count : 42,
				hash : 0,
			),
			cover : $client->documentEmpty(
				id : -494826988973500071,
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
				installed_date : 86,
				id : 5066451424487627990,
				access_hash : 2069928524647156663,
				title : '5r9VE6fhCjcvJU4x',
				short_name : 'jBYZr2g7GWnH0M9S',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '96Ll0xGNybvqBFgX',
					),
					$client->photoSize(
						type : 'a4y5jm1iBV3NYqZJ',
						w : 31,
						h : 16,
						size : 26,
					),
					$client->photoCachedSize(
						type : 'lKO5EotsIT42PkLW',
						w : 3,
						h : 25,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'vLD1i4sejMh7WAJt',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'dZNw56cseGtCoWxP',
						w : 94,
						h : 69,
						sizes : array(7),
					),
					$client->photoPathSize(
						type : 'Uor47p1KLEhQHTaF',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 13,
				thumb_version : 53,
				thumb_document_id : 2493659044359021121,
				count : 28,
				hash : 0,
			),
			covers : array(
				$client->documentEmpty(
					id : -6660111828089309777,
				),
				$client->document(
					id : -2268325815744675197,
					access_hash : 5738913230867266547,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 43,
					mime_type : 'nDQqlFk07ydAKOY3',
					size : -2752300756265411625,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'BFRTP8wfOmpKsuGg',
						),
						$client->photoSize(
							type : 'eDx0ozpmdcNHKTwG',
							w : 31,
							h : 61,
							size : 39,
						),
						$client->photoCachedSize(
							type : 'LDPadfM9FgtevQJm',
							w : 12,
							h : 3,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'lXTxU3gWBhmFkqLp',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'ZifXCJKyVDtEh1Fs',
							w : 91,
							h : 76,
							sizes : array(31),
						),
						$client->photoPathSize(
							type : 'niUx46JMHbzERtYo',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'semLvEYIcCr0VTAb',
							w : 45,
							h : 77,
							size : 97,
							video_start_ts : -1949552.5634765625,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 6915971338817382999,
							background_colors : array(35),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 2257917589704599449,
							background_colors : array(89),
						),
					),
					dc_id : 96,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 32,
							h : 41,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '3NYQxoZwiV01527r',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -1989041.7734375,
							w : 21,
							h : 8,
							preload_prefix_size : 57,
							video_start_ts : -163833.978515625,
							video_codec : 'VPL12hYjfcul0kNi',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 75,
							title : 'ECfh982AcHuS75DM',
							performer : 'yYCNDLo6HI3xf9SU',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'Bxy8sKOtokpd7Ug5',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'IyHpajMJr8YuOBs4',
							stickerset : $client->inputStickerSetEmpty(...),
						),
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
				id : 27928753203906763,
				access_hash : -6255510164235482481,
				title : 's1KqkYtHJnTwl8XU',
				short_name : 'HhFiD6jEpIqU3MPB',
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'qtQwj0NKIg4n3V6l',
					),
					$client->photoSize(
						type : 'tqXNEpm90Oc1GJBb',
						w : 1,
						h : 69,
						size : 8,
					),
					$client->photoCachedSize(
						type : '8V9pF4n1rSB2HEJl',
						w : 97,
						h : 34,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'XFe2iwgkzy8KGtxI',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'tag3Am4CbxBdRTHs',
						w : 69,
						h : 86,
						sizes : array(6),
					),
					$client->photoPathSize(
						type : '6qT7I2tOwFR9xkev',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 0,
				thumb_version : 66,
				thumb_document_id : -8131085558852880515,
				count : 34,
				hash : 0,
			),
			packs : array(
				$client->stickerPack(
					emoticon : 'd3S4myiR1PlrOHwg',
					documents : array(2979773931555172361),
				),
			),
			keywords : array(
				$client->stickerKeyword(
					document_id : 6734395472359132081,
					keyword : array('ZhgVzQbAk06XYOap'),
				),
			),
			documents : array(
				$client->documentEmpty(
					id : 6014616217851071356,
				),
				$client->document(
					id : 7208540771400711601,
					access_hash : 777537501506920506,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 93,
					mime_type : 'KXMwPcBnztA1suVg',
					size : 3270948004816881413,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'S6krie1bzpoOBhIL',
						),
						$client->photoSize(
							type : '80opirf4PzdGIHNA',
							w : 50,
							h : 22,
							size : 77,
						),
						$client->photoCachedSize(
							type : 'So7afwljZc5CeVg3',
							w : 47,
							h : 87,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'AW01kBqEpb5rMTPv',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : '8e3zTkhMPK75wnjb',
							w : 22,
							h : 85,
							sizes : array(83),
						),
						$client->photoPathSize(
							type : 'Osw0TU5LjhvPkIuW',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'LqICWGXBwsSjYzuU',
							w : 4,
							h : 47,
							size : 61,
							video_start_ts : -58352.9189453125,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -5662763540166236899,
							background_colors : array(61),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -7838953725842674432,
							background_colors : array(7),
						),
					),
					dc_id : 18,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 84,
							h : 30,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'J4YNOEswfVc71MgD',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 673122.6259765625,
							w : 25,
							h : 100,
							preload_prefix_size : 90,
							video_start_ts : 590710.2646484375,
							video_codec : 'AsYMDiwT3RGohNem',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 26,
							title : 'nXpCWqDUjZaY53ti',
							performer : 'sURtQCb8cP4A0273',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'pnJZgHszlG0eubh8',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'ufqQjB6xNJ9XMSFK',
							stickerset : $client->inputStickerSetEmpty(...),
						),
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
				installed_date : 32,
				id : -8931179536771193075,
				access_hash : -815741325005929488,
				title : 'CvQl6IZPGk3984qj',
				short_name : 'FKiqcepwmUDbygZQ',
				thumbs : array(
					$client->photoSizeEmpty(
						type : '6hiA2Fk1BUmrOLy9',
					),
					$client->photoSize(
						type : 'Aq9W6zIcnZUEpxw5',
						w : 20,
						h : 12,
						size : 53,
					),
					$client->photoCachedSize(
						type : 'ECLi0y7nYxJTPtMe',
						w : 63,
						h : 21,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'iIukboqcABOKW76j',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'XNl6gTB5DVOvREaZ',
						w : 83,
						h : 5,
						sizes : array(60),
					),
					$client->photoPathSize(
						type : '8dvX4P3gZIwHiGDs',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				thumb_dc_id : 48,
				thumb_version : 64,
				thumb_document_id : 1018017878694249317,
				count : 100,
				hash : 0,
			),
		),
	),
);
```