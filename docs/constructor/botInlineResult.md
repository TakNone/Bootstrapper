# botInlineResult

**Description** : *Generic result*

**Layer** : 216

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
	id : 'WXUBF4rYdGCfxkey',
	type : 'O2AGhJH7Efy6xru9',
	title : 'h8qiSs7TBa3LHVlg',
	description : 'PgGYoy5IcFe7kU8H',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8472260904036196080,
		size : 92,
		mime_type : 'DNZPgleftvQdmMyS',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 95,
				h : 68,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'L9mixq4cKo0JZAbh',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1682192.35546875,
				w : 96,
				h : 65,
				preload_prefix_size : 92,
				video_start_ts : 295404.83984375,
				video_codec : 'wBQInzWfNJkxE0Yc',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 32,
				title : '5jW17HshMQREbgJO',
				performer : 'bOZQnr2X31xt8esl',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'iu0ZfQwvr9e1GBd7',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'd5OBCHnUazswXJYG',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4775923383906836190,
		size : 22,
		mime_type : 's54kYgluFDHy1P6q',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 59,
				h : 20,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'xcVEKqbtQj8GYuJ0',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -465308.8017578125,
				w : 77,
				h : 63,
				preload_prefix_size : 69,
				video_start_ts : 1370293.708984375,
				video_codec : '6WV1KF2hRnsNCtjr',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 32,
				title : 'wQdxo3z0U6bnVLYZ',
				performer : 'B4wMQpvhz7x3tCD2',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '75TmzGIVS2jQJAe9',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '2sW8HujQ39ZVcEKF',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'Up5LEZtXudHIbQaO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 10,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 5,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 0,
				language : 'JCrKTpilELBsyGVN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 73,
				user_id : 3344728969790282121,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 14,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : -9047724253014035810,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 79,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```