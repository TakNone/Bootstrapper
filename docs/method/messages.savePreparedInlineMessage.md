# messages.savePreparedInlineMessage

**Description** : *Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*

**Layer** : 222

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
		id : 'LuZ6vlJXpwzrInxb',
		type : 'uVi7wY1BO4reWE2g',
		title : 'zbiZR96fLn1H7MSt',
		description : '0Qh4MYIBz3bgj6ao',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 66,
			mime_type : 'LsCUhY05SHa3gq2d',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 25,
					h : 54,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'V51EGBsXdpaghAJr',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -958379.0634765625,
					w : 15,
					h : 65,
					preload_prefix_size : 65,
					video_start_ts : -347356.548828125,
					video_codec : 'ABQgERdm6rI4KoVq',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 25,
					title : '41GFbvlxW5ut0JMK',
					performer : '2m6VZwIMJdK9OzYs',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'LwiE8Ou0sBmxaKdP',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'e4yrFPflNGuXHv3d',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 49,
			mime_type : 'AIcX7sgYhmGDP9TV',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 20,
					h : 94,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '6CKsgONVn0lorePZ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1412398.845703125,
					w : 68,
					h : 63,
					preload_prefix_size : 23,
					video_start_ts : 821208.2060546875,
					video_codec : 'QolqAUkI3SvZLfyN',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 3,
					title : 'X3UqAWxD48wjt1gs',
					performer : 'FDkn3b7QlfrAhWKZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'qDVtJy76w1TuOCeI',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'u24mRoLWxdK6vzbg',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'ga4s6JtLHxQScyRr',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 23,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 100,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 27,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 76,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 26,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 83,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 63,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 59,
					language : '4OhAvWqdIUCnKcLX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 9,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 42,
					user_id : 2056779206370585658,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 5,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 91,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 13,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 53,
					document_id : 4742472856179806428,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
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