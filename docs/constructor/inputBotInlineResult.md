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
	id : 'jOQekupCDv5Yi4Hc',
	type : '7mhuNJaW8VFviAks',
	title : 'sdY1tuolxZkc9BQ0',
	description : 'DYwPukXBxEe3zjqC',
	url : 'https://docs.liveproto.dev',
	thumb : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 56,
		mime_type : '40XogRS3Jm9E6ufa',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 60,
				h : 14,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'ghdseDvTCtxpykoB',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1018852.80078125,
				w : 89,
				h : 49,
				preload_prefix_size : 89,
				video_start_ts : 2023323.3837890625,
				video_codec : '2pnsgmE5bIaGcSF6',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 62,
				title : 'VYveQKbkGSOj4aWF',
				performer : 'LTo8axyFUw7ultRZ',
				waveform : '$ȤK?LiveProto$R?ڷ',
			),
			$client->documentAttributeFilename(
				file_name : 'ibuy42AOIadJnCtm',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'lKu1RIEFJMjiLA23',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->inputWebDocument(
		url : 'https://docs.liveproto.dev',
		size : 83,
		mime_type : 'AUqcKPjYi6L9a87x',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 32,
				h : 7,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'n763cri1HZj4lBVA',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1996804.5654296875,
				w : 59,
				h : 68,
				preload_prefix_size : 12,
				video_start_ts : 1621106.1328125,
				video_codec : '9rYiMEhetksobUWw',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 82,
				title : 'N5gZmoswDcTKknFv',
				performer : 'SW8LPBqgdnJ4rzVu',
				waveform : '??G?LiveProto??ŀ',
			),
			$client->documentAttributeFilename(
				file_name : 'nqgFpliRcaeHL9z7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'gOuTCNqep1s7yjUY',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'zHKuvqhLDcosO9SA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 99,
				length : 61,
			),
			$client->messageEntityMention(
				offset : 59,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 51,
				length : 70,
			),
			$client->messageEntityBotCommand(
				offset : 85,
				length : 80,
			),
			$client->messageEntityUrl(
				offset : 41,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 71,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 71,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 71,
				length : 55,
			),
			$client->messageEntityCode(
				offset : 70,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 29,
				length : 77,
				language : 'FbRzZ7ArGBPo6IMl',
			),
			$client->messageEntityTextUrl(
				offset : 19,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 70,
				length : 46,
				user_id : 9055216282584746713,
			),
			$client->inputMessageEntityMentionName(
				offset : 70,
				length : 13,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 16,
				length : 63,
			),
			$client->messageEntityCashtag(
				offset : 97,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 26,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 43,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 98,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 86,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 43,
				length : 61,
				document_id : -5728896901366496633,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 35,
				length : 5,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```