# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 225

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
	query_id : -3129779532482004953,
	next_offset : 'XdcHJb2PAU5KQfku',
	switch_pm : $client->inlineBotSwitchPM(
		text : '4MOvrWUA0JPXuyNs',
		start_param : 'LSdsCvk2XRcfNoxt',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'bp6vHDzZKCnkGERQ',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'vDmL38i1pUCfk2rO',
			type : '8VsaNCB1J3uRjiZH',
			title : 'ib6e3koCzmVyB4aR',
			description : 'l7Afmt6pYauCBV1F',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 8365452330362171484,
				size : 50,
				mime_type : 'UAih3K5dXxz0GgQl',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 53,
						h : 88,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'Bbpg7haFli4fDATZ',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -394298.0966796875,
						w : 31,
						h : 10,
						preload_prefix_size : 46,
						video_start_ts : -172171.951171875,
						video_codec : '08n36YPVDi7cmysA',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 81,
						title : 'EMIO4ZuNt2cwSCkG',
						performer : 'z6B1P9U4xfvliRrc',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'z4l0ICTEhVxJw9ni',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'OA1Zja4vCp9Fqx2H',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -2540419425465764336,
				size : 31,
				mime_type : 'mWBn4ZM1QIUhTDNP',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 25,
						h : 67,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'GwSmEyJvN349I5fj',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1189377.5205078125,
						w : 0,
						h : 77,
						preload_prefix_size : 93,
						video_start_ts : -1954517.94140625,
						video_codec : 'GDQqriAfntaHEKJU',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 15,
						title : 'cCT9LZUYXKOMtP0k',
						performer : 'j5sLMl0Zv2TBRcAH',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'yKP2obsA0ZBeRg3I',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '6KxHVqPNFhOYvdoj',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'ozFMZkVUJ5c8XswI',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 50,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 25,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 3,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 54,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 63,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 63,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : 'trLfETjAgkcWOQPK',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 25,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : -2848668184766559080,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 14,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 40,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 61,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 52,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 37,
						document_id : 2030698946764773259,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 16,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 7,
						date : 80,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 3,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 50,
						old_text : 'ngwSqmpEj7BQX1LR',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 16,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'METYK3ci01qhgXFu',
			type : '4UFlvBdte0gaL2jC',
			photo : $client->photoEmpty(
				id : 7666232369378861927,
			),
			document : $client->documentEmpty(
				id : -1458995461487196751,
			),
			title : 'QLWIZuPnbgFKodpS',
			description : 'rN3RTtWmadckALbP',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'Qu4RMrN29Vaj3yqc',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 82,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 14,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 68,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 15,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 54,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 89,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 83,
						language : 'Hp6YBaU03kjlEJw4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 41,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : -7907601533324731428,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 36,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 48,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 34,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : 6139578408164286574,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 89,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 21,
						date : 10,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 37,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 94,
						old_text : 'WR1ldcnAVBrjgIw3',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 38,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 79,
	users : array(
		$client->userEmpty(
			id : -7332148896777422639,
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
			id : 6471316884881966279,
			access_hash : -3707036027185617814,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R4jz3YbvdmZTSFLE',
					reason : 'VGOfR0qYUrv8Iz5T',
					text : 'l2QrEtGnRk5KxHuM',
				),
			),
			bot_inline_placeholder : 'CTHafm3Q5U6jXehr',
			lang_code : 'XzLPt3ENudIATi58',
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
				max_id : 42,
			),
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -7570697399877497674,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : 8364573454561808290,
			),
			bot_active_users : 87,
			bot_verification_icon : 5413760524490749383,
			send_paid_messages_stars : 970245651172220397,
		),
	),
);
```