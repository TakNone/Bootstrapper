# messages.savedGifs

**Description** : *Saved gifs*

**Layer** : 214

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
			id : -744272386298010845,
		),
		$client->document(
			id : 3311821843177213565,
			access_hash : 1996526282399425866,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 10,
			mime_type : 'nNP2qwcxHAj5CEs7',
			size : 6691051630984873283,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'WFRDfeYNruVnoGsS',
				),
				$client->photoSize(
					type : 'YCLxIZi83kRFWmn0',
					w : 86,
					h : 81,
					size : 86,
				),
				$client->photoCachedSize(
					type : 'e4OJM3TaCwm5k26b',
					w : 5,
					h : 78,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'ZxiOQvb9UgRT0PDu',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '7QdOH6pGl3IewVfC',
					w : 35,
					h : 49,
					sizes : array(89),
				),
				$client->photoPathSize(
					type : 'Zz1KyxI8UTrDd9VE',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'zAj6xENYe9DpPKd0',
					w : 37,
					h : 50,
					size : 58,
					video_start_ts : -580773.6484375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 7396985161205278476,
					background_colors : array(78),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 8015561972498016562,
					background_colors : array(31),
				),
			),
			dc_id : 33,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 82,
					h : 40,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'kJAxFm5p8fM6ZcrU',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 766850.212890625,
					w : 69,
					h : 73,
					preload_prefix_size : 32,
					video_start_ts : -5655.587890625,
					video_codec : 'w7JBANGak4UsKOZP',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 26,
					title : 'fNU27rh1seME0k9l',
					performer : 'nTgM1Jfb49xilzd8',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'LP71rWYxEAMzXZHm',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'H6oJGRl13yCY9haZ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
);
```