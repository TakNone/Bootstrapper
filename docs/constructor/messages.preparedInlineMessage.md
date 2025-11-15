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
	query_id : 4527827921546121588,
	result : $client->botInlineResult(
		id : 'p5sES1hiXyZORtM8',
		type : 'FVvHUo9PhTL1mkKD',
		title : 'cGwVDny9jH3K26sI',
		description : '56kPhR4DlNX3cOZm',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 8946212559162727184,
			size : 70,
			mime_type : 'iO3grlfaEt4mKPyL',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 79,
					h : 49,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '1zoaXyAQlvGt9pKk',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1401310.4794921875,
					w : 62,
					h : 92,
					preload_prefix_size : 91,
					video_start_ts : -807463.05078125,
					video_codec : 'TgCObrvpEDQlit0B',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 85,
					title : '7X9I0YV8ytjZ15Hm',
					performer : 'JzF2DLeAbSR69fKj',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '5ni1ayDVUPjwelbO',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '1ghniNsZxXu3o8Qb',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : -5239478779558933144,
			size : 30,
			mime_type : 'skLpDU9W2GcwhP0Y',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 100,
					h : 53,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '2xmayzpR3DVgweTF',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1607570.494140625,
					w : 8,
					h : 75,
					preload_prefix_size : 85,
					video_start_ts : 1568125.537109375,
					video_codec : 'payuNMGinW8QjoE4',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 11,
					title : '9GLfAhxZTv3c8NJq',
					performer : 'EldXwpFcy47YWn0R',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'mBCvWMg1uGfqijc6',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Z0hAs8ijJVwreGpf',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'l2eGYjFM9vit8kya',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 95,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 40,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 56,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 19,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 74,
					language : 'X1M3enNG2fVR7hwp',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 34,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 98,
					user_id : -3685422001687240079,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 85,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 99,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 37,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 3,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 4,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 98,
					document_id : -846516402224314294,
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
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
	cache_time : 79,
	users : array(
		$client->userEmpty(
			id : -9103197925106850554,
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
			id : 4371155715190527912,
			access_hash : -8382824603039099113,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'U8yKExASawF01XRz',
					reason : 'esZBAIv2KXScg60E',
					text : 'Qp1gl79asoI0kOiT',
				),
			),
			bot_inline_placeholder : 'EXoBvry2TFO74QZu',
			lang_code : 'T0uZadovHrAbiLRh',
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
				max_id : 59,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : -5213685153216540731,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -7087414447262761834,
			),
			bot_active_users : 29,
			bot_verification_icon : -3366261600221311863,
			send_paid_messages_stars : -7591793770330521947,
		),
	),
);
```