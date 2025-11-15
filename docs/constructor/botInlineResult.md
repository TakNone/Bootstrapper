# botInlineResult

**Description** : *Generic result*

**Layer** : 218

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
	id : 'o0g5O3KGVAFESxc2',
	type : '5A0x4b6uQBOEoqD3',
	title : 'e0btxmM154TQGSnk',
	description : 'vzWl2GwdyhHjFNKL',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1457363381252237327,
		size : 24,
		mime_type : 'EUdQkeV0AyN2q9rW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 85,
				h : 10,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'hITtpPBJX7q4H9sW',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 93,
					x : 159183.4033203125,
					y : -1713801.892578125,
					zoom : 1379708.0576171875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1823323.591796875,
				w : 49,
				h : 52,
				preload_prefix_size : 73,
				video_start_ts : 651040.583984375,
				video_codec : 'qkVIxOQou0wKJM3X',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 0,
				title : 'XWuIcCOzvxibr8lS',
				performer : 'O1diUaJfm6X0eHVz',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'ynDI4EiHd7rKQCe1',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'ieqOHDJcS1wrant8',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3297253522290400891,
		size : 91,
		mime_type : 'R754hTPc3jAk6I8e',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 42,
				h : 61,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'hgebRlu4ACFvr6JX',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 80,
					x : 2016824.580078125,
					y : -1619171.94921875,
					zoom : 34019.0859375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 581752.9794921875,
				w : 15,
				h : 56,
				preload_prefix_size : 31,
				video_start_ts : 584834.3896484375,
				video_codec : 'C05mK1xnrjOzpGY4',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 57,
				title : 'DBVYMcWEsTqFXbfI',
				performer : 'O7j34Cr19VUQvYki',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'LBaOEPJNdGtjTbZI',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'v6XPEN3kOjFghidH',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'ufFPN7vn8yVbCUj2',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 54,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 39,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 39,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 64,
				language : 'kJUztvWIEsRiGKqe',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 55,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 5,
				user_id : -4735762638873300495,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 10,
				document_id : -8312644387610375422,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```