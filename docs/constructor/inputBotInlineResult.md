# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 222

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
	id : 'LnTVc2RYgbpHokir',
	type : 'z72cEd0kmlFYiuon',
	title : 'yWRszgle8uvoT5IF',
	description : 'MkG7WxK5Xigay9Ln',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 46,
		mime_type : 'D3eVf4gPZyuU9xjw',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 68,
				h : 62,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'v4F8UxhBD5lKujQ3',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 27,
					x : 1824147.7587890625,
					y : -1635683.662109375,
					zoom : 1661979.900390625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1740573.251953125,
				w : 58,
				h : 90,
				preload_prefix_size : 94,
				video_start_ts : -1536695.0791015625,
				video_codec : 'aVjBc2ILXuWyJ8HY',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 22,
				title : 'EJtxPjX5chLKkmFR',
				performer : 'K8MCkJPUh4FyIOux',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'Vnwy6LUE2Fk3xpZA',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'puMgmrWFAE7KyV8q',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 91,
		mime_type : 'in0MID1jPuK5fVgo',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 72,
				h : 57,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'v8tkHJNqzDAXQ5Rf',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 71,
					x : 662130.3671875,
					y : 1526180.083984375,
					zoom : 1965847.7255859375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1522364.001953125,
				w : 71,
				h : 44,
				preload_prefix_size : 59,
				video_start_ts : -1153756.4609375,
				video_codec : 'Oh2HTxaQMWFc6GUJ',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 98,
				title : 'dfGP0CZaoOQX3uEi',
				performer : 'KZv0S87BOnsrghUy',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'LqhfcI6ptU0FsKRP',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'bJoEjaFphcDe1gf3',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'V4hXqfFSdbWJrB3m',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 39,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 37,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 75,
				language : '3XfJji8qtHuC6zwp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 51,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : -6947400601567691891,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 78,
				document_id : 8268430909837694429,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 15,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```