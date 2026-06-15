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
	status_text : 'CsHlYibRZocJqO8I',
	status_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 68,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 73,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 22,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 54,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 5,
			language : 'x9OhGwiyPZd6bDNm',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 10,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : 8377462497455358776,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 37,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 50,
			document_id : 4085070223198285458,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 86,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 6,
			date : 64,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 13,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 54,
			old_text : '5wEhIym4sRY0ofKd',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 67,
		),
	),
	video_sections : array('MBJUxZHCFlvm78GX'),
	videos : array(
		$client->documentEmpty(
			id : -4829233971240333033,
		),
		$client->document(
			id : 6071869949628711123,
			access_hash : 7682107096720244918,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 98,
			mime_type : 'uGeEJ2bHo9xI8s7w',
			size : 9221156164066575565,
			thumbs : array(
				$client->photoSizeEmpty(
					type : 'cGXwh4gCtQsnIOy1',
				),
				$client->photoSize(
					type : 'asxdUYMXD6mWEv21',
					w : 22,
					h : 43,
					size : 74,
				),
				$client->photoCachedSize(
					type : 'MuAbjdvLmC7VJXgS',
					w : 92,
					h : 88,
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoStrippedSize(
					type : 'JfXytHrDY7hKvzcl',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->photoSizeProgressive(
					type : 'S7J0t8PMnDa6umfX',
					w : 44,
					h : 34,
					sizes : array(6),
				),
				$client->photoPathSize(
					type : 'T8YWAf1SFrBvn6Mj',
					bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
			video_thumbs : array(
				$client->videoSize(
					type : 'NdqFBgUljuE3TD8P',
					w : 87,
					h : 7,
					size : 17,
					video_start_ts : 770702.0908203125,
				),
				$client->videoSizeEmojiMarkup(
					emoji_id : -6964908450728591784,
					background_colors : array(52),
				),
				$client->videoSizeStickerMarkup(
					stickerset : $client->inputStickerSetEmpty(),
					sticker_id : -2360095923397664076,
					background_colors : array(50),
				),
			),
			dc_id : 55,
			attributes : array(
				$client->documentAttributeImageSize(
					w : 13,
					h : 46,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'IxGahgfHO0Mv17XL',
					stickerset : $client->inputStickerSetEmpty(),
					mask_coords : $client->maskCoords(
						n : 24,
						x : -1326552.7373046875,
						y : 605448.0751953125,
						zoom : -1810392.4677734375,
					),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -522501.2685546875,
					w : 51,
					h : 7,
					preload_prefix_size : 27,
					video_start_ts : -600065.7509765625,
					video_codec : '0U2G5xXPYIOARSk9',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 2,
					title : '0lhBaSRkf9nFXATp',
					performer : 'QGUX6kTPf9rjvhF3',
					waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->documentAttributeFilename(
					file_name : '1iMBnsNyGeftXzgF',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'q0rOvZI3jcY4GsH9',
					stickerset : $client->inputStickerSetEmpty(),
				),
			),
		),
	),
	period_options : array(
		$client->premiumSubscriptionOption(
			current : true,
			can_purchase_upgrade : true,
			transaction : 'egD5jRSn0koOutfh',
			months : 86,
			currency : 'zvwnKUScIyHNmPrb',
			amount : -3594730002134707903,
			bot_url : 'https://docs.liveproto.dev',
			store_product : 'aGOjQ2IdrTpDnZBh',
		),
	),
	users : array(
		$client->userEmpty(
			id : 8135467490495650770,
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
			id : -3760943639663277688,
			access_hash : 3060000567375382352,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Wc6OJ8hujz2ok3ZQ',
					reason : 'PHieuyUANxnYMWJO',
					text : 'IJlXMsVp3zexqCyW',
				),
			),
			bot_inline_placeholder : '5T02oZSPnvtMcrlE',
			lang_code : 'xnCve8GOuNQVci6W',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -1562496340435073436,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : 7267099287573309069,
			),
			bot_active_users : 27,
			bot_verification_icon : -4179176831387643595,
			send_paid_messages_stars : 5319713265510095853,
		),
	),
);
```