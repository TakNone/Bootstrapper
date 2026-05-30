# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 225

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
	status_text : 'ZaP7seG9NqiuQ0Xt',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 92,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 94,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 59,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 26,
			language : '0jkhTiotxQXO5WBU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : 3134872345622219359,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 27,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 46,
			document_id : -8983323163181141313,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 76,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 18,
			date : 46,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 38,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 62,
			old_text : '6380qSHbJep9cfZI',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 87,
		),
	),
	video_sections : array('ryVjAluzshoSCPGM'),
	videos : array(
		$client->documentEmpty(
			id : 1135773718426744842,
		),
		$client->document(
			id : 1036597068768461324,
			access_hash : -5031274212759117295,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 95,
			mime_type : 'x7or3XnPUCIRYMtp',
			size : -5100889854838869445,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'uTELAVfj1ailx7d2',
				),
				$client->photoSize(
					type : 'k9IOPNFLxmsafKXR',
					w : 95,
					h : 24,
					size : 31,
				),
				$client->photoCachedSize(
					type : 'iLOkqvWlRsPQ2EAK',
					w : 93,
					h : 94,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'StzaW3Dq1bkijBsX',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'TFxwDn4H7QJOoMLf',
					w : 64,
					h : 60,
					sizes : array(44),
				),
				$client->photoPathSize(
					type : 'XAmNS5MR4rEwqcfo',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'SPKB3gsXlkcbqfrz',
					w : 75,
					h : 57,
					size : 42,
					video_start_ts : -454741.2060546875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6298309984831260202,
					background_colors : array(34),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -7457178832983301432,
					background_colors : array(93),
				),
			),
			dc_id : 92,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 27,
					h : 90,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'BrRQHfdnvozqN7tA',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 0,
						x : 591847.349609375,
						y : -1125416.0068359375,
						zoom : -149913.873046875,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 1828952.4814453125,
					w : 32,
					h : 33,
					preload_prefix_size : 92,
					video_start_ts : -375376.0302734375,
					video_codec : '6erHxQt3CKvhBcnl',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 29,
					title : '7xufr1XpIqUHBMTY',
					performer : '4bpXYlMesdt1v7kI',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'a32ScjmOTDQAugBw',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'Soedb70H8TsGUEac',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : '2Fa6y1jgSoPHl8uJ',
			months : 43,
			currency : 'ZJiQo6dOePn0Husc',
			amount : -3260741973724508789,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'lhasdZ8W4kzMSHD0',
		),
	),
	users : array(
		$client->userEmpty(
			id : 6424102513104078755,
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
			id : -4340257616579858904,
			access_hash : -3572097073539721172,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1tkTfBCqIucF38pM',
					reason : 'Kdg5EhQGeHTm7Jwc',
					text : '69hLkfDOyVdr1WG2',
				),
			),
			bot_inline_placeholder : 'NubZ9dpSGYOKfBRl',
			lang_code : 'Jri8mTv7F2fz6lOC',
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
				color : 19,
				background_emoji_id : 606749180399191696,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : -5266911241650868343,
			),
			bot_active_users : 31,
			bot_verification_icon : 7146014084273697322,
			send_paid_messages_stars : 8534438283004752429,
		),
	),
);
```