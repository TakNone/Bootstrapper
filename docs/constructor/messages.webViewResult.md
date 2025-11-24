# messages.webViewResult

**Layer** : 218

```tl
messages.webViewResult#aadf159b result:BotInlineResult users:Vector<User> = messages.WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`BotInlineResult`](type/BotInlineResult) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.WebViewResult](type/messages.WebViewResult)

---

## Example

```php
$messagesWebViewResult = $client->messages->webViewResult(
	result : $client->botInlineResult(
		id : 'TyXA3ZB9MVCx18Na',
		type : '8ivs6MQwmgWpxFrZ',
		title : 'ZaEzIlLP1t3k4wBD',
		description : 'yJK6lCjcIPs2uRYS',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 7176175761581979158,
			size : 3,
			mime_type : 'cRhvwJdjZAe1rHyD',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 63,
					h : 35,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'QUBKcgOr8LTApjWS',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 322091.2138671875,
					w : 39,
					h : 40,
					preload_prefix_size : 60,
					video_start_ts : 703326.76171875,
					video_codec : '30mSKq8QFEbuV5kl',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 48,
					title : 'twK2E0khC5vcojFR',
					performer : '4mSAq5GxZOuFsBj3',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'MgS64rIO1UT3fQLi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'FI9BUxf8ZnjpCuDe',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 8499685285646465216,
			size : 18,
			mime_type : 'TWSGmKJyDfrvz7VX',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 64,
					h : 6,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'fJXzgeoOM5QUR846',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 2002340.2119140625,
					w : 39,
					h : 0,
					preload_prefix_size : 34,
					video_start_ts : 1592011.2236328125,
					video_codec : 'eC8bTjc1Yxu2aXir',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 87,
					title : '8sgV6m7djPk5eLrD',
					performer : 'SYvbR1BeMGhmjwfI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'H4TAt9WVR7y2K6gb',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'izhBFEXwtqkNmb1R',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'xcusoZmVpQYifkFK',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 4,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 35,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 73,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 64,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 16,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 61,
					language : 'O0gwUn8laLmJP9tT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 6,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : -3365418610739745618,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 81,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 59,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 94,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 65,
					document_id : 6738363515298144711,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 82,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 5011772963217469047,
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
			id : 9185007584346255360,
			access_hash : 9075067349065418851,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ft2pZBzIPaKGNlFd',
					reason : 'SjdDhJalFVoxz9Ly',
					text : 'Q7ByoJcKIe64wDMj',
				),
			),
			bot_inline_placeholder : '7XyPRAU3WHa4t6TC',
			lang_code : '3Xfl26trvVgbeCmn',
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
				max_id : 55,
			),
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -7369119482709383823,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : 8555548388613475969,
			),
			bot_active_users : 79,
			bot_verification_icon : 6854320826090822707,
			send_paid_messages_stars : -8987031168604805330,
		),
	),
);
```