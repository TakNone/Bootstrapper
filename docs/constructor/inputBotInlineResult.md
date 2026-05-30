# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 225

```tl
inputBotInlineResult#88bf9319 flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?InputWebDocument content:flags.5?InputWebDocument send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'i0uwBkXt7vlazGdF',
	type : 'e4u5oApmCLV3czYb',
	title : 'FagiGncSmhWUIR5y',
	description : 'Ni96oYfXLCyH3FDn',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 99,
		mime_type : 'mlMr9UTpAEnyVejJ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 15,
				h : 55,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'j4obWzi3hDwGAVOq',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 29,
					x : 860192.4716796875,
					y : 87240.189453125,
					zoom : 1307062.8935546875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1563523.6259765625,
				w : 94,
				h : 13,
				preload_prefix_size : 18,
				video_start_ts : 1174630.2861328125,
				video_codec : 'UwjvaigGk4YhWCoM',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 28,
				title : 'ZapybXYE9BIqwz7L',
				performer : 'Py4JaMgVnpCj5YGR',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'BPehWTw0uk4pRvUX',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'pMWKXcw4dAYiSF3H',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 23,
		mime_type : 'InQ5gofu0KaMkrBS',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 23,
				h : 86,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ifn8XlAMebhE7oP9',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 69,
					x : 1167907.404296875,
					y : -1486031.9072265625,
					zoom : -1283898.5576171875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1691740.306640625,
				w : 59,
				h : 49,
				preload_prefix_size : 54,
				video_start_ts : 1297331.365234375,
				video_codec : 'LOFR04SsjPnX1vbq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 51,
				title : 'aFzTf7VhYGpX5Aur',
				performer : 'Tv8aOBVy1qWcPjrQ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '2CSbNYc5OjEtWTnI',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'WEwMtl01ucCR4G7Y',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'E0KyU63WLsTarhNj',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 43,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'pKR1GuCIrx0Son3i',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 1,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 79,
				user_id : -7613560487298022040,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 32,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 30,
				document_id : 1485866328481117351,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 94,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 8,
				date : 30,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 14,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 22,
				old_text : 'ZWo2rDC8iYaepB6l',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 19,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```