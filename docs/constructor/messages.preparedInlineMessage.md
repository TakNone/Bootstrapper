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
	query_id : -3778490410819488780,
	result : $client->botInlineResult(
		id : '14FO5km8D73ZayAp',
		type : 'TMmDnybi0VBlRtY6',
		title : 'gCZUbcMriOa59Sm1',
		description : 'PhBgs06RFwW7tExD',
		url : 'https://docs.liveproto.dev',
		thumb : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 59452839069241618,
			size : 69,
			mime_type : 'IKnALeUiRWCO7J1a',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 38,
					h : 13,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'okd3B85jEMizXhLP',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1315198.0986328125,
					w : 93,
					h : 11,
					preload_prefix_size : 67,
					video_start_ts : 1856440.982421875,
					video_codec : '0CalGijbEA3PpDQk',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 40,
					title : 'S8cQO4vCF3btqE0z',
					performer : '5bnoaHC0gpqrSYFZ',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'BOls3oM69PkTZENF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '2Ygcfvm8ya40DSBi',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		content : $client->webDocument(
			url : 'https://docs.liveproto.dev',
			access_hash : 6820626461712834758,
			size : 23,
			mime_type : 'kZ49GjrciB7bnw5W',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 1,
					h : 80,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4BTEcUqLaOl2VYdD',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -100259.6083984375,
					w : 57,
					h : 30,
					preload_prefix_size : 95,
					video_start_ts : 1501257.6630859375,
					video_codec : 'vBTJDoGhFp2jqzWR',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 8,
					title : 'BF5JETR6iQ8dlZfk',
					performer : 'YW1Cf7OZjAhUIsGo',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'Lukm5N3MqpxEzX9D',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'uxWnDKjOHM0iSC9v',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
		send_message : $client->botInlineMessageMediaAuto(
			invert_media : true,
			message : 'd67GEN2I3QjLl0Jh',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 88,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 85,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 84,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 87,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 46,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 16,
					language : 'hSUYTv6lH8sXkB3y',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 99,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 64,
					user_id : 2325468322274427825,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 34,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 89,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 51,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 18,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 100,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 39,
					document_id : -6388270249407545038,
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
	peer_types : array(
		$client->inlineQueryPeerTypeSameBotPM(),
		$client->inlineQueryPeerTypePM(),
		$client->inlineQueryPeerTypeChat(),
		$client->inlineQueryPeerTypeMegagroup(),
		$client->inlineQueryPeerTypeBroadcast(),
		$client->inlineQueryPeerTypeBotPM(),
	),
	cache_time : 60,
	users : array(
		$client->userEmpty(
			id : 298985239417299989,
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
			id : -4039383662285798045,
			access_hash : 4545552816170639903,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'K8lqoADGtVHC4FLw',
					reason : 'sGwDTeLhrR01SfIK',
					text : 'I8tM49sXCdcKk27E',
				),
			),
			bot_inline_placeholder : 'ROoubGB14JM0hUXl',
			lang_code : 'wIhjzyc5WDHmFd8K',
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
				max_id : 49,
			),
			color : $client->peerColor(
				color : 14,
				background_emoji_id : -6478431792098624605,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : 3225776619778982298,
			),
			bot_active_users : 29,
			bot_verification_icon : 6479306599386773741,
			send_paid_messages_stars : -2922497736450102100,
		),
	),
);
```