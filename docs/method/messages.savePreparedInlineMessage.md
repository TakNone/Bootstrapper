# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 218

```tl
messages.savePreparedInlineMessage#f21f7f2f flags:# result:InputBotInlineResult user_id:InputUser peer_types:flags.0?Vector<InlineQueryPeerType> = messages.BotPreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		id : 'vxQmEYN6OzCDFfLK',
		type : 'BdweJf9OqW3VQ4Ko',
		title : 'CNDLaIkPAc978sfz',
		description : 'mV4wcpsyY0x5jFDa',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 90,
			mime_type : 'yBsAMX6jQcCEzSRg',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 65,
					h : 69,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Y7Eezg2tnMfoAF40',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -136413.8662109375,
					w : 99,
					h : 43,
					preload_prefix_size : 86,
					video_start_ts : 303098.0068359375,
					video_codec : 'fQpz8ISX6xEG7etu',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 53,
					title : 'fOXGK7Cck1UxTjgz',
					performer : 'MjcTEpolzAeQmO62',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'e8TgKFd1Ccnzikrm',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'cCMrv5ZBk13I9RF2',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 28,
			mime_type : 'AglahobnEsL3GIQp',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 88,
					h : 99,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'FfH0PElK6JTLObs2',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 466960.7744140625,
					w : 63,
					h : 5,
					preload_prefix_size : 57,
					video_start_ts : 905190.37890625,
					video_codec : 'GoEVRxQa4kNKjuLC',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 27,
					title : 'I3jb5ptBVfuH9mwF',
					performer : 'CgVhtSdGXbTr5BMR',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'cARtvghKo3dmJUIL',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'brM47Y2JvNPUFzLh',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'If9WQgXPus5adnOh',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 23,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 85,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 55,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 35,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 29,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 55,
					language : 'tbq9OWgL6jImXpek',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 80,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : -1884740102230643250,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 90,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 8,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 96,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 1,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 27,
					document_id : -2411913460201483208,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 88,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	user_id : $client->get_input_user(peer : '@TakNone'),
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