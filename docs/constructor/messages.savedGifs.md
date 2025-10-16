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
			id : 8310474661001472401,
		),
		$client->document(
			id : 5174199535116833682,
			access_hash : -1576068423375623659,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 94,
			mime_type : 'dCTbaJDruBq63Q4m',
			size : -4121012857790288212,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'VHYb3PsJXUzTEmgj',
				),
				$client->photoSize(
					type : 'medONwvKMRHD4VBf',
					w : 93,
					h : 29,
					size : 28,
				),
				$client->photoCachedSize(
					type : 'dTboamrIMP9DypVF',
					w : 11,
					h : 62,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'pD4HyUPzfwLTC2sq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'eBQwz3bAhdEDZI9N',
					w : 74,
					h : 86,
					sizes : array(73),
				),
				$client->photoPathSize(
					type : '98cfMjGBLQoHCnmF',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '2qpjASkmIrQ3PDzE',
					w : 92,
					h : 71,
					size : 63,
					video_start_ts : -218955.8916015625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 4567794858451991684,
					background_colors : array(49),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 2827265061288253879,
					background_colors : array(47),
				),
			),
			dc_id : 38,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 43,
					h : 50,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mqjWwf7hxZbCO52e',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 241175.130859375,
					w : 88,
					h : 86,
					preload_prefix_size : 43,
					video_start_ts : -332696.0537109375,
					video_codec : 'EZyzab324uTidcHL',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 35,
					title : 'hyB1t4Yfj23qrw5V',
					performer : 'Qp64AlOSBrMhYFjP',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '6ePklovigpqJKCBn',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'zQU6ExFOKZX7dYim',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```