# updateNewStickerSet

**Description** : *A new stickerset was installed*

**Layer** : 222

```tl
updateNewStickerSet#688a30aa stickerset:messages.StickerSet = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stickerset</mark> | [`messages.StickerSet`](type/messages.StickerSet) | The installed stickerset |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateNewStickerSet(
	stickerset : $client->messages->stickerSet(
		set : $client->stickerSet(
			archived : true,
			official : true,
			masks : true,
			emojis : true,
			text_color : true,
			channel_emoji_status : true,
			creator : true,
			installed_date : 1,
			id : 6291643869491052331,
			access_hash : 5158843093795456634,
			title : 'OzfAGXn5FSijIC08',
			short_name : 'Jilb3XZ9pcKEdkQ0',
			thumbs : array(
				$client->photoSizeEmpty(
					type : '2Mt7dyX6JPfFESrR',
				),
				$client->photoSize(
					type : 'ekFaBLEu7ZUtJhdy',
					w : 61,
					h : 15,
					size : 64,
				),
				$client->photoCachedSize(
					type : 'DAjeXVOrBsw51cfq',
					w : 4,
					h : 34,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'T50Lei2WEFqSXQwc',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'DrgYIix0KmBCV7Lq',
					w : 51,
					h : 59,
					sizes : array(54),
				),
				$client->photoPathSize(
					type : '4pW9LCVvbPuBaIk6',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			thumb_dc_id : 23,
			thumb_version : 55,
			thumb_document_id : -5106741675796810335,
			count : 15,
			hash : 0,
		),
		packs : array(
			$client->stickerPack(
				emoticon : 'dc7ofRq845VO3aCB',
				documents : array(65704990906771137),
			),
		),
		keywords : array(
			$client->stickerKeyword(
				document_id : -411095782589761869,
				keyword : array('c5ohrOYKmyW71GvB'),
			),
		),
		documents : array(
			$client->documentEmpty(
				id : 640411514305469088,
			),
			$client->document(
				id : 4060570294305872715,
				access_hash : 5022974075354242614,
				file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				date : 42,
				mime_type : 'R4ojzqHwn2r5P7Wd',
				size : -530306002432475418,
				thumbs : array(
					$client->photoSizeEmpty(
						type : 'v97Fm6qrf28xBODR',
					),
					$client->photoSize(
						type : 'e92kATF4rQdG3Ba6',
						w : 56,
						h : 14,
						size : 4,
					),
					$client->photoCachedSize(
						type : '7P0xJGYEy8Mb5XLz',
						w : 23,
						h : 45,
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoStrippedSize(
						type : 'tQZ6TcDz3HkrCPpv',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->photoSizeProgressive(
						type : 'J3n2KLmEQbP079RI',
						w : 47,
						h : 64,
						sizes : array(81),
					),
					$client->photoPathSize(
						type : 'aDqC2JAK3xfPZWst',
						bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				video_thumbs : array(
					$client->videoSize(
						type : 'e8nrakQoBZ2AOWvE',
						w : 86,
						h : 79,
						size : 54,
						video_start_ts : -76237.37109375,
					),
					$client->videoSizeEmojiMarkup(
						emoji_id : 5759925979158980606,
						background_colors : array(29),
					),
					$client->videoSizeStickerMarkup(
						stickerset : $client->inputStickerSetEmpty(...),
						sticker_id : 7735047651674479563,
						background_colors : array(22),
					),
				),
				dc_id : 7,
				attributes : array(
					$client->documentAttributeImageSize(
						w : 18,
						h : 46,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '4FReD15ExObHTUza',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -937914.9169921875,
						w : 47,
						h : 25,
						preload_prefix_size : 46,
						video_start_ts : 1404151.283203125,
						video_codec : '9RVlE3pMHZSTBj8L',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 89,
						title : 'sI0LhiQYk1zDZ3W8',
						performer : 'qrtykHBWcICKxTau',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'DjhiCbOx9uqnIdRU',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'epTRbO8kIJa2G7vf',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
		),
	),
);
```