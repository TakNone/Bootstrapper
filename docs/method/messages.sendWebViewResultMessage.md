# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 227

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
	bot_query_id : 'g7kvJn9xBjeraOyp',
	result : $client->inputBotInlineResult(
		id : '7mSEdlprwLAfnCIW',
		type : '0pvG4QbIfYuEq9ZO',
		title : 'RxNFctOoXiIejpHC',
		description : 'GyhwrJgT8scRY2xk',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 95,
			mime_type : 'eFaiORgyqdxWh2nK',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 37,
					h : 23,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'dpMzoxBG8mqY1bw5',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1556511.1474609375,
					w : 30,
					h : 70,
					preload_prefix_size : 26,
					video_start_ts : -1262570.1982421875,
					video_codec : 'H18vAb4nesWyEMPQ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 46,
					title : 'SAfDBPraO1q0K6VQ',
					performer : 'WnGmaVqTt6e8fDbo',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'iHFdVjDY0qShyP5x',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'DdhC0IOjfpmNPcir',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 0,
			mime_type : 'ZXUtBDpaEcIuY1oP',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 36,
					h : 16,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'p4Tg9KubVkMIiO5s',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1791999.92578125,
					w : 42,
					h : 4,
					preload_prefix_size : 41,
					video_start_ts : 1753877.685546875,
					video_codec : '1DfU4RleFWXS5ypA',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 1,
					title : '2zg5CIiWrOxlne3R',
					performer : 'FG1lqj3WJZXP5zNk',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'xVrblKEvq4LMi6oH',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'xI4nCkUF5bmRMvHr',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'Ak6CfaZS71cHN8TE',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 22,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 1,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 45,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 1,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 95,
					language : 'AOaIYNX2CcLJ0wQP',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 9,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : 7999944299263567454,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 0,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 82,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 47,
					document_id : 5661222893814568339,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 57,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 55,
					date : 74,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 40,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 3,
					old_text : 'R3WSoKBEYvNmQHJh',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 40,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```