# help.premiumPromo

**Description** : *Telegram Premium promotion information*

**Layer** : 229

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
	status_text : 'YqxGnIRJi7kM1rAo',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 31,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 46,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 53,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 54,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 29,
			language : 'JQzMKqbEDSpXAUFk',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 27,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : 8068947462930286308,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 91,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 82,
			document_id : -1925002739597452312,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 3,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 51,
			date : 53,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 0,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 11,
			old_text : '08eihbUuWwRApa9r',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 80,
		),
	),
	video_sections : array('8B1nOzlUDMFm206j'),
	videos : array(
		$client->documentEmpty(
			id : -3417945538168304135,
		),
		$client->document(
			id : -497618960566465874,
			access_hash : 6400647096004982902,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 63,
			mime_type : 'NXBYwgdSo1bQ7kFM',
			size : -4506965869831252275,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'JOltPTkZex98afSG',
				),
				$client->photoSize(
					type : 'YZ4hljHFiuCTmMI9',
					w : 83,
					h : 99,
					size : 44,
				),
				$client->photoCachedSize(
					type : 'Fb5mEMazRXg2GWiv',
					w : 64,
					h : 21,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'DXjUQ58Z9cArxiz1',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'ELZtRNFWzVybkCdJ',
					w : 79,
					h : 12,
					sizes : array(71),
				),
				$client->photoPathSize(
					type : 'wOs96yie2ExZfLJq',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'sSEWzj4YiVc8kBDh',
					w : 47,
					h : 49,
					size : 63,
					video_start_ts : 1748257.1513671875,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -5644290076962976394,
					background_colors : array(96),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : 1735789481050810951,
					background_colors : array(83),
				),
			),
			dc_id : 3,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 74,
					h : 47,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : '36fhbrSY7N4pBF1I',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 61,
						x : -1599466.4599609375,
						y : -1920239.6982421875,
						zoom : 535043.7197265625,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -417640.8994140625,
					w : 23,
					h : 81,
					preload_prefix_size : 51,
					video_start_ts : 559323.80859375,
					video_codec : 'QGEdwCmo5jchJY0t',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 72,
					title : 'G13oxFNcY5P4jfny',
					performer : '49C7w3ip8SDzY0RH',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '3FXiVdZ8zf9E7A0u',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'WXxsg0mzDq5tMUGa',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'KB6V5SAu2wjmkFzG',
			months : 2,
			currency : 'C7GEZuqLl9AYTzK6',
			amount : 8156927640617114226,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'gfq3NXIe68pJADY1',
		),
	),
	users : array(
		$client->userEmpty(
			id : -5471043258941343849,
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
			id : -2116234215538040433,
			access_hash : 7374112656558095207,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QXy2VO3CzvB5khnE',
					reason : 'DbYRj1E64Wzt7d5A',
					text : 'JVjUluxMrYHqpKnO',
				),
			),
			bot_inline_placeholder : 'rlznL21Fv4SedT5o',
			lang_code : 'GxbhyZ8EM1RAdr9m',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 48,
				background_emoji_id : 259921919237526898,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : 8371047182526469997,
			),
			bot_active_users : 40,
			bot_verification_icon : 1834047151556600420,
			send_paid_messages_stars : -3012549148415056392,
			linked_community_id : 6180504261572350736,
		),
	),
);
```