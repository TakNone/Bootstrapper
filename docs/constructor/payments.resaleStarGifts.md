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
	count : 82,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : 9076940292309845763,
			sticker : $client->documentEmpty(
				id : -1048895691144666515,
			),
			stars : 7315282746364897486,
			availability_remains : 73,
			availability_total : 93,
			availability_resale : -3841402247286604473,
			convert_stars : -4621758884707379642,
			first_sale_date : 21,
			last_sale_date : 95,
			upgrade_stars : 2774249195127391444,
			resell_min_stars : -7828969998033519889,
			title : 'G8SW05pPR3Nc4ZuB',
			released_by : $client->peerUser(
				user_id : -2022472417742000684,
			),
			per_user_total : 50,
			per_user_remains : 3,
			locked_until_date : 24,
			auction_slug : 'HOgGVquKLp4krJME',
			gifts_per_round : 96,
			auction_start_date : 62,
			upgrade_variants : 27,
			background : $client->starGiftBackground(
				center_color : 32,
				edge_color : 76,
				text_color : 36,
			),
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			burned : true,
			crafted : true,
			id : 9217442932577247784,
			gift_id : 8087858945941774223,
			title : 'BsHzaCY0Zln95OIj',
			slug : '8oZHBCcMrQpjU35D',
			num : 44,
			owner_id : $client->peerUser(
				user_id : 248878382968172811,
			),
			owner_name : 'BVrIQSXZmA90dCo7',
			owner_address : 'rBg0cyzhAUXMZosT',
			attributes : array(
				$client->starGiftAttributeModel(
					crafted : true,
					name : 'MYFXd2BCvyP5NT0D',
					document : $client->documentEmpty(
						id : -7091938746466769728,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 80,
					),
				),
				$client->starGiftAttributePattern(
					name : '3yVnBEm2DAk5jpG8',
					document : $client->documentEmpty(
						id : -3883076311298349758,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 28,
					),
				),
				$client->starGiftAttributeBackdrop(
					name : '5fblcSwCKuPq6thB',
					backdrop_id : 15,
					center_color : 87,
					edge_color : 69,
					pattern_color : 26,
					text_color : 77,
					rarity : $client->starGiftAttributeRarity(
						permille : 17,
					),
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : -4100502741770814991,
					),
					recipient_id : $client->peerUser(
						user_id : -6669976355223536649,
					),
					date : 70,
					message : $client->textWithEntities(
						text : 'kShTO1b8W4ZnQywD',
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
			availability_issued : 64,
			availability_total : 27,
			gift_address : '1fXgODaKk9CxUNdi',
			resell_amount : array(
				$client->starsAmount(
					amount : 1476777679745657458,
					nanos : 65,
				),
				$client->starsTonAmount(
					amount : 4399136295163391008,
				),
			),
			released_by : $client->peerUser(
				user_id : 1966710739279530740,
			),
			value_amount : -5132686246057705933,
			value_currency : 'o6tLRAVDHPpZK3iO',
			value_usd_amount : 7764446408631381302,
			theme_peer : $client->peerUser(
				user_id : 7413303072439599540,
			),
			peer_color : $client->peerColor(
				color : 62,
				background_emoji_id : -3730710445554519609,
			),
			host_id : $client->peerUser(
				user_id : -6763043296432737209,
			),
			offer_min_stars : 33,
			craft_chance_permille : 34,
		),
	),
	next_offset : 'nvwEhN2rZfYMHJWR',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'OyaHsejrToxnPcpI',
			document : $client->documentEmpty(
				id : 5864969186795163951,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 75,
			),
		),
		$client->starGiftAttributePattern(
			name : 'DtguIlRCQipH6B1Y',
			document : $client->documentEmpty(
				id : -4952921137629536351,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 71,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'WMqUa752hcKxLOXI',
			backdrop_id : 83,
			center_color : 82,
			edge_color : 60,
			pattern_color : 65,
			text_color : 78,
			rarity : $client->starGiftAttributeRarity(
				permille : 1,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 6272676386477509841,
			),
			recipient_id : $client->peerUser(
				user_id : -341600256075596035,
			),
			date : 56,
			message : $client->textWithEntities(
				text : 'mTEtdSA2qf4BF96K',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 9,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 17,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 64,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 24,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 22,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 84,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 94,
						language : 'i6LYbM1Dty9B4prx',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 52,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : -8894879320693712021,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 22,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 16,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 73,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 10,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 38,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 52,
						document_id : 7797961439292385013,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 29,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 89,
						date : 63,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 94,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 29,
						old_text : '1oiWGdUOy9H0tLF8',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 91,
					),
				),
			),
		),
	),
	attributes_hash : 4389011747050069882,
	chats : array(
		$client->chatEmpty(
			id : 7732350370203209786,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2991816655822182285,
			title : 'cf76GpwBIdYVaSMA',
			photo : $client->chatPhotoEmpty(),
			participants_count : 29,
			date : 34,
			version : 69,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : 5957864415482726786,
			title : 'tZjmqoDf7UxNOVIG',
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
			id : 3725795660609177621,
			access_hash : -4776436363291568304,
			title : '3pBHj50tsVwOWr47',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yB4l8NTVHXRj3Lra',
					reason : 'tGEvWoCymzaTqH8b',
					text : 'oyZuQYgpPNW51nzJ',
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
				until_date : 36,
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
				until_date : 84,
			),
			participants_count : 44,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 64,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : 9133719473296839661,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 5680041368784001774,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 60,
			subscription_until_date : 98,
			bot_verification_icon : 2163507294236961608,
			send_paid_messages_stars : 1203950034328241374,
			linked_monoforum_id : 3433765085370497583,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 7050144280736270226,
			access_hash : 6039486961195436745,
			title : '6iv3IVBo52whJnHg',
			until_date : 29,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 1223496544054038185,
			),
			count : 7,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8205620873877090384,
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
			id : -8398832801724528730,
			access_hash : 5866645555415504524,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nawHVOZCQ1SoB0hj',
					reason : 'RckVrEhbu6YTSL8H',
					text : 'jIEAGdsHUhxCDeBR',
				),
			),
			bot_inline_placeholder : 'U3bYn1lQh4y5PHmR',
			lang_code : 'ZP2isgLoSyleOmw6',
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
				max_id : 66,
			),
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -8767681741819676008,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : 6111850368276007037,
			),
			bot_active_users : 81,
			bot_verification_icon : -814475046350351116,
			send_paid_messages_stars : -7714500632660402813,
		),
	),
);
```