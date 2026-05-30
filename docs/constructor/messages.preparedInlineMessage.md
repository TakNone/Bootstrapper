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
	query_id : 2940995931250916799,
	result : $client->botInlineResult(
		id : 'vFQLEsHMOGw9p8P3',
		type : 'UJF0ZEu7DvteMmhK',
		title : 'dT52bi9OfnxsJvgz',
		description : 'JRE8brheYpxMDtkf',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 3472750703110719762,
			size : 48,
			mime_type : 'etF5cTOZVElK6X3W',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 59,
					h : 72,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'Vc94gHjh67PInYzd',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 610204.7333984375,
					w : 67,
					h : 90,
					preload_prefix_size : 50,
					video_start_ts : -555346.3056640625,
					video_codec : 'pvEtGAlyKISPg4wQ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 4,
					title : 'q1vLItykXjRVnieB',
					performer : 'FXNk864cS5TltKoL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'HdVM5WvmhZ9e2FNO',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'eKsNz48DGu0af731',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -6538411805041513365,
			size : 67,
			mime_type : 'kMDKpBAHgyZJ52zd',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 20,
					h : 13,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'shRqQ8FimoGvLdI6',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -422415.525390625,
					w : 41,
					h : 16,
					preload_prefix_size : 73,
					video_start_ts : -1031417.3779296875,
					video_codec : 'dNSYey4802irXZHW',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 51,
					title : 'FJ1zrkeItiqVh3nX',
					performer : 'WsID74RY8erljLFV',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'z1U5AIwBJVf7v9bY',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '4nxj73GgoFUVqWuv',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'PC7fYp8ERorTKyXF',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 97,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 6,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 35,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 12,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 41,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 65,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 74,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : '5460MXnuWmRjSbth',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 79,
					user_id : -5090336603058945903,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 82,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 36,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 56,
					document_id : 9175739677907161720,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 8,
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
	cache_time : 25,
	users : array(
		$client->userEmpty(
			id : -5886074921783595188,
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
			id : 5220028907952476017,
			access_hash : 6232064905986109977,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 34,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fKh05NvzDIQYOMmJ',
					reason : 'mAMYlbLZTX0HfdP9',
					text : 's8CNdyOSbvHt7mIg',
				),
			),
			bot_inline_placeholder : 'BvxJdfRnsP8ye9SQ',
			lang_code : '3s1DbvzeC0ntcLST',
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
				max_id : 85,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : 5002360915412938784,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -1390882394706737687,
			),
			bot_active_users : 26,
			bot_verification_icon : 4788609927752636122,
			send_paid_messages_stars : -2595583837543771867,
		),
	),
);
```