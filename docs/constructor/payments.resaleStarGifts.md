# payments.resaleStarGifts

**Description** : *List of gifts currently on resale &raquo;*

**Layer** : 218

```tl
payments.resaleStarGifts#947a12df flags:# count:int gifts:Vector<StarGift> next_offset:flags.0?string attributes:flags.1?Vector<StarGiftAttribute> attributes_hash:flags.1?long chats:Vector<Chat> counters:flags.2?Vector<StarGiftAttributeCounter> users:Vector<User> = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>gifts</mark> | [`Vector<StarGift>`](type/StarGift) | Collectible gifts on resale (may be less than count, in which case next_offset will be set) |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination, pass this to payments.getResaleStarGifts.offset to fetch the next results |
| **attributes** | [`flags.1?Vector<StarGiftAttribute>`](type/StarGiftAttribute) | Possible gift attributes, only set if payments.getResaleStarGifts.attributes_hash is set (on the first call, it must be equal to 0) |
| **attributes_hash** | [`flags.1?long`](type/long) | Hash of the attributes field, pass this to payments.getResaleStarGifts.attributes_hash to avoid returning any attributes (flag not set) if they haven't changed |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the attributes |
| **counters** | [`flags.2?Vector<StarGiftAttributeCounter>`](type/StarGiftAttributeCounter) | Indicates the total number of gifts that have a specific attribute, only set if payments.getResaleStarGifts.offset is empty (since this field is not related to the current result page but to all of them, it's only returned on the first page) |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the attributes |

---

## Type

[payments.ResaleStarGifts](type/payments.ResaleStarGifts)

---

## Example

```php
$paymentsResaleStarGifts = $client->payments->resaleStarGifts(
	count : 58,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			can_upgrade : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : -6921861388307009752,
			sticker : $client->documentEmpty(
				id : -3111606248223130719,
			),
			stars : 2450910950217866621,
			availability_remains : 55,
			availability_total : 13,
			availability_resale : 5536880338565623136,
			convert_stars : -7367636973561878236,
			first_sale_date : 52,
			last_sale_date : 74,
			upgrade_stars : -3255522147810350327,
			resell_min_stars : 8597825154291221678,
			title : 'lZXUoSuGy8w5IAOj',
			released_by : $client->peerUser(
				user_id : 7602475091799826101,
			),
			per_user_total : 81,
			per_user_remains : 77,
			locked_until_date : 98,
			auction_slug : 'ao70hnFtwZ532VKs',
			gifts_per_round : 34,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			id : -1299073721882827024,
			gift_id : 3860693230844200592,
			title : 'YWMJbelDPKNROdzc',
			slug : 'MFjXGWADNdJk95g7',
			num : 25,
			owner_id : $client->peerUser(
				user_id : 4886325983893287106,
			),
			owner_name : 'fBe9bu8USRO2rk7o',
			owner_address : '0Zw3frd2eFi7jAPl',
			attributes : array(
				$client->starGiftAttributeModel(
					name : 'cVvh7oSkBNQjO16C',
					document : $client->documentEmpty(
						id : 2633923849626509820,
					),
					rarity_permille : 42,
				),
				$client->starGiftAttributePattern(
					name : 'e81LztfXVBaYU9Eq',
					document : $client->documentEmpty(
						id : -2812373607589134727,
					),
					rarity_permille : 21,
				),
				$client->starGiftAttributeBackdrop(
					name : 'Y9zyuJkCSwFKBi6g',
					backdrop_id : 93,
					center_color : 65,
					edge_color : 62,
					pattern_color : 48,
					text_color : 27,
					rarity_permille : 51,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : 893711741274409107,
					),
					recipient_id : $client->peerUser(
						user_id : -9128778288745877666,
					),
					date : 60,
					message : $client->textWithEntities(
						text : 'NfZi1pMGlvOU8Pgu',
						entities : array(
							$client->messageEntityUnknown(...),
							$client->messageEntityMention(...),
							$client->messageEntityHashtag(...),
							$client->messageEntityBotCommand(...),
							$client->messageEntityUrl(...),
							$client->messageEntityEmail(...),
							$client->messageEntityBold(...),
							$client->messageEntityItalic(...),
							$client->messageEntityCode(...),
							$client->messageEntityPre(...),
							$client->messageEntityTextUrl(...),
							$client->messageEntityMentionName(...),
							$client->inputMessageEntityMentionName(...),
							$client->messageEntityPhone(...),
							$client->messageEntityCashtag(...),
							$client->messageEntityUnderline(...),
							$client->messageEntityStrike(...),
							$client->messageEntityBankCard(...),
							$client->messageEntitySpoiler(...),
							$client->messageEntityCustomEmoji(...),
							$client->messageEntityBlockquote(...),
						),
					),
				),
			),
			availability_issued : 35,
			availability_total : 56,
			gift_address : 'cEwNAz2CFHy3qihQ',
			resell_amount : array(
				$client->starsAmount(
					amount : -2599660032695750887,
					nanos : 12,
				),
				$client->starsTonAmount(
					amount : -2575948338226942280,
				),
			),
			released_by : $client->peerUser(
				user_id : -2735986476614192599,
			),
			value_amount : 6059693514487372504,
			value_currency : 'Lm3W4Cftr60GYNDq',
			theme_peer : $client->peerUser(
				user_id : -5023406870052949105,
			),
			peer_color : $client->peerColor(
				color : 77,
				background_emoji_id : 3405971912481574193,
			),
			host_id : $client->peerUser(
				user_id : 8739856559594779578,
			),
		),
	),
	next_offset : 'l8mpwUSs4EtoVM1z',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'VNE81fbKC39rI6vU',
			document : $client->documentEmpty(
				id : 6820817313951403959,
			),
			rarity_permille : 13,
		),
		$client->starGiftAttributePattern(
			name : 'VOzLErifmo6skbuY',
			document : $client->documentEmpty(
				id : -3631942030370552798,
			),
			rarity_permille : 69,
		),
		$client->starGiftAttributeBackdrop(
			name : '2Me1aKshbLOAnlcY',
			backdrop_id : 29,
			center_color : 92,
			edge_color : 19,
			pattern_color : 42,
			text_color : 86,
			rarity_permille : 60,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -1868319894831541248,
			),
			recipient_id : $client->peerUser(
				user_id : -4712694712401298061,
			),
			date : 40,
			message : $client->textWithEntities(
				text : 'dXQ8OZcjIyx4PL1B',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 3,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 37,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 69,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 66,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 74,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 67,
						language : 'w9n4T12XSBPsFdfJ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 41,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : -4816145696520374958,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 6,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 19,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 79,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 58,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : -2844715407236492706,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 96,
					),
				),
			),
		),
	),
	attributes_hash : 5610081089743891424,
	chats : array(
		$client->chatEmpty(
			id : -2558953741553987701,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2871933429633327797,
			title : 'mPSwjdNHUEaTuf29',
			photo : $client->chatPhotoEmpty(),
			participants_count : 3,
			date : 23,
			version : 20,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 11,
			),
		),
		$client->chatForbidden(
			id : 8536714459242183585,
			title : 'jn0MwqltD6HBh9ua',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 1665349648756753475,
			access_hash : -5104888839795132004,
			title : 'l3n9SgJQwA5ZIv8K',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Jm8VOqau1hSFLsd0',
					reason : 'mT8exLaHyzqujF0w',
					text : 'ZvAD6Ijp8VcwSQTu',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 26,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 27,
			),
			participants_count : 51,
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
				color : 17,
				background_emoji_id : 7619490122831095824,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : -8571854400103373508,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 9,
			subscription_until_date : 61,
			bot_verification_icon : -3913231295951238902,
			send_paid_messages_stars : 785565365187558621,
			linked_monoforum_id : -7425621190615345624,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1057863179202264965,
			access_hash : -9217197341397226046,
			title : 'CdHr6ADLw2xO9IFq',
			until_date : 63,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 5725268613436048308,
			),
			count : 19,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8850149433381977792,
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
			id : -580361789939779341,
			access_hash : 590343933867169662,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ys6byUGz2JoVgd1p',
					reason : 'hgvpejAJMHtyIRQX',
					text : 'ncqlAK9WRPB7DCix',
				),
			),
			bot_inline_placeholder : 'APmkrXcOMGWExvYh',
			lang_code : 'E5lxPDb6rLo9W7ZM',
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
				max_id : 21,
			),
			color : $client->peerColor(
				color : 98,
				background_emoji_id : 7146799837635512346,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 1231252487008996344,
			),
			bot_active_users : 67,
			bot_verification_icon : 3978142204473821455,
			send_paid_messages_stars : 6114411746389161884,
		),
	),
);
```