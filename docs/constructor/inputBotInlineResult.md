# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 214

```tl
inputBotInlineResult#88bf9319 flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?InputWebDocument content:flags.5?InputWebDocument send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | ID of result |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **title** | [`flags.1?string`](type/string) | Result title |
| **description** | [`flags.2?string`](type/string) | Result description |
| **url** | [`flags.3?string`](type/string) | URL of result |
| **thumb** | [`flags.4?InputWebDocument`](type/InputWebDocument) | Thumbnail for result |
| **content** | [`flags.5?InputWebDocument`](type/InputWebDocument) | Result contents |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResult(
	id : '3jRGvix2EA0ywfgt',
	type : 'OFx1jvU2QopweAVG',
	title : 'b0n42DrtcYoEi5F9',
	description : 'ti0MNrzXpBGCeR4H',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 58,
		mime_type : 'CJKbtGO7BokEVypF',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 49,
				h : 13,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ZjdOJ1Gb6BMnT4iA',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1887688.1640625,
				w : 44,
				h : 13,
				preload_prefix_size : 67,
				video_start_ts : -1522232.1005859375,
				video_codec : '2GkSNljUcnsuFWHr',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 90,
				title : 'EeJQ2gwiukox8HVl',
				performer : 'Gz82urZeoPxKiEOn',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '4jVIArhnTq7aWfds',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '0gjxEMwcFvUJWRD9',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 52,
		mime_type : '5s9e6TF73DobrKpv',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 84,
				h : 99,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'pHdcYmek3nyS6KvO',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1633033.1845703125,
				w : 26,
				h : 82,
				preload_prefix_size : 51,
				video_start_ts : -504777.529296875,
				video_codec : '2QML0nfOINlxYz9B',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 52,
				title : 'vJi2Pdqf4DW5aCsF',
				performer : 'A1H4Qyxh09jDKs7Y',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '0UMpDzGdNrhjT7wW',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'fJX0rRztmWKjLaGs',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'MZkREBS4PAxpiFca',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 84,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 92,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : 'bYPd7Uy8Opwf0ALC',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 22,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : -3060031659596313871,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 15,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 45,
				document_id : -5179771653945313588,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 39,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```