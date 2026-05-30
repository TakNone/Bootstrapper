# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 222

```tl
help.premiumPromo#5334759c status_text:string status_entities:Vector<MessageEntity> video_sections:Vector<string> videos:Vector<Document> period_options:Vector<PremiumSubscriptionOption> users:Vector<User> = help.PremiumPromo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>status_text</mark> | [`string`](type/string) | Description of the current state of the user's Telegram Premium subscription |
| <mark>status_entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>video_sections</mark> | [`Vector<string>`](type/string) | A list of premium feature identifiers », associated to each video |
| <mark>videos</mark> | [`Vector<Document>`](type/Document) | A list of videos |
| <mark>period_options</mark> | [`Vector<PremiumSubscriptionOption>`](type/PremiumSubscriptionOption) | Telegram Premium subscription options |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[help.PremiumPromo](type/help.PremiumPromo)

---

## Example

```php
$helpPremiumPromo = $client->help->premiumPromo(
	status_text : 'gIOUFJKbteVRc5EG',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 62,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 54,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 12,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 52,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 7,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 27,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 97,
			language : 'CENLarFgIh4qvluz',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 79,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : 1084627777729864708,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 72,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 58,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 58,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 90,
			document_id : 4414109790852273523,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 59,
		),
	),
	video_sections : array('dQvq4fi9H0V2NgmW'),
	videos : array(
		$client->documentEmpty(
			id : 2261473853433089325,
		),
		$client->document(
			id : 384860531222128513,
			access_hash : -2026348833353136953,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 35,
			mime_type : 'FJLgfspI2tYMclTr',
			size : -4873701610283431040,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'osqrhf3b7FKvVLMa',
				),
				$client->photoSize(
					type : 'HS0FfypToQ41OsAc',
					w : 48,
					h : 100,
					size : 65,
				),
				$client->photoCachedSize(
					type : 'NZ2XYsxrqUcSO9mz',
					w : 35,
					h : 3,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : '9bgIwLa5Jph8k0UO',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : '74kIDyotUacW5CrP',
					w : 33,
					h : 77,
					sizes : array(82),
				),
				$client->photoPathSize(
					type : '02DxOUaELbnKH3rl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '231zesGKSwQvO6Bi',
					w : 94,
					h : 10,
					size : 77,
					video_start_ts : 1173586.439453125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 5386842870783057696,
					background_colors : array(16),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -961974327712270141,
					background_colors : array(88),
				),
			),
			dc_id : 86,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 30,
					h : 86,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'yln2mHVqp89kXvAt',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 47,
						x : 152623.2880859375,
						y : 1668591.2626953125,
						zoom : 1269490.1669921875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 2082756.9814453125,
					w : 70,
					h : 4,
					preload_prefix_size : 2,
					video_start_ts : 48663.6259765625,
					video_codec : 'Dek1mOCjdGzu8NlJ',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 60,
					title : 'lZ0sRb3JVSUYk7fB',
					performer : 'o0m74hJNqkgi3RrH',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'sRYweJx6OGSZLEy3',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : '3XsaAGcEOF1dU6qQ',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'eT8BzjXnGav4ACQ0',
			months : 3,
			currency : 'NVkUsRXAeMiWdl2y',
			amount : -1086571370007597090,
			bot_url : 'https://docs.liveproto.dev',
			store_product : '7iD1tZ0FEvQ9dHsp',
		),
	),
	users : array(
		$client->userEmpty(
			id : 851698715311921718,
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
			id : 3702974231370193831,
			access_hash : 2022369945540161750,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'snjUGaZuYvCXAgRe',
					reason : 'bcA5nh0upQGmEB4V',
					text : '6zjwlf1uLshQZvAO',
				),
			),
			bot_inline_placeholder : 'OtLwKfeDRvEz3Zyx',
			lang_code : 'VKwriLCWeA08X6hQ',
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
				max_id : 84,
			),
			color : $client->peerColor(
				color : 90,
				background_emoji_id : -4709305272207217284,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 7622917036331257139,
			),
			bot_active_users : 84,
			bot_verification_icon : 7876591216847055295,
			send_paid_messages_stars : 3715536765437717319,
		),
	),
);
```