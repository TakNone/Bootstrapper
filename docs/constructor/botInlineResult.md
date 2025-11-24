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
	id : 'efdUTAXurswz3hvp',
	type : 'ouQL0lP4mrAYfzGi',
	title : 'GPsYHUanv2x0WdEw',
	description : 'buOQs6UfDHvzLZ5I',
	url : 'https://docs.liveproto.dev',
	thumb : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3637543204901101589,
		size : 33,
		mime_type : 'JD3v9SWnpflPEGFQ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 86,
				h : 99,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'B8DVhliKCas2PFrR',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 90,
					x : -1145892.8564453125,
					y : 723425.83984375,
					zoom : -1641961.0283203125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1807921.54296875,
				w : 67,
				h : 63,
				preload_prefix_size : 99,
				video_start_ts : 1003852.060546875,
				video_codec : 'pKwjriWMu6UzT19y',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 49,
				title : 'kBi4OPaTDr8Is9Sq',
				performer : 'oZYVNpTRcHG2sPrX',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '83mLgwSfNcuZYiCd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'fprOnDVd2qy4mlu5',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	content : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8985246988323566706,
		size : 16,
		mime_type : 'GZoahU3smXibH4d6',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 56,
				h : 92,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'DGr7t4EvlUTCkHIM',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 59,
					x : 1199468.51953125,
					y : -634663.4423828125,
					zoom : 1467383.388671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1830014.9296875,
				w : 9,
				h : 19,
				preload_prefix_size : 70,
				video_start_ts : 47996.2509765625,
				video_codec : 'xyXRDcgpeJmuoj93',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 21,
				title : 'kqz9UThxJHAyiYDf',
				performer : 'GQqERP0MKwXB5r3T',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'VIdgrWRefLh69aBY',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'U0oj43NaQE6TvKZy',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'e9RlzCpdsyOfBHXD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 34,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 98,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 76,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 3,
				language : 'KV87b2mDMseiXtWN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : 5400122240517761834,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 6,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 63,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 86,
				document_id : 6094554362830261062,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 76,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```