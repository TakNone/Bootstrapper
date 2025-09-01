# inputWebDocument

**Description** : *The document*

**Layer** : 214

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
	size : 3,
	mime_type : 'sEZhz3ag9xQlJMcK',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 46,
			h : 10,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'HnZi4zX3uDkReFBw',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 50,
				x : 1517332.9375,
				y : 700996.8701171875,
				zoom : -7913.3857421875,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1820521.0029296875,
			w : 32,
			h : 74,
			preload_prefix_size : 49,
			video_start_ts : -188392.66796875,
			video_codec : 'oer9jSDiCTasgbEW',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 88,
			title : 'v8scSdGwat63hZWC',
			performer : '0MFbA19HxJcUiozK',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '5h3PE0ylcJOzmL1o',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'olDjtrcibezBNgwY',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
);
```