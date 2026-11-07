# inputWebDocument

**Description** : *The document*

**Layer** : 233

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
	size : 80,
	mime_type : 'wZzaycTextSn2RPv',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 17,
			h : 20,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '6gbDKtdfOM2wESI1',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 100,
				x : -1742178.2705078125,
				y : 40766.5390625,
				zoom : 1132064.5400390625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 818186.8984375,
			w : 50,
			h : 1,
			preload_prefix_size : 1,
			video_start_ts : 1422734.6796875,
			video_codec : 'CwUam7IzfpiFd20S',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 19,
			title : 'du9Aoq7QM8iwFU5W',
			performer : 'HDEyWkRrTuGXU9vd',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'PDpscUe4do6tEWgb',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'fYSaTZKqDxGVL25l',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```