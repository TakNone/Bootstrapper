# inputWebDocument

**Description** : *The document*

**Layer** : 211

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
	size : 22,
	mime_type : 'IGnY5Xu9vFCmA2Th',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 86,
			h : 89,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'bdM9xvh84FjEWl23',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 3,
				x : 2025264.1533203125,
				y : -1533428.75390625,
				zoom : -288290.0341796875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1177670.6943359375,
			w : 3,
			h : 14,
			preload_prefix_size : 98,
			video_start_ts : -934000.34375,
			video_codec : 'lE7bhoYzOGAN4WBH',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 65,
			title : 'reIqTX4R2FaGx0g8',
			performer : 'tFj46SMr08D9eHgK',
			waveform : '??i?LiveProto?hk?',
		),
		$client->documentAttributeFilename(
			file_name : 'N1F4zbdngUG2cTVK',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'OsYyeRQdcWqZ9HhD',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```