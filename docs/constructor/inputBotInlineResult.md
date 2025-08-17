# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 211

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
	id : 'XybWRCGO74tBsmvH',
	type : 'S6L5FqRUv0WuKxnb',
	title : 'jIeDnBK0wgSNA5Hf',
	description : '1SxVNbTowercM8kC',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 29,
		mime_type : '8mrkO1SiwDKe5YAn',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 17,
				h : 69,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'yk5U1Hj2gePl4i3m',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1492731.576171875,
				w : 76,
				h : 50,
				preload_prefix_size : 3,
				video_start_ts : 843280.2529296875,
				video_codec : 'a6PcDqh9gMpEWyBn',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 43,
				title : '6YFk4jIHyeD2v1wg',
				performer : 'mtDMrOs0QXgVuN2Y',
				waveform : '??U|\\LiveProtoI?$??',
			),
			$client->documentAttributeFilename(
				file_name : 'qunO1aTVNhmW0Y3s',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 't5V38FdjOK0LEycC',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 12,
		mime_type : '4q5VJwT0ZlauCLfs',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 63,
				h : 25,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'dtUXWGbNARemBYrD',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -31380.1845703125,
				w : 69,
				h : 26,
				preload_prefix_size : 71,
				video_start_ts : 814644.8076171875,
				video_codec : 'XHU19FbiSuroQZme',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 82,
				title : 'Ar0LIMeqgbz6d7vn',
				performer : 'fCaJPSH9Q5YoumAw',
				waveform : '?i??LiveProtoF	(??',
			),
			$client->documentAttributeFilename(
				file_name : 'eSI6b71KHXZ4BjUr',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ZVlqkGJ0dp1at8R9',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'LbWYiNhJfj2Ckzgl',
		entities : array(
			$client->messageEntityUnknown(
				offset : 62,
				length : 18,
			),
			$client->messageEntityMention(
				offset : 37,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 24,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 46,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 28,
				length : 68,
			),
			$client->messageEntityEmail(
				offset : 35,
				length : 47,
			),
			$client->messageEntityBold(
				offset : 75,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 100,
				length : 68,
			),
			$client->messageEntityCode(
				offset : 82,
				length : 7,
			),
			$client->messageEntityPre(
				offset : 33,
				length : 11,
				language : 'feO8rMC1uJ9pZ4qD',
			),
			$client->messageEntityTextUrl(
				offset : 96,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : 6161854274156493813,
			),
			$client->inputMessageEntityMentionName(
				offset : 25,
				length : 49,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 23,
				length : 70,
			),
			$client->messageEntityCashtag(
				offset : 89,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 85,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 10,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 9,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 28,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 56,
				length : 100,
				document_id : 3886602634024167949,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 41,
				length : 39,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```