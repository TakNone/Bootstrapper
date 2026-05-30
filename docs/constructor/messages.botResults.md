# messages.botResults

**Description** : *Result of a query to an inline bot*

**Layer** : 222

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
	query_id : -6229081191610139499,
	next_offset : 'G4IzRmUXa2gli1qt',
	switch_pm : $client->inlineBotSwitchPM(
		text : 'BwuiWoVDJm1GNTvg',
		start_param : 'avjc6b2t9fuzWXBq',
	),
	switch_webview : $client->inlineBotWebView(
		text : 'KNSs408rMchzuCti',
		url : 'https://docs.liveproto.dev',
	),
	results : array(
		$client->botInlineResult(
			id : 'RGrWbE836cUnoAmK',
			type : 'PnRxikweuf3McQ96',
			title : 'ckrm3iZ4zPg12wbY',
			description : 'WVmhLoM3fIK7FxyQ',
			url : 'https://docs.liveproto.dev',
			thumb : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -4052619309054420266,
				size : 42,
				mime_type : 'CV0qMzlFeBJPubAT',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 99,
						h : 0,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'tpO8ajvuJThDX3BQ',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1101240.974609375,
						w : 66,
						h : 68,
						preload_prefix_size : 36,
						video_start_ts : -1332332.24609375,
						video_codec : 'yJ51LxlR7czEnMvO',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 32,
						title : 'wZ1nh6tfUyC75Azc',
						performer : 'AiZbmTS1dLQEl2j5',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'Dv6xtYjEc7dJPKRm',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'jpUtaT7s4uPSeEXr',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			content : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 7109424275005612828,
				size : 15,
				mime_type : 'hyUtKR7fbMqex8An',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 95,
						h : 39,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'aYQzJ3FA8Vjckye9',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -307892.177734375,
						w : 56,
						h : 76,
						preload_prefix_size : 11,
						video_start_ts : -1040210.578125,
						video_codec : 'McQ7YU3FtEoXdCDS',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 96,
						title : 'Os2wxHraLnbCQpcm',
						performer : 'OpRTdtszyPo1X2Uc',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'Se7EVfOtcvBayR2X',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'v1Ock0P64N9L5QBX',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'oZuk9Hta1c5xhFXD',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 29,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 58,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 52,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 1,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 10,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 23,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 35,
						language : 'T9HmRvQdYekFhyS4',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 30,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : -1184556152009566421,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 83,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 2,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 19,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 67,
						document_id : 3793075613293596971,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 10,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
		$client->botInlineMediaResult(
			id : 'Jx8GQ7rgDWFbdozi',
			type : 'o1xAv902rdMeEsyT',
			photo : $client->photoEmpty(
				id : 8300892832945875980,
			),
			document : $client->documentEmpty(
				id : 322042808702729825,
			),
			title : 'uabzVw0mjF3dMJfA',
			description : 'SJW3DacP1vieCFh6',
			send_message : $client->botInlineMessageMediaAuto(
				invert_media : true,
				message : 'LjrHJpNDM3gSZaqw',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 99,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 62,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 35,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 91,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 7,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 41,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 30,
						language : 'dhPZiWpuMHc2j5DJ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 16,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : -3616176008761163820,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 57,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 63,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 95,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 52,
						document_id : 5774860738467876648,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 34,
					),
				),
				reply_markup : $client->replyKeyboardHide(
					selective : true,
				),
			),
		),
	),
	cache_time : 72,
	users : array(
		$client->userEmpty(
			id : -4766901531537251927,
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
			id : -1439669721883058114,
			access_hash : -8840415410006848788,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nwtJHdy3bF72ZBXW',
					reason : 'j1gNOC5T6Y9mFL4l',
					text : '0DoqKGRyuNmjd981',
				),
			),
			bot_inline_placeholder : 'MWz9u1rk3gHy6QoR',
			lang_code : 'Iir2f147t5FUP3wW',
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
				max_id : 88,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 4850721199280019441,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : 2195065205800737007,
			),
			bot_active_users : 83,
			bot_verification_icon : -7005727350793924888,
			send_paid_messages_stars : 7421760863509930907,
		),
	),
);
```