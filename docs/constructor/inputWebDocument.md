# inputWebDocument

**Description** : *The document*

**Layer** : 229

```tl
inputWebDocument#9bed434d url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = InputWebDocument;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Remote document URL to be downloaded using the appropriate method |
| <mark>size</mark> | [`int`](type/int) | Remote file size |
| <mark>mime_type</mark> | [`string`](type/string) | Mime type |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes for media types |

---

## Type

[InputWebDocument](type/InputWebDocument)

---

## Example

```php
$inputWebDocument = $client->inputWebDocument(
	url : 'https://docs.liveproto.dev',
	size : 2,
	mime_type : '1Mtbl3ZSEu9Q0rqx',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 48,
			h : 48,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'fBQ56J9yVat4nlpZ',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 100,
				x : 1848672.5244140625,
				y : 1696070.603515625,
				zoom : 1889534.7705078125,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1101394.7978515625,
			w : 4,
			h : 83,
			preload_prefix_size : 38,
			video_start_ts : 1356834.265625,
			video_codec : '3LZQXnyohWVzCrak',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 77,
			title : 'wYAMg6Ze5DhPaNd8',
			performer : 'GeVwqskzu18DvAtB',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'MIlWiAJ8B05uYhzd',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'GDw9lubTNIXYPKk1',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```