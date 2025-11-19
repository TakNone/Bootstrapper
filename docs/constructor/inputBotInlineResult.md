# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 218

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
	id : 'UhCQN8OGnv0SkDVA',
	type : 'S1KrBATum3RnHdcj',
	title : '2LctyNBXqEiVlOn5',
	description : 'khcJDHbujlqEQ9NT',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 25,
		mime_type : 'nikusFc0UQqdM9my',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 22,
				h : 45,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'LzTMmrcJinUVNeEt',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 3,
					x : 1412769.0146484375,
					y : -1362068.28515625,
					zoom : -1455437.609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -860048.4833984375,
				w : 26,
				h : 49,
				preload_prefix_size : 64,
				video_start_ts : -1686503.5361328125,
				video_codec : 'WbO1VM285EGI90gn',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 90,
				title : 'wa9etZSjM0Yxbhyc',
				performer : 'CIFQhiln5v0tjYDX',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'rTWcipsjmULNJtv8',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'FDBIoXEML0vU8leb',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 39,
		mime_type : 'fUEFGgi4e7lwY68y',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 62,
				h : 100,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'vB1PO40cojzKd8Gw',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 9,
					x : -928089.640625,
					y : -851106.6337890625,
					zoom : 1905475.818359375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1764955.580078125,
				w : 73,
				h : 86,
				preload_prefix_size : 54,
				video_start_ts : 1370417.8154296875,
				video_codec : '19L8EITRdtb0wa5O',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 5,
				title : 'JMorj6yaCl4EshKm',
				performer : 'kbYVqMi2KP8mD10A',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'kUaxOAPbSvBgJ8iw',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'thrSXgeLId3T6aVu',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'gx23Vf4MhZKt5YlX',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 39,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 41,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 57,
				language : 'WyD3VTuJti2ELafX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 42,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : -4396904975614397149,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 82,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 65,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 1,
				document_id : -6085225749204155667,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 77,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```