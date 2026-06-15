# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 227

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
		id : 'ikmS9Xu2LtVovfgN',
		type : 'bXO193rAgea8S4yH',
		title : 'ZjV56Fot34KhbRHd',
		description : 'm3hf1DLXxOlQRTwq',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 36,
			mime_type : '9zbAomdQjPUcuLi5',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 23,
					h : 38,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'mtvGwgfYirjq3cI8',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1776540.96484375,
					w : 2,
					h : 14,
					preload_prefix_size : 73,
					video_start_ts : 1476438.7744140625,
					video_codec : 'iFgHOZzINhRtqB3Q',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 54,
					title : 'XOabqVGwyehZ5rAm',
					performer : 'uUnBfkDXrJ3M9vxI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'gnQ2jK6oDAhRPSTJ',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'H3Oa2PyoITjRWzxN',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 45,
			mime_type : 'jEwiV7JArdfWqMBb',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 81,
					h : 6,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'I9FSXVN2dqRMOujE',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 517971.865234375,
					w : 26,
					h : 61,
					preload_prefix_size : 20,
					video_start_ts : -1734740.494140625,
					video_codec : 'dUx56ELRWC0rnumQ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 34,
					title : '2l14QFL9uSAngoUH',
					performer : 'b4U5h2HQDromScjJ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '03VQUzRFY4K56geh',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'ZqLV5OpBXxvu20Q8',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : '8xegFv20Va5RfrX9',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 89,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 32,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 26,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 92,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 35,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'msvIA60ZH4QJlg1C',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 39,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 78,
					user_id : 9206324888699956994,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 40,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 15,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 78,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 56,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 94,
					document_id : 8474285081366625528,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 12,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 23,
					date : 83,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 67,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 100,
					old_text : '1U4vSeDoZr6EMQnO',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 62,
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