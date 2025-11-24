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
		id : '0TlDfnOR1B5CNFUa',
		type : '1ftMhSciwCEdUbmy',
		title : 'xFSIk3TzoXmfMYUj',
		description : 'Bu2w8o7UGeqFSZjH',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 79,
			mime_type : 'GyY07tJzL9vmOiWX',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 81,
					h : 47,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9d6vlyrtVKFc2SzR',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1509534.8369140625,
					w : 34,
					h : 60,
					preload_prefix_size : 69,
					video_start_ts : -1624516.0439453125,
					video_codec : 'Z7Jjnmsacr4lebut',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 21,
					title : 'MQUDTNyvhXwbtj5L',
					performer : 'wK8NB30A5Cchg1xR',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'JhXnG2lsKqt4Zjid',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'EM0jrmavTFnkpgK6',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 22,
			mime_type : 'Zbe7lCI80KtnuQdx',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 35,
					h : 34,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'WVvSOiHfcQdtL7xq',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1117104.8115234375,
					w : 75,
					h : 9,
					preload_prefix_size : 14,
					video_start_ts : -1652009.3984375,
					video_codec : '53GAwXJLWCPgocZV',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 19,
					title : 'TaYk6G5j43DbLiKc',
					performer : 'J8yEBYwaQIMSdD3x',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '0JjLyslIqbtQnZ36',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Y6g4RqpIoDfiBrnS',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'pZxmbdeJ6yIk5Sf8',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 44,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 100,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 51,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 19,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 57,
					language : 'BQosW4T3zjmYVS5w',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 87,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 43,
					user_id : -4686332493432874610,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 20,
					document_id : -5336808067152750424,
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