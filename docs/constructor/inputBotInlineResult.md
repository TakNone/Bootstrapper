# inputBotInlineResult

**Description** : *An inline bot result*

**Layer** : 227

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
	id : 'ORStP7lnZJ56AXc3',
	type : 'uj6had3pQJRDfnV1',
	title : 'WiUvmseXaHGf67p2',
	description : '1G6oW5MNl4XKDiuP',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 58,
		mime_type : 'wSaIxJVCe93goLEB',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 68,
				h : 27,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'jWFz9h7wVL0RE21A',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 84,
					x : -558277.302734375,
					y : 136487.9951171875,
					zoom : 505942.40234375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1565053.9130859375,
				w : 67,
				h : 17,
				preload_prefix_size : 24,
				video_start_ts : 817349.423828125,
				video_codec : 'Cf7bLBxOyYjhUlET',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 9,
				title : '9tuqwse7yXQOIlDC',
				performer : 'FVGhNZdQ3Yzk6uis',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'XUrh1IBbQk8z3FWf',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'SXyOPtbcxnM80v2G',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 25,
		mime_type : 'GPLeqakfStvCFJ1s',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 17,
				h : 6,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ITcFL8tHnys0JZEC',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 9,
					x : -1342987.876953125,
					y : 583003.84375,
					zoom : 1345202.7568359375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 965.4453125,
				w : 29,
				h : 32,
				preload_prefix_size : 82,
				video_start_ts : 1434509.29296875,
				video_codec : 'x3oSW6tYJdQ78XeF',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 68,
				title : 'kKou6yrqdQ4HT1Sf',
				performer : 'vfdaOgNpciQTuIRq',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'b2Ng9hYZoy6E0MCm',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'S8MdAhWiDG4QNUbL',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'pOjGX2VkYFha1JPx',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 15,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 68,
				language : 'odO3x0RwAiHDnsCF',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 65,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : -1294090763163620993,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 1,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 100,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 62,
				document_id : -8890911953509564311,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 14,
				date : 99,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 76,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 39,
				old_text : 'msbWRgSXOB3I1Euh',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 73,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```