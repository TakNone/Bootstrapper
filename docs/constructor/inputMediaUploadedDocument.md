# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 222

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **nosound_video** | [`flags.3?true`](type/true) | Whether to send the file as a video even if it doesn't have an audio track (i.e. if set, the documentAttributeAnimated attribute will not be set even for videos without audio) |
| **force_file** | [`flags.4?true`](type/true) | Force the media file to be uploaded as document |
| **spoiler** | [`flags.5?true`](type/true) | Whether this media should be hidden behind a spoiler warning |
| <mark>file</mark> | [`InputFile`](type/InputFile) | The uploaded file |
| **thumb** | [`flags.2?InputFile`](type/InputFile) | Thumbnail of the document, uploaded as for the file |
| <mark>mime_type</mark> | [`string`](type/string) | MIME type of document |
| <mark>attributes</mark> | [`Vector<DocumentAttribute>`](type/DocumentAttribute) | Attributes that specify the type of the document (video, audio, voice, sticker, etc.) |
| **stickers** | [`flags.0?Vector<InputDocument>`](type/InputDocument) | Attached stickers |
| **video_cover** | [`flags.6?InputPhoto`](type/InputPhoto) | Start playing the video at the specified timestamp (seconds) |
| **video_timestamp** | [`flags.7?int`](type/int) | Start playing the video at the specified timestamp (seconds) |
| **ttl_seconds** | [`flags.1?int`](type/int) | Time to live in seconds of self-destructing document |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaUploadedDocument(
	nosound_video : true,
	force_file : true,
	spoiler : true,
	file : $client->upload_file(path : 'file.png'),
	thumb : $client->upload_file(path : 'file.png'),
	mime_type : 'UyWAMILhPfeYD6Sx',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 82,
			h : 56,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : '6FrTus7MNoBnXY9t',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 78,
				x : -155816.275390625,
				y : 2075492.1025390625,
				zoom : -1066597.7568359375,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : 1273240.7177734375,
			w : 97,
			h : 48,
			preload_prefix_size : 28,
			video_start_ts : -1391934.7021484375,
			video_codec : 'Et6n01WHQbKmqwul',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 91,
			title : 'BlIfXxp70hmY9H6t',
			performer : '418cpkDYPXLGAI67',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : 'o5Ppjgi1aMcBGIt9',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'dYVGArulgXTjQ2m9',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 3863549784110539035,
			access_hash : -10363948845826495,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 38,
	ttl_seconds : 96,
);
```