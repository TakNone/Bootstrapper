# messages.setBotGuestChatResult

**Description** : *Bots may use this method to answer a guest mode &raquo; query received via an updateBotGuestChatQuery update, providing the message to post into the chat as a guest, see here &raquo; for more info*

**Layer** : 229

```tl
messages.setBotGuestChatResult#b8f106e3 query_id:long result:InputBotInlineResult = InputBotInlineMessageID;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | Query identifier from the updateBotGuestChatQuery.query_id field |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | The result to send as the answer to the query |

---

## Result

[InputBotInlineMessageID](type/InputBotInlineMessageID)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$inputBotInlineMessageID = $client->messages->setBotGuestChatResult(
	query_id : -1198390767048659489,
	result : $client->inputBotInlineResult(
		id : 'm27FXyx5QdjTkGwe',
		type : 'fPOiR31gjNFWBYqe',
		title : 'MLHlaYGV9zJb036j',
		description : 'Ca7jNyEGODu4gHfS',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 66,
			mime_type : 'QX9BLedWik7FRTDN',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 73,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jGebnL380ip5C4NJ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 831982.576171875,
					w : 74,
					h : 87,
					preload_prefix_size : 87,
					video_start_ts : 844237.6845703125,
					video_codec : 'rgOAItNCsJ6ef89Y',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 18,
					title : 'Tk5E9hs64QY1xBFb',
					performer : 'eltYyQRj29G7dwBu',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'K1OU4Zq6YGEzlfru',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '0JuBLZUCeo7PIr3a',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 23,
			mime_type : 'RnDFH3kZuQ4e8i1m',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 40,
					h : 98,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'n40CGIF2DtRVZs6i',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2031985.412109375,
					w : 46,
					h : 74,
					preload_prefix_size : 27,
					video_start_ts : -1001029.421875,
					video_codec : '01jMpwhLdPHnkEyT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 98,
					title : 'RJsGikCny8raOdNh',
					performer : 'fqisDLX6COExZkYc',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '8qnmKlA01tJP7pi5',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'eTGB3dRK4su1tpZq',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'heTg2p5NMyu3Kv01',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 15,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 74,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 65,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 77,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 90,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 71,
					language : 'HQEynRTBJOcma4Ip',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 18,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : 6928014988450848375,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 95,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 89,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : 6430484231514421827,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 14,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 94,
					date : 71,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 19,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 13,
					old_text : 'kv2wRnX1olJ5PquA',
				),
				$client->messageEntityDiffDelete(
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