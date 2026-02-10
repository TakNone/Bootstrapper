# messages.preparedInlineMessage

**Description** : *Represents a prepared inline message received via a bot&#039;s mini app, that can be sent to some chats &raquo;*

**Layer** : 222

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
	query_id : 2361915682807161159,
	result : $client->botInlineResult(
		id : 'NPiE1Fk4mrh8IGxc',
		type : 'dtegVuWGXrTPi0JD',
		title : 'gkZpxzBqTQef3Jbh',
		description : 'b0PgMR5DiaW48nlX',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -7827831146803691141,
			size : 39,
			mime_type : 'kv4zTdOBbHXyuR6L',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 40,
					h : 60,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4HbqwnGkhsJ7etm8',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 521134.306640625,
					w : 60,
					h : 39,
					preload_prefix_size : 100,
					video_start_ts : 382708.9833984375,
					video_codec : 'haxf6CJ9nOwPbFYv',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 40,
					title : 'E0h2YQbpKyU3X7Zc',
					performer : 'ELrQob8qsp302S9f',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'OqJfGEKYajsxgvIP',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'aJ9RuId10CUYFop4',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -2808465771004533612,
			size : 0,
			mime_type : '3HCPqSuw0X2aIiLG',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 71,
					h : 89,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Ck4ULb0Pt2wInuVH',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 843786.6533203125,
					w : 64,
					h : 49,
					preload_prefix_size : 61,
					video_start_ts : -411429.2373046875,
					video_codec : 'WMRaQw2kexSjLEmH',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 0,
					title : 'l7I4ksWHTPxecwQh',
					performer : 'ExvcybgHeCKMQWJp',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'cvjOCIVlAL5TzpJi',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'jC3GEtJ0zXKkwZ68',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'u6h9q7vDEsYfHOGx',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 49,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 36,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 60,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 22,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 43,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 4,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 37,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 100,
					language : 'v1jNJ74tbesWqEOX',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 36,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 9,
					user_id : 1869899300225781081,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 56,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 33,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 65,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 12,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : 5949959352298514607,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 38,
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
	cache_time : 20,
	users : array(
		$client->userEmpty(
			id : 3968594110591937333,
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
			id : -8438982922296838912,
			access_hash : -531262103236289526,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EXAPLMyOQtrs4aYk',
					reason : 'bMV2IEvNUJBKZ03D',
					text : 'SXhMabd0QL6cDzAu',
				),
			),
			bot_inline_placeholder : 'wqUbO6u5Eo3cAXdg',
			lang_code : 'Td0Z3GBWsJwc2Q6a',
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -5424770115489625445,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 2191602151612928682,
			),
			bot_active_users : 12,
			bot_verification_icon : -5466226989619468217,
			send_paid_messages_stars : 5114386437383011187,
		),
	),
);
```