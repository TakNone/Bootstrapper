# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 218

```tl
messages.preparedInlineMessage#ff57708d query_id:long result:BotInlineResult peer_types:Vector<InlineQueryPeerType> cache_time:int users:Vector<User> = messages.PreparedInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | The query_id to pass to messages.sendInlineBotResult |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | The contents of the message, to be shown in a preview |
| <mark>peer_types</mark> | [`Vector<InlineQueryPeerType>`](type/InlineQueryPeerType) | Types of chats where this message can be sent |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.PreparedInlineMessage](type/messages.PreparedInlineMessage)

---

## Example

```php
$messagesPreparedInlineMessage = $client->messages->preparedInlineMessage(
	query_id : -2284059214142117646,
	result : $client->botInlineResult(
		id : 'lYU5RqQKy1j3NFup',
		type : 'pWlZKsi5Oht2IDeF',
		title : 'FW6HaVkNA41LZxG0',
		description : 'ShBtkK3iUnwOTPqL',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -6424148724565949811,
			size : 69,
			mime_type : 'ZWMKc8kyxB5zAisw',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 31,
					h : 47,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'DvTWjLPstrN82Emh',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -621313.4677734375,
					w : 17,
					h : 90,
					preload_prefix_size : 99,
					video_start_ts : -698082.8681640625,
					video_codec : 'w24D8QxMPF5GtCvs',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 96,
					title : 'nWIltAMQkDc3eb95',
					performer : 'q7rCOBxiwN80LYSQ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'jC4zUwAvJ50iWTcK',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'b64fzXLclMTuNg1t',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -7827335214270018104,
			size : 26,
			mime_type : 'mCZAPR7dchkWKa54',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 24,
					h : 44,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'zLSXHrCgib2yDmqQ',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -2040045.693359375,
					w : 76,
					h : 36,
					preload_prefix_size : 43,
					video_start_ts : -356727.28515625,
					video_codec : 'SQWEbem6RwtyLiMD',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 91,
					title : 'Pnkz3B7jLdKSbHNV',
					performer : 'cWf7gVNU5sLzyeZd',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'VrZiDuqsgQHFTdCj',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'c5MtYL3km8fTbh6C',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'UVKD58QGCaJ6i3Mz',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 62,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 47,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 10,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 46,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 81,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 8,
					language : 'dUixfW53rwHa0nFt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 19,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : 277652146549434479,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 4,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 20,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 9,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 68,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 62,
					document_id : 2253312761006216536,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 75,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
	cache_time : 70,
	users : array(
		$client->userEmpty(
			id : 8036538676741828963,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 2134788518969521282,
			access_hash : 7581414664362355329,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1xT7CI6UBGdFjMpf',
					reason : 'ELepj6Nmx8qOaI9R',
					text : 'wiEsfT78SJIcL2l0',
				),
			),
			bot_inline_placeholder : '3GEPxtFbqr4pUjYn',
			lang_code : 'dJ08WbhgNVOLRTje',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 1675825302822617602,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : 8611126351074949574,
			),
			bot_active_users : 68,
			bot_verification_icon : -6922181297036920148,
			send_paid_messages_stars : 5369983684841599123,
		),
	),
);
```