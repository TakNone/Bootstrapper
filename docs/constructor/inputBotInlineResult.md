# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 216

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
	id : 'sV7N0kG9wo4anZiK',
	type : '41weVANRZPMQJzuL',
	title : 'xG041a58rklJDouB',
	description : '4OzLPiTavsxBVygW',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 29,
		mime_type : 'lwtOLci6x5nseG7W',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 82,
				h : 42,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '5A9tu3CaVrjGJidT',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 646169.609375,
				w : 95,
				h : 90,
				preload_prefix_size : 55,
				video_start_ts : 469469.65234375,
				video_codec : 'tf2PnjoyhzsY8V3l',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 10,
				title : 'FgK1YmBEqWvoU30X',
				performer : 'vf9ZSHNGodYp6VWj',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Ifk7HAmJgdU1tO4S',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'uqQ1hvflk2ZoFBpb',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 51,
		mime_type : 'ANqOcS5lbvGE0tD2',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 64,
				h : 53,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '4lsxFZ0uCcXfRWko',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1181008.9072265625,
				w : 45,
				h : 61,
				preload_prefix_size : 2,
				video_start_ts : 1143600.2529296875,
				video_codec : '96P1qWJ7EyhcjeSn',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 11,
				title : 'PZ2TgIfo5pzbFYtm',
				performer : 'yzk86nYmt4eOHabP',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'kQ4BLWybSZnU3ufv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Ijt8934E5xvylzig',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'Bxiy2MXP67Jfdbco',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 75,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 96,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 46,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 74,
				language : '0XrhGBECzxcdMq9R',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 28,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : 8670960689623684892,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 34,
				document_id : 4437558716313401515,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 82,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```