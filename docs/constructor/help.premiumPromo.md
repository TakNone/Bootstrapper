# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 216

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
	status_text : 'VNBgXo6G9Lr1b5tH',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 48,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 33,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 3,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 22,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 87,
			language : 'YxpndVOItBDz3wAW',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 89,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : 6233304731788907505,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 36,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 25,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 56,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : 5189032514562260999,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 18,
		),
	),
	video_sections : array('7sMxwAlp4mUh3o0D'),
	videos : array(
		$client->documentEmpty(
			id : -4018409945613035091,
		),
		$client->document(
			id : -4234513833116588279,
			access_hash : -7157005637159912476,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 95,
			mime_type : '71qkTRnUcImoDN4X',
			size : -4837431738312012309,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'nqwmW4B8E3h1OoXL',
				),
				$client->photoSize(
					type : '4h2YNrP9lEqVfLay',
					w : 32,
					h : 27,
					size : 74,
				),
				$client->photoCachedSize(
					type : 'JzGoOh3CwQgn6xjr',
					w : 42,
					h : 35,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'Cq4wAdy3m1FftlLb',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'Mx0pBItvawz39AJG',
					w : 67,
					h : 5,
					sizes : array(82),
				),
				$client->photoPathSize(
					type : '0NZMV6BU9S4bFGKh',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'CbI9OFQwHLy0xl3J',
					w : 77,
					h : 34,
					size : 2,
					video_start_ts : -256072.7158203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -9100603218000957240,
					background_colors : array(91),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(...),
					sticker_id : 3190006033601641965,
					background_colors : array(78),
				),
			),
			dc_id : 4,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 86,
					h : 68,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '9DiNzxvE1wCktOg4',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 527367.177734375,
					w : 40,
					h : 75,
					preload_prefix_size : 82,
					video_start_ts : 468213.091796875,
					video_codec : '8wDYFef27PhoriCm',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 19,
					title : 'ZjEX8Lih0StswRp2',
					performer : 'WTL3puafwAdrFmg4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'sMR0mHqQJTPhVrCG',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'XGQc4dMYsUb7eNvJ',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'kyJwHQRmlKr8n9DG',
			months : 60,
			currency : '8dyPzO3unehAYjsc',
			amount : -6551991533692888547,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'BsP7cxXr5WbCDwfo',
		),
	),
	users : array(
		$client->userEmpty(
			id : -6998930019879422876,
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
			id : 3453480273575963538,
			access_hash : -4462079535510082850,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oYhzOLIa749sWFGV',
					reason : 'i0y2MmotNUDqWalf',
					text : 'j3LWPh7r98DewgFi',
				),
			),
			bot_inline_placeholder : 'zUqvY35lK4wOArdi',
			lang_code : 'U1gRjLq9mEBzcfJN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 99,
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 2723030229819807145,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -45158534505369281,
			),
			bot_active_users : 86,
			bot_verification_icon : 2485350868349187454,
			send_paid_messages_stars : 4333284680788141993,
		),
	),
);
```