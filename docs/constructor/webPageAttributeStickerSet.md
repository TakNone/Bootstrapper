# webPageAttributeStickerSet

**Description** : *Contains info about a stickerset &raquo;, for a webPage preview of a stickerset deep link &raquo; \(the webPage will have a type of telegram\_stickerset\)*

**Layer** : 229

```tl
webPageAttributeStickerSet#50cc03d3 flags:# emojis:flags.0?true text_color:flags.1?true stickers:Vector<Document> = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **emojis** | [`flags.0?true`](type/true) | Whether this i s a custom emoji stickerset |
| **text_color** | [`flags.1?true`](type/true) | Whether the color of this TGS custom emoji stickerset should be changed to the text color when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context |
| <mark>stickers</mark> | [`Vector<Document>`](type/Document) | A subset of the stickerset in the stickerset |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStickerSet(
	emojis : true,
	text_color : true,
	stickers : array(
		$client->documentEmpty(
			id : 984050689790944961,
		),
		$client->document(
			id : 6031153797825039542,
			access_hash : -3413736309174613611,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 100,
			mime_type : 'xQHzCjLXU6M87fJy',
			size : 6622491819944865907,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'GqZKlIsf7kYbMcij',
				),
				$client->photoSize(
					type : 'ocOaXdhLxsZbCIJF',
					w : 4,
					h : 50,
					size : 61,
				),
				$client->photoCachedSize(
					type : 'qpVGMym9HZRW5gUI',
					w : 78,
					h : 9,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'nfpWE3h8tJgjDoQM',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '1ALIJlma20N8Xkzt',
					w : 49,
					h : 84,
					sizes : array(35),
				),
				$client->photoPathSize(
					type : 'pU8Zs7KTVjvxQSId',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'PhzB260eJiU5M9uo',
					w : 100,
					h : 63,
					size : 76,
					video_start_ts : -2024020.9482421875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 8507496668177786981,
					background_colors : array(75),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1152224273422762101,
					background_colors : array(79),
				),
			),
			dc_id : 9,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 47,
					h : 79,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ogQa3x8bkMFGS9nD',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 0,
						x : 1610809.923828125,
						y : 1682108.8427734375,
						zoom : 1655666.392578125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1107486.23828125,
					w : 3,
					h : 48,
					preload_prefix_size : 5,
					video_start_ts : -1037812.3291015625,
					video_codec : 'nZrYflutjHOgWc5a',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'E7GLVCe9tZgqsb1u',
					performer : 'ypOZdBFHtwVjE2UQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 's9SRznVmqZ6UWFrd',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Fh5iZVsmgqAY2JRc',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
);
```