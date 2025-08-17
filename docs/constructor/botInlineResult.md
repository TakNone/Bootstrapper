# botInlineResult

**Description** : *Generic result*

**Layer** : 211

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
	id : 'H59Ejtfbnw0TNKYv',
	type : 'MYO4sG6E02rvFS1x',
	title : 'Vlijx1YXL2cAKoy5',
	description : 'UZs13jmAzcWBPhT6',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 7039286845714582518,
		size : 17,
		mime_type : 'zirHaRECOuDVGw6Y',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 43,
				h : 66,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'p3Bnhu72UIxJ9jc5',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1289088.4755859375,
				w : 66,
				h : 29,
				preload_prefix_size : 61,
				video_start_ts : 612553.9580078125,
				video_codec : 'IpRufxMXhVvmTZlK',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 29,
				title : '3tFEyWqgpADozjl4',
				performer : '1cMDzCtbjAfZ8VGI',
				waveform : 'k?jCLiveProtode?k!',
			),
			$client->documentAttributeFilename(
				file_name : 'GMr7npjdbzPVi0Bk',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'fCDMAOpH8yNgsrSU',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3340133412658882659,
		size : 68,
		mime_type : 'sT2gqRbnw4eft7mj',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 45,
				h : 82,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'gNY1bUedhQlyWVXS',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 2012548.3515625,
				w : 99,
				h : 87,
				preload_prefix_size : 4,
				video_start_ts : -1814339.1318359375,
				video_codec : 'Ey8OJiGQVc6XutBo',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 97,
				title : 'nkeKTOhVfHvtRI0G',
				performer : 'lTNmjvh8MI6Ey25w',
				waveform : '???zLiveProto?s_?',
			),
			$client->documentAttributeFilename(
				file_name : 'MDAnNVlSz5srfYdX',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'Sq4EgwvOtkJMd76s',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'cZUynPsdHYzg53K8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 62,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 97,
				length : 91,
			),
			$client->messageEntityHashtag(
				offset : 70,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 59,
				length : 80,
			),
			$client->messageEntityUrl(
				offset : 61,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 97,
				length : 76,
			),
			$client->messageEntityBold(
				offset : 72,
				length : 46,
			),
			$client->messageEntityItalic(
				offset : 10,
				length : 93,
			),
			$client->messageEntityCode(
				offset : 68,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 30,
				length : 96,
				language : 'OastbCkDU2xgSq7Q',
			),
			$client->messageEntityTextUrl(
				offset : 2,
				length : 6,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 93,
				length : 91,
				user_id : 8806221737545305932,
			),
			$client->inputMessageEntityMentionName(
				offset : 97,
				length : 22,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 8,
				length : 75,
			),
			$client->messageEntityCashtag(
				offset : 82,
				length : 7,
			),
			$client->messageEntityUnderline(
				offset : 32,
				length : 72,
			),
			$client->messageEntityStrike(
				offset : 19,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 29,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 72,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 4,
				length : 12,
				document_id : -6271985236775101059,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 37,
				length : 37,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```