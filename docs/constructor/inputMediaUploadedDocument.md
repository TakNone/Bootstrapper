# inputMediaUploadedDocument

**Description** : *New document*

**Layer** : 216

```tl
inputMediaUploadedDocument#37c9330 flags:# nosound_video:flags.3?true force_file:flags.4?true spoiler:flags.5?true file:InputFile thumb:flags.2?InputFile mime_type:string attributes:Vector<DocumentAttribute> stickers:flags.0?Vector<InputDocument> video_cover:flags.6?InputPhoto video_timestamp:flags.7?int ttl_seconds:flags.1?int = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	file : $client->inputFile(
		id : -4642446108594358604,
		parts : 39,
		name : 'aKfk1Y6xuZEDBRse',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	thumb : $client->inputFile(
		id : -1656167415343838599,
		parts : 66,
		name : 'kLFCK8AeJVXQRdTx',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	mime_type : 'Q39UjLtiT45B6h81',
	attributes : array(
		$client->documentAttributeImageSize(
			w : 99,
			h : 97,
		),
		$client->documentAttributeAnimated(),
		$client->documentAttributeSticker(
			mask : true,
			alt : 'eHCxsArZaifOybmF',
			stickerset : $client->inputStickerSetEmpty(),
			mask_coords : $client->maskCoords(
				n : 40,
				x : 175126.84375,
				y : -1992328.365234375,
				zoom : 1534414.650390625,
			),
		),
		$client->documentAttributeVideo(
			round_message : true,
			supports_streaming : true,
			nosound : true,
			duration : -1402218.8740234375,
			w : 79,
			h : 64,
			preload_prefix_size : 17,
			video_start_ts : 1252163.73828125,
			video_codec : 'f6QM4v3R8A57CNjK',
		),
		$client->documentAttributeAudio(
			voice : true,
			duration : 48,
			title : 'z9QR31dcrX7WAHZe',
			performer : '0WVbOGkTmlunY2UI',
			waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->documentAttributeFilename(
			file_name : '8EJSdcfFa95rRzgv',
		),
		$client->documentAttributeHasStickers(),
		$client->documentAttributeCustomEmoji(
			free : true,
			text_color : true,
			alt : 'mYgJGpvK5QocRZwy',
			stickerset : $client->inputStickerSetEmpty(),
		),
	),
	stickers : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -1199477164072489312,
			access_hash : 2238726890646465853,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	video_cover : $client->inputPhotoEmpty(),
	video_timestamp : 6,
	ttl_seconds : 81,
);
```