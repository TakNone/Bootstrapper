# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 227

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
	status_text : 'Nz7TRSQ0uIXJGxYr',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 25,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 4,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 33,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 44,
			language : 'P20kvTe1tfN7sbz5',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 70,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 77,
			user_id : -7356433104269583403,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 36,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 26,
			document_id : 3449453896098888092,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 25,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 5,
			date : 10,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 64,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 68,
			old_text : 'dIEh4NB5jbxuVUyQ',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 16,
		),
	),
	video_sections : array('UZLautv8B7pQAnIP'),
	videos : array(
		$client->documentEmpty(
			id : 5637179672036937305,
		),
		$client->document(
			id : 7320426972694423690,
			access_hash : 2409419348756612671,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 45,
			mime_type : 'eV23N89DXTtUhWck',
			size : -2636767185162944305,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'HljrdMcy3gTRkQ27',
				),
				$client->photoSize(
					type : 'VNh2KnWa5t3fskpv',
					w : 94,
					h : 6,
					size : 59,
				),
				$client->photoCachedSize(
					type : 'iygY5I6do1HW9erj',
					w : 69,
					h : 4,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'B3pJwFkNUmL0bP4T',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'wdq9s3ekTx1Sm4tu',
					w : 82,
					h : 37,
					sizes : array(95),
				),
				$client->photoPathSize(
					type : '46HfDMOvY5seKVpm',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'NfM9cvImplzj2xAH',
					w : 24,
					h : 32,
					size : 48,
					video_start_ts : -998578.900390625,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : 2676092830001476089,
					background_colors : array(75),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 6278137149600040842,
					background_colors : array(38),
				),
			),
			dc_id : 94,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 91,
					h : 60,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'TjAG8SZCJpI12a6m',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 0,
						x : -1059795.767578125,
						y : 1149069.1103515625,
						zoom : 417122.158203125,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : 988458.0078125,
					w : 31,
					h : 30,
					preload_prefix_size : 65,
					video_start_ts : 2053683.91015625,
					video_codec : 'MZXg4yArBTPvb7jH',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 54,
					title : 'iq3vS7TIVhrlfMBN',
					performer : 'ohbqscCTek937wXL',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : 'IH9SPjiDm5CAhZlW',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'BCnW4EFMPogqSN7i',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'Kq97iSyxkBPGOemV',
			months : 7,
			currency : 'Yymk32qzo6hxrR8F',
			amount : -6815950062925081719,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'eyr5PnpEaGINL3Zj',
		),
	),
	users : array(
		$client->userEmpty(
			id : -4579665790774003590,
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
			bot_guard : true,
			id : 4697923912451072761,
			access_hash : 4583647693528881838,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R6Hd0qL8fziSIZ9k',
					reason : 'AFIrX690udtEUlow',
					text : '5kUa71eBlqrH0CZG',
				),
			),
			bot_inline_placeholder : 'T264CHAIQZgJ5D7i',
			lang_code : 'JrehSRqU271Vb5zi',
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
				max_id : 83,
			),
			color : $client->peerColor(
				color : 29,
				background_emoji_id : 2680159492392922530,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : -1914083238590580823,
			),
			bot_active_users : 31,
			bot_verification_icon : -1764008339818772279,
			send_paid_messages_stars : -1585600605071526633,
		),
	),
);
```