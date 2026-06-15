# payments.resaleStarGifts

**Description** : *List of gifts currently on resale &raquo;*

**Layer** : 227

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
	count : 97,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : -584459313687659166,
			sticker : $client->documentEmpty(
				id : -1440089613266106983,
			),
			stars : 583300495873610714,
			availability_remains : 61,
			availability_total : 30,
			availability_resale : 5522021880101754495,
			convert_stars : -5604037858724930532,
			first_sale_date : 43,
			last_sale_date : 73,
			upgrade_stars : 3389063845805799107,
			resell_min_stars : -5795279722808237961,
			title : 'T4kjoV2r6MQdvlgt',
			released_by : $client->peerUser(
				user_id : -190548337080187323,
			),
			per_user_total : 31,
			per_user_remains : 55,
			locked_until_date : 6,
			auction_slug : '2osB6T9xMYtNZ45w',
			gifts_per_round : 55,
			auction_start_date : 45,
			upgrade_variants : 73,
			background : $client->starGiftBackground(
				center_color : 74,
				edge_color : 0,
				text_color : 20,
			),
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			burned : true,
			crafted : true,
			id : -4992601182066742719,
			gift_id : -5885990951767609878,
			title : 'ZIPgiASGpnx07C6y',
			slug : 'VwGxyszTHAYchBRb',
			num : 99,
			owner_id : $client->peerUser(
				user_id : -8666620001218075992,
			),
			owner_name : '6eBm49uXiCW7NpKS',
			owner_address : 'Dr7NK6A9Ys8HnbMQ',
			attributes : array(
				$client->starGiftAttributeModel(
					crafted : true,
					name : 'lOR9gB0QjFNyLYzu',
					document : $client->documentEmpty(
						id : 4031780432033353840,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 84,
					),
				),
				$client->starGiftAttributePattern(
					name : 'w58vDiR2uVnAU71F',
					document : $client->documentEmpty(
						id : -5097689908902972985,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 55,
					),
				),
				$client->starGiftAttributeBackdrop(
					name : 'Jdtlou9rA4f0EG3X',
					backdrop_id : 66,
					center_color : 97,
					edge_color : 10,
					pattern_color : 31,
					text_color : 9,
					rarity : $client->starGiftAttributeRarity(
						permille : 68,
					),
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : 4216155009524137909,
					),
					recipient_id : $client->peerUser(
						user_id : -8419455848096259476,
					),
					date : 57,
					message : $client->textWithEntities(
						text : 'ygCdSaQvYW0pG56e',
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
					),
				),
			),
			availability_issued : 17,
			availability_total : 66,
			gift_address : 'HN60I7YxFRUqirV5',
			resell_amount : array(
				$client->starsAmount(
					amount : -6048465589912483609,
					nanos : 89,
				),
				$client->starsTonAmount(
					amount : -1620387535082028844,
				),
			),
			released_by : $client->peerUser(
				user_id : 3672756117943924846,
			),
			value_amount : -5524701730437083665,
			value_currency : 'GRCUlvA3M2eZ4zxb',
			value_usd_amount : 6639640531919298598,
			theme_peer : $client->peerUser(
				user_id : -4535592579729315884,
			),
			peer_color : $client->peerColor(
				color : 65,
				background_emoji_id : 141953205336880200,
			),
			host_id : $client->peerUser(
				user_id : 4401528120908521441,
			),
			offer_min_stars : 99,
			craft_chance_permille : 38,
		),
	),
	next_offset : 'M9wOLSh3FsUCrnIZ',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'zKnBoyc3A2ebJX86',
			document : $client->documentEmpty(
				id : 2719157954151043728,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 94,
			),
		),
		$client->starGiftAttributePattern(
			name : 'mzBxnosIrC92uOtV',
			document : $client->documentEmpty(
				id : 3832647915474485342,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 97,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'FZnUabMu63syHDxv',
			backdrop_id : 79,
			center_color : 21,
			edge_color : 25,
			pattern_color : 91,
			text_color : 44,
			rarity : $client->starGiftAttributeRarity(
				permille : 98,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -7367096198136301093,
			),
			recipient_id : $client->peerUser(
				user_id : -8085957968936874263,
			),
			date : 70,
			message : $client->textWithEntities(
				text : 'cIs8Mklvt49fFrQn',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 87,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 29,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 49,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 83,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 7,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 89,
						language : 'iN7ow1WPpxOhe9Zl',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 15,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : -4908998827386406046,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 72,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 52,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 43,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 79,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 75,
						document_id : -6992468917212271260,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 2,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 96,
						date : 35,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 16,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 85,
						old_text : 'x2K8QP9o5lJILAWg',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 9,
					),
				),
			),
		),
	),
	attributes_hash : -7587587817434466095,
	chats : array(
		$client->chatEmpty(
			id : -7872090742464020943,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 442775276790987203,
			title : 'ajzo8dktn9i2y5OM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 29,
			date : 44,
			version : 66,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 52,
			),
		),
		$client->chatForbidden(
			id : 6435214111128308302,
			title : '4Cl5qjZiXwuL1e73',
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
			id : 1853099247109648729,
			access_hash : 1162024426934899531,
			title : 'Mdr9qszcKLQe5wvC',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ygk3M54RrSVNDm8s',
					reason : 'qyXlNfsdenEzDw48',
					text : 'ZT80IrmckEbV1d7W',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 87,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 44,
			),
			participants_count : 91,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 43,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : 8623867746227206662,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 5950831462601278089,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 15,
			subscription_until_date : 7,
			bot_verification_icon : 4159297789957794263,
			send_paid_messages_stars : -863588022305224838,
			linked_monoforum_id : -7279397171246350975,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 8420688085791248353,
			access_hash : 8476079271609161388,
			title : 'iZGerlpj46PD9y5K',
			until_date : 2,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : -2687660829308864312,
			),
			count : 53,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6260258295754515455,
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
			id : 5899594305108180788,
			access_hash : -1980143125887151870,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Hbyex7SGpRdfgoLh',
					reason : 'yKlTN8ct7HdFswA6',
					text : '5k1RbNJm3UGg4IsD',
				),
			),
			bot_inline_placeholder : 'er7z4RFgJTn1swqN',
			lang_code : '7kH6mFUp5M1CTagW',
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
				color : 50,
				background_emoji_id : 8580573888448679763,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : -3996302952805923926,
			),
			bot_active_users : 90,
			bot_verification_icon : -1125443752794708099,
			send_paid_messages_stars : -1554822072277183926,
		),
	),
);
```