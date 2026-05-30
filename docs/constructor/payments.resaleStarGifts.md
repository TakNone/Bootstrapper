# payments.resaleStarGifts

**Description** : *List of gifts currently on resale &raquo;*

**Layer** : 222

```tl
payments.resaleStarGifts#947a12df flags:# count:int gifts:Vector<StarGift> next_offset:flags.0?string attributes:flags.1?Vector<StarGiftAttribute> attributes_hash:flags.1?long chats:Vector<Chat> counters:flags.2?Vector<StarGiftAttributeCounter> users:Vector<User> = payments.ResaleStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 7,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : -5291688737223772970,
			sticker : $client->documentEmpty(
				id : 587216009401988164,
			),
			stars : 3004156978121732553,
			availability_remains : 11,
			availability_total : 17,
			availability_resale : 5165720532895173685,
			convert_stars : -1277459524647051484,
			first_sale_date : 42,
			last_sale_date : 5,
			upgrade_stars : 6749493217608458983,
			resell_min_stars : 8918699612189544481,
			title : 'XGQDB7dHSEcO8kfu',
			released_by : $client->peerUser(
				user_id : 8136538439064091415,
			),
			per_user_total : 26,
			per_user_remains : 89,
			locked_until_date : 56,
			auction_slug : 'zBsOWkTaqLDc9mC7',
			gifts_per_round : 36,
			auction_start_date : 81,
			upgrade_variants : 69,
			background : $client->starGiftBackground(
				center_color : 32,
				edge_color : 36,
				text_color : 42,
			),
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			burned : true,
			crafted : true,
			id : -3458720451194483190,
			gift_id : -6230435573939304698,
			title : '5iR0UjL1yqAX4hZv',
			slug : 'RhNIisK85CTJH4g7',
			num : 18,
			owner_id : $client->peerUser(
				user_id : -8525490675089495956,
			),
			owner_name : 'LTanQ2xpIm3AwRyv',
			owner_address : 'EcKYXxPthLM38Rok',
			attributes : array(
				$client->starGiftAttributeModel(
					crafted : true,
					name : 'QDMIA5VcpHqh4JsL',
					document : $client->documentEmpty(
						id : -1844454474745445224,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 90,
					),
				),
				$client->starGiftAttributePattern(
					name : 'fZT5HSYhcqdGXDtv',
					document : $client->documentEmpty(
						id : -4642795937895291333,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 65,
					),
				),
				$client->starGiftAttributeBackdrop(
					name : 'kiWpxVafDCPKHOBo',
					backdrop_id : 24,
					center_color : 59,
					edge_color : 82,
					pattern_color : 37,
					text_color : 83,
					rarity : $client->starGiftAttributeRarity(
						permille : 31,
					),
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : 5565380188368702522,
					),
					recipient_id : $client->peerUser(
						user_id : 6103161715715219041,
					),
					date : 41,
					message : $client->textWithEntities(
						text : 'yjTaPNQgr4b2ZCSB',
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
			availability_issued : 72,
			availability_total : 79,
			gift_address : 'YZaQGEV6sX10xWuo',
			resell_amount : array(
				$client->starsAmount(
					amount : -5680343826484784156,
					nanos : 65,
				),
				$client->starsTonAmount(
					amount : -3199742758693226644,
				),
			),
			released_by : $client->peerUser(
				user_id : -2819055531586389067,
			),
			value_amount : -8215799794417435005,
			value_currency : 'YNou8BmcHhRfLzs4',
			value_usd_amount : 5326774936204056683,
			theme_peer : $client->peerUser(
				user_id : 1585620225976438740,
			),
			peer_color : $client->peerColor(
				color : 13,
				background_emoji_id : -8631636477222781803,
			),
			host_id : $client->peerUser(
				user_id : 4261972796703746048,
			),
			offer_min_stars : 88,
			craft_chance_permille : 32,
		),
	),
	next_offset : 'yIwQENMOLDtrYzvj',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'RqBInSx9VZk52NEu',
			document : $client->documentEmpty(
				id : 2073561871666818129,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 31,
			),
		),
		$client->starGiftAttributePattern(
			name : 'rlGq5HJ0hn8TECYb',
			document : $client->documentEmpty(
				id : -686801302458020375,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 31,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : '0bDoINyt3hTknzMa',
			backdrop_id : 16,
			center_color : 92,
			edge_color : 2,
			pattern_color : 37,
			text_color : 58,
			rarity : $client->starGiftAttributeRarity(
				permille : 63,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7567288677247649756,
			),
			recipient_id : $client->peerUser(
				user_id : 1543838877313003325,
			),
			date : 40,
			message : $client->textWithEntities(
				text : 'e2ugpVxXc5LqHAK6',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 88,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 27,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 47,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 47,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 78,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 10,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 79,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 24,
						language : 'de9ahOviVRwDHNtC',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : -1429607551567377182,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 35,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 32,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 72,
						document_id : -3602498549558675020,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
				),
			),
		),
	),
	attributes_hash : -3015544322221584759,
	chats : array(
		$client->chatEmpty(
			id : -2977336241715633450,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5179148680111422672,
			title : 'ab1RI6HSF7xouOBq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 97,
			date : 27,
			version : 49,
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
				until_date : 53,
			),
		),
		$client->chatForbidden(
			id : 6168950255607949162,
			title : 'k03YZi9yKJ2XqTSw',
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
			id : -8458719430476695072,
			access_hash : 2299874501422091970,
			title : 'd1REnAzLZW48aMIw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XWHcaOK8sjpReovN',
					reason : 'oJ89pnsIeZTFyuE1',
					text : 'xIB7EqW5vCZX0ftQ',
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
				until_date : 6,
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
				until_date : 97,
			),
			participants_count : 0,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 79,
			),
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 3875065468793645063,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 3075763958198908533,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 32,
			bot_verification_icon : -262422466048565949,
			send_paid_messages_stars : 2583241308927708615,
			linked_monoforum_id : 6679536213627041831,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 2943430697517737703,
			access_hash : -6770341303966989193,
			title : 'M2isEO973DLyfzc8',
			until_date : 29,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 3909800108735896798,
			),
			count : 45,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1302196885806539855,
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
			id : -1036283248452800429,
			access_hash : 7058312679921781313,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lDZaS9T4Y6ogL0Fk',
					reason : 'xJhL4w0IT7t9m3zF',
					text : 'qzTyxnwU0EXusgar',
				),
			),
			bot_inline_placeholder : 'aSZUje8bzFOuC6l1',
			lang_code : '3tyH6v1kGmxSgTB9',
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
				max_id : 16,
			),
			color : $client->peerColor(
				color : 73,
				background_emoji_id : -3119370193915444485,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : 2313408462125904748,
			),
			bot_active_users : 41,
			bot_verification_icon : -2260202515076658310,
			send_paid_messages_stars : 7754136792528588261,
		),
	),
);
```