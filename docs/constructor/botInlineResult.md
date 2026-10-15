# botInlineResult

**Description** : *Generic result*

**Layer** : 229

```tl
botInlineResult#11965f3a flags:# id:string type:string title:flags.1?string description:flags.2?string url:flags.3?string thumb:flags.4?WebDocument content:flags.5?WebDocument send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'rZaHkcyRz6ALW1GB',
	type : 't1cusfLdy9i43PYW',
	title : 'gOmGZACNVtSdx1bF',
	description : 'Df7qKV4m5wYcGLWz',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 4867594036576411197,
		size : 45,
		mime_type : 'OUH2yJCLTkAioD1z',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 31,
				h : 51,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'Lk0q2crTPi1DhbxC',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 24,
					x : -1634384.40234375,
					y : -802072.9609375,
					zoom : -646277.2919921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1085739.7080078125,
				w : 14,
				h : 37,
				preload_prefix_size : 61,
				video_start_ts : 1301685.107421875,
				video_codec : 'YXs3QuJHD6jU2Ncq',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 48,
				title : 'o6e0SMElh713Vicd',
				performer : 'bjXVLK10U8FtP9sR',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ENVYTwPnxD6hQK32',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'wYBP2Tka89ZMKOQW',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6049717628455168996,
		size : 28,
		mime_type : 'TZB9neMK2bsHFRGV',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 98,
				h : 8,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '6u3wKCaidInTtRmP',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 42,
					x : -1066806.97265625,
					y : -360583.5,
					zoom : 1086712.5849609375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 895317.4345703125,
				w : 31,
				h : 6,
				preload_prefix_size : 66,
				video_start_ts : 407640.2119140625,
				video_codec : 'XuAGmv8EzbZCh2PQ',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 59,
				title : 'g0AUV2RkFTQulLhK',
				performer : 'esk4vauLpUtYDVmd',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '9NIjkPawOKMB0tzf',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'UaRj6ruJfHNiS9ZL',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '1573b0xmiYLlq8Uk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 62,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 77,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 37,
				language : '0LwE7bCkxBFvcXDA',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 25,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : -2509514225297900882,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 5,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 3,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : 5885688857373587802,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 69,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 2,
				date : 82,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 53,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 49,
				old_text : 'YblApMc9rN57tHun',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 92,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```