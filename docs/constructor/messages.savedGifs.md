# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 216

```tl
messages.savedGifs#84a02a0d hash:long gifs:Vector<Document> = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |
| <mark>gifs</mark> | [`Vector<Document>`](type/Document) | List of saved gifs |

---

## Type

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->savedGifs(
	hash : 0,
	gifs : array(
		$client->documentEmpty(
			id : -5346633197090745841,
		),
		$client->document(
			id : 6804252690104356621,
			access_hash : 8122949773649038404,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 33,
			mime_type : '3B5dqwjzaIOkpf1L',
			size : 5534570669569474954,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'jNdJ0lTHiv9yxbMP',
				),
				$client->photoSize(
					type : 'Dlj64ciCmzsG3rvV',
					w : 65,
					h : 92,
					size : 73,
				),
				$client->photoCachedSize(
					type : 'ZcNwB81h6dquXVPn',
					w : 11,
					h : 62,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'f5Ae1HTGumKOEDIJ',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ZBYO9nb2uzWNoxeF',
					w : 7,
					h : 97,
					sizes : array(8),
				),
				$client->photoPathSize(
					type : 'hWMFcUZi0mzxgGrI',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'R0bKNvkXjseUYhiF',
					w : 54,
					h : 86,
					size : 93,
					video_start_ts : 1719850.5263671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8765451384484676696,
					background_colors : array(1),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 2980289143003759346,
					background_colors : array(49),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 96,
					h : 56,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'HBDE7ghxTqG3liZ9',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1826189.458984375,
					w : 70,
					h : 55,
					preload_prefix_size : 1,
					video_start_ts : -1984263.0068359375,
					video_codec : 'hAPQS857y9pxUHjF',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 75,
					title : 'Et0XdxIL6Siy4rcj',
					performer : '8Dq3n0RNIS45ZLYk',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nMEOtvD5fpCZqT1k',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Nx2pe9kmOSvujHWs',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```