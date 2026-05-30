# messages.setBotGuestChatResult

**Layer** : 225

```tl
messages.setBotGuestChatResult#b8f106e3 query_id:long result:InputBotInlineResult = InputBotInlineMessageID;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | NOTHING |

---

## Result

[InputBotInlineMessageID](type/InputBotInlineMessageID)

---

## Example

```php
$inputBotInlineMessageID = $client->messages->setBotGuestChatResult(
	query_id : 1262796080877653146,
	result : $client->inputBotInlineResult(
		id : '9WMFsGRhtV5gliJ2',
		type : '5nOwhVC3SdrFfmGc',
		title : '0a62CqwSmifX1KOs',
		description : 'bVS7yu8fs34EZDox',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 70,
			mime_type : 'Y3Z9EpvgDRGsOMKo',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 19,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'R3GIoMk5Jx60j9b7',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2016781.7080078125,
					w : 67,
					h : 18,
					preload_prefix_size : 59,
					video_start_ts : 1683022.83203125,
					video_codec : 'dZVoA7wnORL4Da9h',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 44,
					title : 'Q5wMRXgWDfU3cYH9',
					performer : 'hOdyFgQ7Z4mqM0ke',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'uYF5DThndXMKO4JU',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XcFxWy0CzH1BPRoL',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 18,
			mime_type : 'Be8x3O2qDNzcrwX5',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 44,
					h : 18,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'kPCW6Eo9JvpA5eg4',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -760221.6708984375,
					w : 79,
					h : 15,
					preload_prefix_size : 81,
					video_start_ts : 1101970.091796875,
					video_codec : 'SCZXRh15mPlOgkKT',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 58,
					title : '6D45rhKxUsXYQmZI',
					performer : 'gdDFGa27TbfunNYy',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'e7LXPyNc8KZolvGf',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Tx7EioWZAF0CbJzS',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'CGpSxw4lZgPzcieN',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 96,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 84,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 84,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 25,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 92,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 41,
					language : '6ENSkDerwag0zLKy',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 75,
					user_id : 6984979396051225001,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 98,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 58,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 64,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 19,
					document_id : 7676803932472180732,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 49,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 46,
					date : 81,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 95,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 51,
					old_text : 'q58zRnjMpw93fZ1g',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 43,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
);
```