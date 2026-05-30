# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 225

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
	query_id : 7634999470788800989,
	result : $client->botInlineResult(
		id : 'ek6hpMHBmaVr5QgK',
		type : 'GpQJfEOkjgBVu8eA',
		title : 'M8kLivAJEoWKgtdR',
		description : 'XK3bLRkfIYElBtMh',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -8680653940976934019,
			size : 76,
			mime_type : 'SnX5QxWsUya4rvzA',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 1,
					h : 19,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4pks3EHDFeCJQab2',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1088411.2353515625,
					w : 52,
					h : 5,
					preload_prefix_size : 25,
					video_start_ts : 484987.828125,
					video_codec : 'e2P8bGusrqLWxmBS',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 0,
					title : 'EJTVKXWPikfN5DvR',
					performer : 'dag7eKUFikcVQDNL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'ZpGiywCod0KcbO4A',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'HrUgI2CKy9hvuNfk',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 3852491911689186119,
			size : 64,
			mime_type : 'qplOMJNmKT9bCoF3',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 4,
					h : 11,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'rbu3on0AJYZqMG9i',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -498359.8896484375,
					w : 38,
					h : 77,
					preload_prefix_size : 59,
					video_start_ts : 1282806.1015625,
					video_codec : 'Zj850rAYQnKxVWOl',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 2,
					title : 'cI3nY8Dk4MNLpgQX',
					performer : 'ayDApH9olwKjsgzb',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'jaTSdNgx9wvipOoG',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jspfz19IJNUtX3KV',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'ctjFMRlJg64PiHNq',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 3,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 82,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 73,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 97,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 25,
					language : 'vA1mguUH0rI7telY',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 32,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 98,
					user_id : -7640997740603317737,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 90,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 31,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 18,
					document_id : -3226305371444556650,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 77,
					date : 63,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 63,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 37,
					old_text : '7ypiFDXTeaM4wlRC',
				),
				$client->messageEntityDiffDelete(
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
	cache_time : 54,
	users : array(
		$client->userEmpty(
			id : 482197266004821838,
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
			id : -1067802240264378705,
			access_hash : -3520641561807317103,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'M3BYxnfhOVUdbsPN',
					reason : 'SKXlEHTjMoI624Y3',
					text : 'CGKkhITMJ4bpFZgu',
				),
			),
			bot_inline_placeholder : 'DNp1bW7gam2tQYXu',
			lang_code : 'wVOXdyhtP8Tc1mFs',
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
				max_id : 33,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : 8952513706073455852,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : -7004608862607855929,
			),
			bot_active_users : 85,
			bot_verification_icon : -4648064826923726053,
			send_paid_messages_stars : 3660675303910198459,
		),
	),
);
```