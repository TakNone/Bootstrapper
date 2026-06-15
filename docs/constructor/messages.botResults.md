# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 227

```tl
messages.botResults#e021f2f6 flags:# gallery:flags.0?true query_id:long next_offset:flags.1?string switch_pm:flags.2?InlineBotSwitchPM switch_webview:flags.3?InlineBotWebView results:Vector<BotInlineResult> cache_time:int users:Vector<User> = messages.BotResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **gallery** | [`flags.0?true`](type/true) | Whether the result is a picture gallery |
| <mark>query_id</mark> | [`long`](type/long) | Query ID |
| **next_offset** | [`flags.1?string`](type/string) | The next offset to use when navigating through results |
| **switch_pm** | [`flags.2?InlineBotSwitchPM`](type/InlineBotSwitchPM) | Shown as a button on top of the remaining inline result list; if clicked, redirects the user to a private chat with the bot with the specified start parameter |
| **switch_webview** | [`flags.3?InlineBotWebView`](type/InlineBotWebView) | Shown as a button on top of the remaining inline result list; if clicked, opens the specified inline mode mini app |
| <mark>results</mark> | [`Vector<BotInlineResult>`](type/BotInlineResult) | The results |
| <mark>cache_time</mark> | [`int`](type/int) | Caching validity of the results |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the results |

---

## Type

[messages.BotResults](type/messages.BotResults)

---

## Example

```php
$messagesBotResults = $client->messages->botResults(
	gallery : true,
	query_id : 5723284805710074945,
	next_offset : 'oMF2xt1gCVDIJ7Rf',
	switch_pm : $client->inlineBotSwitchPM(
		text : '9A0Qk8DIuUY6ZNGE',
		start_param : 'Gc9x58uEN4fTd1bD',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'kEujpIQ7lTizAom1',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'Zkz0WOBCUsJIdNEj',
			type : 'Uh9OXQTyEoq0kJfu',
			title : '6CMxIkDFlrzO0ph7',
			description : 'ErtuQOzvoC7cYZX8',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 1148659969906442678,
				size : 59,
				mime_type : 'o9UcPpK3F0nQdzDE',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 80,
						h : 0,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'SJn0L2Yj1G4XabIl',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1266677.00390625,
						w : 11,
						h : 59,
						preload_prefix_size : 76,
						video_start_ts : 719326.076171875,
						video_codec : 'RTcyQGSIZdqfOBPv',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 4,
						title : '8nF6N4rS5ic3B2Oh',
						performer : 'hoB9N4KHwrMs60Eg',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'OXRBEz6ZNpA2IGtj',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'wz6k3iMhTDS2tVy9',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -5767787803998991741,
				size : 67,
				mime_type : 'P8hDbzM7kfiAO1Kj',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 53,
						h : 56,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'mMqG0PZOx3ylRgWC',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 53733.28125,
						w : 52,
						h : 89,
						preload_prefix_size : 2,
						video_start_ts : -357634.8857421875,
						video_codec : 'SuamPyv2Y9tKZA7V',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 78,
						title : '4o1mJcRQ0WVMbfAT',
						performer : 'uGcqlNiROoLDCaB8',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'jU0SRmo2iXQEcw9A',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '2hmWtujqKPOzRfDs',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'OcmJ3pdoLzAZM7FW',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 10,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 32,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 0,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 45,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 18,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 62,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 72,
						language : 'kMzrL8jagl4qciun',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 12,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : 7830967564371068843,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 23,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 26,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 6,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 94,
						document_id : -4007636322920037700,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 81,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 41,
						date : 74,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 16,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 28,
						old_text : 'OYf1pJF5TtdywrD3',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 78,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'kJgo7On3uyFTI1iC',
			type : 'OGVtx45v9Np3kQ07',
			photo : $client->photoEmpty(
				id : -4910432455535539825,
			),
			document : $client->documentEmpty(
				id : 2176346467189523565,
			),
			title : 'oEXIVlUp5ZgiYtJq',
			description : '3E6gcprAix71IL4w',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'KAlbtVaPLRDn8x3Z',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 73,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 93,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 47,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 43,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 79,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 100,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 2,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 39,
						language : 'dH6IVBvDixoNml10',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 33,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : 1567332973518555578,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 15,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 92,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 48,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 38,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 36,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 71,
						document_id : -1403523597885388286,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 55,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 48,
						date : 63,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 98,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 66,
						old_text : 'fepS3Fb6rDdMUg72',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 37,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 78,
	users : array(
		$client->userEmpty(
			id : -2623253003526766229,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 7697559399147281781,
			access_hash : -4899267097312183330,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hMe8PWDsR3LzfjAt',
					reason : '9l6XPOxUwzoub2yk',
					text : 'ks0qPldBEIQrM7nV',
				),
			),
			bot_inline_placeholder : 'cK0YROSfnHkixbwN',
			lang_code : '3TJs2wNdemYEyMro',
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
				max_id : 68,
			),
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -1139052411394696141,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : 3065952136060166870,
			),
			bot_active_users : 34,
			bot_verification_icon : 6405539043278696579,
			send_paid_messages_stars : -7499616192479863993,
		),
	),
);
```