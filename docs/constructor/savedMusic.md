# savedMusic

**Layer** : 214

```tl
savedMusic#34a2f297 count:int documents:Vector<Document> = SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |
| <mark>documents</mark> | [`Vector<Document>`](type/Document) | NOTHING |

---

## Type

[SavedMusic](type/SavedMusic)

---

## Example

```php
$savedMusic = $client->savedMusic(
	count : 96,
	documents : array(
		$client->documentEmpty(
			id : -167475577130293465,
		),
		$client->document(
			id : -406595211027987403,
			access_hash : 7863469354471604015,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 51,
			mime_type : 'B9jrnfNHED1IcQpO',
			size : -6828207894913485176,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'QgnHJK0iB6fbcGxW',
				),
				$client->photoSize(
					type : 'uJXN5ER20iHdxBfL',
					w : 54,
					h : 83,
					size : 63,
				),
				$client->photoCachedSize(
					type : '2A4CStYhHIz7BLUk',
					w : 43,
					h : 25,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '7UY1VqsH3NCZEjBI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '6piQ92yj4rYMuVc5',
					w : 70,
					h : 97,
					sizes : array(5),
				),
				$client->photoPathSize(
					type : 'S2tkdYvxNDrBqO6R',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'EsmMIexNwfkWcl1Q',
					w : 40,
					h : 41,
					size : 15,
					video_start_ts : -1145368.21484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7648595919681956667,
					background_colors : array(46),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3728852690795402507,
					background_colors : array(40),
				),
			),
			dc_id : 78,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 66,
					h : 0,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'ALoMdNFcea9bHlXz',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -513877.2412109375,
					w : 74,
					h : 86,
					preload_prefix_size : 75,
					video_start_ts : -831842.3662109375,
					video_codec : 'wmuBfpJGIavd7bA5',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 9,
					title : 'ujHKcxkCXLy9EZ1t',
					performer : 'zJOYfBjpv0GiucXM',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'M6dnYDvHkgZIqjc0',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EqxpB0QFbPgC5co2',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```