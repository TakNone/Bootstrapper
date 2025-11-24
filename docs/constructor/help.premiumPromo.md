# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 218

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
	status_text : 'IirKknY4OXBw7Qgc',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 96,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 32,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 12,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 36,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 76,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 63,
			language : 'ZEdwNa0cHujDImo7',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : 671115540713102331,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 15,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 86,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 31,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 53,
			document_id : -4853749394611115152,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
	video_sections : array('sBpH7Fej1DklPV2A'),
	videos : array(
		$client->documentEmpty(
			id : -8892907835941668766,
		),
		$client->document(
			id : 9017165756556542121,
			access_hash : -2561153677960337375,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 88,
			mime_type : '9SeotWvmsZ1JckRI',
			size : -3204337928531943525,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'bEAKQYOi9U1nzkyN',
				),
				$client->photoSize(
					type : '6PabIYHlkjgtZevK',
					w : 94,
					h : 64,
					size : 61,
				),
				$client->photoCachedSize(
					type : 'TgKc4sqWarewDVIb',
					w : 15,
					h : 50,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'geB5RZDlpqT2hOb3',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ybj8FZCTVnkBlNUg',
					w : 60,
					h : 78,
					sizes : array(90),
				),
				$client->photoPathSize(
					type : '9iUzhCrXw6s3aZmd',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : '1bKGvCWwtlVFe7OH',
					w : 81,
					h : 21,
					size : 50,
					video_start_ts : 1890238.6162109375,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -8906384422113353103,
					background_colors : array(54),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -4623035332177109333,
					background_colors : array(29),
				),
			),
			dc_id : 53,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 62,
					h : 30,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '4NmRnAszXhFJebjT',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 18,
						x : -342254.8759765625,
						y : -472814.2451171875,
						zoom : 1047839.2509765625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -326490.076171875,
					w : 49,
					h : 76,
					preload_prefix_size : 68,
					video_start_ts : -678551.6494140625,
					video_codec : 'PZNi60ascLCV7HR4',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 21,
					title : 'nBr6fAW8avbhi5qJ',
					performer : 'MvCxLjkDIAnViuR4',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '6ZHr5pstoTDwhdxv',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'fKFhY85Z4rHcVkBX',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'HwF8loYJgc56fLO2',
			months : 67,
			currency : 'tEZGDoNrgeW1OQX9',
			amount : 1718970061759323154,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'TVzGsm03lpYPQgnf',
		),
	),
	users : array(
		$client->userEmpty(
			id : -7962694027181701109,
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
			id : -8514671777011222358,
			access_hash : -9056163139452462072,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IDcx3vTE8g52jwVF',
					reason : 'lv8PqJYe7IxEQrWL',
					text : '7doE4Xxzmtg6PGCj',
				),
			),
			bot_inline_placeholder : 'VbcAyWImxuQ084S6',
			lang_code : 'nGBYSHQ54z7eyip6',
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
				max_id : 68,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -9026918559412732686,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -7922690806019360575,
			),
			bot_active_users : 98,
			bot_verification_icon : 2863257129538015942,
			send_paid_messages_stars : 994324007269973654,
		),
	),
);
```