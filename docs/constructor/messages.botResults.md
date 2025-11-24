# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 218

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
	query_id : 5936888996776023926,
	next_offset : 'yMAfvjzX68EbcUSF',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'Lr7Kf3UWZSBjR1cd',
		start_param : 'Kn8pl2bNwADsdFeT',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'vbFUplzmWMs4wj1S',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'BOVbUP2ML79rcGEh',
			type : 'oidPrbaLwkf9CHIV',
			title : 'QndAuXJth3cZgpwV',
			description : 'zVaWDIxosljiuMHr',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -5341880640950344772,
				size : 25,
				mime_type : 'v7UCL3XbzMi0dSqB',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 49,
						h : 44,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'qSxKt70RlCQZEUOB',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -184266.0986328125,
						w : 99,
						h : 46,
						preload_prefix_size : 91,
						video_start_ts : -996176.1484375,
						video_codec : '0mtEFaMvHugJISpB',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 2,
						title : 'zckpE7amQBgTWUSx',
						performer : '9HWNEloFIYjDkLsd',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'nc65pt0jv7MdPwB2',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'X4orV2fvbCpY1sez',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 1944221631056214357,
				size : 19,
				mime_type : '09bguRLEmhvTwPCe',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 53,
						h : 54,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'FYf2VRZO7LtlbkXo',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1948592.4453125,
						w : 19,
						h : 61,
						preload_prefix_size : 10,
						video_start_ts : -659222.802734375,
						video_codec : 'XGuvO3BJmHsrDjRf',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 20,
						title : 'Er7MgHRmAC2NV6zW',
						performer : 'yQLvmNkzobswDBJ3',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '0VnOsxbziKpfcr5F',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'SDd7XlMxtFy64nCT',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'UMpB3OjEmZg4YlDQ',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 56,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 24,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 28,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 66,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 92,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 30,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 85,
						language : '97puNzqlHOZ6hS3y',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 75,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -2192595572878505179,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 47,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 70,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 83,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 27,
						document_id : 508640888888800328,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 73,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'zh8yEPpZYOa6S5Ji',
			type : 'ItVPXQgzhOrJH8js',
			photo : $client->photoEmpty(
				id : -5545894584697411456,
			),
			document : $client->documentEmpty(
				id : -3842760530489708212,
			),
			title : '8TNDp1eC7zdB0sgo',
			description : 'FXWuQlkAgZ1awnvh',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'XuYcJ5wACrKRs9ae',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 78,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 32,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 84,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 74,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 36,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 11,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 68,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : '5QtI04S1h2BxDNpE',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 66,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : 9126065971002467104,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 13,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 37,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 33,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 93,
						document_id : 4056562004557492851,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 96,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 91,
	users : array(
		$client->userEmpty(
			id : 78045183912264240,
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
			id : -3193819087267724092,
			access_hash : -1546966091947621831,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IwGBQWEkXsMhLpti',
					reason : 'KhsPSdxmNnZ4RlLr',
					text : 'NICSzY4kXrWv3yju',
				),
			),
			bot_inline_placeholder : 'UE34vh6TXrHSsqD5',
			lang_code : 'T8kc4GIBng7j6zt0',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 5165399335051998349,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : 202084046313829731,
			),
			bot_active_users : 24,
			bot_verification_icon : -5964165752151172768,
			send_paid_messages_stars : -3888987058883734729,
		),
	),
);
```