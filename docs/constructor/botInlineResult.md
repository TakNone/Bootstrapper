# botInlineResult

**Description** : *Generic result*

**Layer** : 216

```tl
botInlineResult#11965f3a flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?WebDocument content:flags.5?WebDocument send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **title** | [`flags.1?string`](type/string) | Result title |
| **description** | [`flags.2?string`](type/string) | Result description |
| **url** | [`flags.3?string`](type/string) | URL of article or webpage |
| **thumb** | [`flags.4?WebDocument`](type/WebDocument) | Thumbnail for the result |
| **content** | [`flags.5?WebDocument`](type/WebDocument) | Content of the result |
| <mark>send_message</mark> | [`BotInlineMessage`](type/BotInlineMessage) | Message to send |

---

## Type

[BotInlineResult](type/BotInlineResult)

---

## Example

```php
$botInlineResult = $client->botInlineResult(
	id : 'RlqJZbYzFhQ8Mnyu',
	type : '2wuPx8abeohZXHJQ',
	title : 'bOZ4Pe2YrWvixNoC',
	description : '9G1ULyEWQXox0qif',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -7038029670329304871,
		size : 73,
		mime_type : '7j4cR8iydKsO0H9N',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 70,
				h : 15,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '3EFJ59T7mVxHvfLj',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -615601.583984375,
				w : 67,
				h : 50,
				preload_prefix_size : 13,
				video_start_ts : 320740.140625,
				video_codec : 'g2XvMZ0kTrhw3GUN',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 31,
				title : 'qUlvSkziJReBEPfp',
				performer : '0cFdMPTW3uSJXbvr',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '1GPaxdQpKLZuf5tV',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'XV0crzSM7yRgYA1H',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3350773861375965042,
		size : 86,
		mime_type : 'X7esmF8MfVIagJ4o',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 71,
				h : 5,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'yDxK1fUHPr8XqbB0',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1361100.689453125,
				w : 93,
				h : 1,
				preload_prefix_size : 53,
				video_start_ts : -550581.4423828125,
				video_codec : 'jrDPMU2Z3zGybXBK',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 53,
				title : '1gjRaEMSIOfJpbz8',
				performer : 'mCJpTbFluSOBViyc',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Gbz27UBeVifC0gMm',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'KYBJ2o1mFzbZC5SA',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'hHtmcVk3B4e7SKRd',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 53,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 24,
				language : 'NEp6o3fyZ89tgQeF',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -8816813171778420454,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 75,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 28,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 82,
				document_id : -4527124776656509779,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```