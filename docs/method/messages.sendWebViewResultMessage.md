# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 222

```tl
messages.sendWebViewResultMessage#a4314f5 bot_query_id:string result:InputBotInlineResult = WebViewMessageSent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_query_id</mark> | [`string`](type/string) | Webview interaction ID obtained from messages.requestWebView |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | Message to send |

---

## Result

[WebViewMessageSent](type/WebViewMessageSent)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$webViewMessageSent = $client->messages->sendWebViewResultMessage(
	bot_query_id : 'qQSiO4JEXCWatycR',
	result : $client->inputBotInlineResult(
		id : 'l4m10aWUrhuA3qbk',
		type : 'FVL8M3oIk9Pu4tpA',
		title : 'lEZFv5G3VgTJ2Ht0',
		description : 'StQyrLihlFDXdz03',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 66,
			mime_type : 'kstiGvLulSM2fTBb',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 5,
					h : 93,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'TrnUaJHYNPgC3XEG',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1064115.5205078125,
					w : 97,
					h : 73,
					preload_prefix_size : 26,
					video_start_ts : 1873174.9990234375,
					video_codec : 'fFis3LIP6YNtJcrm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 93,
					title : 'NJDcGdtZPRBzxap1',
					performer : 'R37rQV8G4xakLBsp',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'YcheqsKGVwtmBojk',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'VW17GqPFcCNQ0Eev',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 11,
			mime_type : '8tfHPSZCn1U5VOp0',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 87,
					h : 23,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '8BOJzg43WafveQYP',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1431495.541015625,
					w : 78,
					h : 40,
					preload_prefix_size : 27,
					video_start_ts : 959288.0712890625,
					video_codec : 'Bdl6pMhizogt5LT0',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 76,
					title : 'DsS9gJHIBiyprvLY',
					performer : 'ftjIr3DFXwexbAkd',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ZN7SR2hAM3icOtaL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ZVYm8nbhASRft67s',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'hMLGgXubkI9FZjxU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 61,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 89,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 46,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 99,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'Mkn3NYeB9POhv4Qy',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 56,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : 937276088448278900,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 27,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 34,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 24,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 67,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 11,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 47,
					document_id : 6316397958033715019,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 66,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```