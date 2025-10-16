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
	id : 'YBGrDMu9qkWmcet1',
	type : 'We6X8uDkcRyqpmx1',
	title : 'VzuanY50oA2jSGEy',
	description : 'QFIpBbtfsPD31lqW',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 100,
		mime_type : 'zkhQfeyRwZOFBigY',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 23,
				h : 58,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'hokg8UfG35c4VAzQ',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1802322.8740234375,
				w : 54,
				h : 60,
				preload_prefix_size : 45,
				video_start_ts : 984927.5732421875,
				video_codec : '2YKJjqg7dx68GnB1',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 37,
				title : 'TCkgNMlJfDYrPuE4',
				performer : 'fSY7vJojOPaikKT1',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'fKGgq8CusyAFwvUr',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'OcH7ujTxZow3WCXh',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 68,
		mime_type : 'ifO81tHXNIVJUASD',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 93,
				h : 94,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '7mIivUbFC9VenBt2',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1878043.029296875,
				w : 35,
				h : 72,
				preload_prefix_size : 57,
				video_start_ts : 342767.0048828125,
				video_codec : 'qxjYCkGyegdUvJXi',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 49,
				title : 'T0sZ9Hx4fM8IdVNF',
				performer : 'H3GzF6KuO1A80inD',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'lXwAUrKIDEN4xRbJ',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'm0O2RNCZ5ifvaE6T',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'AC6T2axVJMus0hUk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 39,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'bMNv4jRgXEC6KWo2',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 57,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : 3014135035958589163,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 69,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 67,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 69,
				document_id : -8857756968730925015,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 71,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```