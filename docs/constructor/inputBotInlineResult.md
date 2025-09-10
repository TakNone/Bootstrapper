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
	id : 'FmQBHZyrKg4ejPC8',
	type : 'tX6vZRyjnQWcbdKe',
	title : 'p3t9Z2cozndeShDk',
	description : '4PzW5fi8yVBCEcMN',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 17,
		mime_type : 'HaLz8yUoWbi6QRfe',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 32,
				h : 58,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'iWUzR9xCVLsDXPb5',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -432675.8310546875,
				w : 50,
				h : 69,
				preload_prefix_size : 12,
				video_start_ts : 1050518.685546875,
				video_codec : 'OnNp4eLrSyQAui5P',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 23,
				title : 'n2oQX6LtAwZx5RU7',
				performer : 'G0TWrqckSHDeEA1v',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ANEDhnZjBs9OerTg',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Bn9TCgrQY1NKsUaE',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 50,
		mime_type : 'yCJOK2DTkprzFEui',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 57,
				h : 70,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'iDnZ4a26OToptMsG',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 261721.86328125,
				w : 19,
				h : 19,
				preload_prefix_size : 15,
				video_start_ts : -566253.470703125,
				video_codec : 'psEUxl9bXSTMcqmt',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 19,
				title : 'oiZm6r4SuspChGn0',
				performer : 'ReicmkwpZn54SIEG',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '2Br1ZOg6kQWjo3Yz',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'm6gGBTxcrqXdnIt5',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'XfyJ6RaMPZps129d',
		entities : array(
			$client->messageEntityUnknown(
				offset : 30,
				length : 62,
			),
			$client->messageEntityMention(
				offset : 86,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 53,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 19,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 27,
				length : 1,
			),
			$client->messageEntityEmail(
				offset : 56,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 97,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 3,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 98,
				length : 67,
			),
			$client->messageEntityPre(
				offset : 92,
				length : 38,
				language : '5t2q1TQlUszkNgrc',
			),
			$client->messageEntityTextUrl(
				offset : 2,
				length : 53,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 54,
				length : 83,
				user_id : -7079927232172797215,
			),
			$client->inputMessageEntityMentionName(
				offset : 73,
				length : 79,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 45,
				length : 1,
			),
			$client->messageEntityCashtag(
				offset : 4,
				length : 14,
			),
			$client->messageEntityUnderline(
				offset : 61,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 51,
				length : 21,
			),
			$client->messageEntityBankCard(
				offset : 60,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 55,
				length : 92,
			),
			$client->messageEntityCustomEmoji(
				offset : 55,
				length : 25,
				document_id : -4471856103409708776,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 58,
				length : 100,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```