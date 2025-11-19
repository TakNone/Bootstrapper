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
		id : 'Jrfa0v9LoR8FjmyW',
		type : 'tNXKw7EQVM9SpAyO',
		title : '7mfM4vP2owNcTUat',
		description : 'e8N0LqhIx2wgDm1s',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -4969880299321041064,
			size : 32,
			mime_type : 'lNfqALtDTgX6QHxB',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 31,
					h : 33,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'QsBblLvZDXSKFqIg',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1665235.5947265625,
					w : 31,
					h : 50,
					preload_prefix_size : 65,
					video_start_ts : 1841190.6083984375,
					video_codec : 'I4RXljBFgi82abqD',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 78,
					title : 'PzUbfkwT8Z9rleI5',
					performer : 'alPwRpyKug629Ih5',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '2708aYmGiNyWfMjn',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'a46P9unhweXfJOxp',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 4244112597001957767,
			size : 44,
			mime_type : '0rCVAm4zsY1QfBRc',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 93,
					h : 35,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'hkvnQ1VzHONu4TRW',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1570021.8828125,
					w : 69,
					h : 55,
					preload_prefix_size : 38,
					video_start_ts : -57310.619140625,
					video_codec : 'SeIHCwmD2JOvhAoG',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 11,
					title : '6LzvDI7KGwUcWREe',
					performer : 'WnqIU0eTctx6MRHZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'kYeJR1mMiyUsDGC8',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'N82YOSVxltywupmT',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'KXzWluhjO5aCtUVR',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 74,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 44,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 68,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 99,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 16,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 32,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'LmFD8TsYk9XN4W5C',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 97,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -2027021841316867011,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 54,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 47,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 9,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 47,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 31,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 76,
					document_id : -1694489713748513626,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 71,
				),
			),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4840477457303223842,
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
			id : -5750954701839882146,
			access_hash : -7406066172954259109,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kIOpcdoWZ1Vey63n',
					reason : '64ZQkmjIvJF2u9K7',
					text : 'P8hogDZLA3VYQb9j',
				),
			),
			bot_inline_placeholder : 'rVuTK4hDC2MLO3HJ',
			lang_code : 'YT7saqiSA9VXI6un',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 10,
				background_emoji_id : -5152382783540373589,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 1309322418772759428,
			),
			bot_active_users : 41,
			bot_verification_icon : -6152482306314726451,
			send_paid_messages_stars : -5796740883594239042,
		),
	),
);
```