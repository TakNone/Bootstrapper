# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 229

```tl
messages.savePreparedInlineMessage#f21f7f2f flags:# result:InputBotInlineResult user_id:InputUser peer_types:flags.0?Vector<InlineQueryPeerType> = messages.BotPreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | The message |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user to whom the web_app_send_prepared_message event event will be sent |
| **peer_types** | [`flags.0?Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | Types of chats where this message can be sent |

---

## Result

[messages.BotPreparedInlineMessage](type/messages.BotPreparedInlineMessage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RESULT_ID_INVALID** | `400` | One of the specified result IDs is invalid |
| **SEND_MESSAGE_GAME_INVALID** | `400` | An inputBotInlineMessageGame can only be contained in an inputBotInlineResultGame, not in an inputBotInlineResult/inputBotInlineResultPhoto/etc |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$messagesBotPreparedInlineMessage = $client->messages->savePreparedInlineMessage(
	result : $client->inputBotInlineResult(
		id : 'MZndz19RTjphSoEH',
		type : 'KUj7C9I0y6xq8R1t',
		title : '89nXvHZ4LKGcRqYi',
		description : 'tRENQC7BeqAsrWDi',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 78,
			mime_type : 'FIOy6d4haf0kUvlA',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 12,
					h : 29,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Px8tNOav7l02QdXg',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1502206.44140625,
					w : 52,
					h : 40,
					preload_prefix_size : 66,
					video_start_ts : 635481.37109375,
					video_codec : 'R0ZvWx19w6eAGkSY',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 80,
					title : 'nwNB0Dmc5OMkLKab',
					performer : 'Ar5YB64eksNjVa9x',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'bkwBvd06emOnQS9A',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '7cZaMhJtknomfuXG',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 100,
			mime_type : '0doDemsPVNXlkC4E',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 51,
					h : 7,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'rAI6qSRylgd8DbPn',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1958621.2490234375,
					w : 54,
					h : 57,
					preload_prefix_size : 14,
					video_start_ts : 1680789.7529296875,
					video_codec : '40DUYzRfZobOvyit',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 52,
					title : 'czNHK980ptIRx3Ti',
					performer : 'hlpXNFDWyMuURiJd',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'nFZxyzcJl4A38ROL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '9k6Vc4PTaUyuHDWq',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'Gt6Wb9dfiAwIzKnZ',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 31,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 11,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 45,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 15,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 97,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 1,
					language : 'W6zkCNLp0GotYew9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 69,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : -5591383875601113666,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 57,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 25,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 76,
					document_id : -6174228222440006481,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 91,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 3,
					date : 80,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 41,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 34,
					old_text : 'djwRG6SoXfl5cxZD',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 53,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	user_id : $client->get_input_user(user : '@TakNone'),
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
);
```