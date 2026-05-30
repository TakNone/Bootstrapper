# payments.resaleStarGifts

**Description** : *List of gifts currently on resale &raquo;*

**Layer** : 225

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
	count : 95,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : 6085066648489791976,
			sticker : $client->documentEmpty(
				id : 4326579202955577661,
			),
			stars : -4008744767051370983,
			availability_remains : 89,
			availability_total : 86,
			availability_resale : 5470669412540096445,
			convert_stars : -979955299323202980,
			first_sale_date : 34,
			last_sale_date : 73,
			upgrade_stars : 7782952658996677334,
			resell_min_stars : -4405780808143203425,
			title : 'LKvyl8Cgs2WOrMqG',
			released_by : $client->peerUser(
				user_id : 4978592716300033980,
			),
			per_user_total : 84,
			per_user_remains : 89,
			locked_until_date : 90,
			auction_slug : 'eir14KVmsapQBSRE',
			gifts_per_round : 70,
			auction_start_date : 1,
			upgrade_variants : 69,
			background : $client->starGiftBackground(
				center_color : 71,
				edge_color : 86,
				text_color : 29,
			),
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			burned : true,
			crafted : true,
			id : 7477378692510132637,
			gift_id : -805615536935783686,
			title : 'syiuxYDP6HeEL2fo',
			slug : 'OM8LKEvsVgTJ03jQ',
			num : 83,
			owner_id : $client->peerUser(
				user_id : 8536091522327336500,
			),
			owner_name : '7u0TFj5rzNsZvgJy',
			owner_address : 'bInaLEkG419qvX5i',
			attributes : array(
				$client->starGiftAttributeModel(
					crafted : true,
					name : 'wTEsi3UAYOmdq5vX',
					document : $client->documentEmpty(
						id : -3789617332874931449,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 83,
					),
				),
				$client->starGiftAttributePattern(
					name : '6OP9IbGwBj7eMa0Z',
					document : $client->documentEmpty(
						id : -1639354188843233129,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 42,
					),
				),
				$client->starGiftAttributeBackdrop(
					name : 'wt3x6RZmia95jVdB',
					backdrop_id : 49,
					center_color : 57,
					edge_color : 52,
					pattern_color : 26,
					text_color : 0,
					rarity : $client->starGiftAttributeRarity(
						permille : 11,
					),
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : -3290414119877214721,
					),
					recipient_id : $client->peerUser(
						user_id : -7993261560153268758,
					),
					date : 65,
					message : $client->textWithEntities(
						text : 'ig1RtxdXKDYezms2',
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
			availability_issued : 42,
			availability_total : 35,
			gift_address : '0yCDYqUPV8cXRu2v',
			resell_amount : array(
				$client->starsAmount(
					amount : 6169325771429302278,
					nanos : 65,
				),
				$client->starsTonAmount(
					amount : -398056581243300527,
				),
			),
			released_by : $client->peerUser(
				user_id : 9089708314236411383,
			),
			value_amount : 53493845793116905,
			value_currency : '5pGLtck1nORdAQ0T',
			value_usd_amount : 8009098165375816420,
			theme_peer : $client->peerUser(
				user_id : 8301889294115045883,
			),
			peer_color : $client->peerColor(
				color : 2,
				background_emoji_id : 1431131522031694268,
			),
			host_id : $client->peerUser(
				user_id : -14764789262955396,
			),
			offer_min_stars : 26,
			craft_chance_permille : 69,
		),
	),
	next_offset : 'WSTnzgVYdeDKPGjI',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'LElUkz6JShdI8T4G',
			document : $client->documentEmpty(
				id : 4280642190086145222,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 19,
			),
		),
		$client->starGiftAttributePattern(
			name : 'whTlcQSdzeDf2vAt',
			document : $client->documentEmpty(
				id : 5439321511307546637,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 49,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'Qfo9ceKLxqy3Fk1p',
			backdrop_id : 7,
			center_color : 10,
			edge_color : 22,
			pattern_color : 24,
			text_color : 92,
			rarity : $client->starGiftAttributeRarity(
				permille : 7,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 1034093972606482728,
			),
			recipient_id : $client->peerUser(
				user_id : -5192630243895159583,
			),
			date : 78,
			message : $client->textWithEntities(
				text : '2zkaMNybFifGR3C7',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 49,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 91,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 56,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 56,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 46,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 29,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : 'ZY8XKcs3TS02nOWH',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 89,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 13,
						user_id : 2427931440411361016,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 19,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 82,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 95,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 98,
						document_id : -4438492536827068546,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 96,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 12,
						date : 76,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 98,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 69,
						old_text : 'aYijqm85UQSD9Jxs',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 28,
					),
				),
			),
		),
	),
	attributes_hash : 6558745022699694704,
	chats : array(
		$client->chatEmpty(
			id : 2085228771120963509,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8223542673185312675,
			title : 'IlfKN7r0G48DPjUd',
			photo : $client->chatPhotoEmpty(),
			participants_count : 43,
			date : 45,
			version : 12,
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
				until_date : 17,
			),
		),
		$client->chatForbidden(
			id : 2275723557380984266,
			title : 'gKzrYqiAwFdExHNL',
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
			id : -7719784189392869804,
			access_hash : -4497397078918457193,
			title : 'Xan6Qg5kmjH3pvSe',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'glMwoBKG4cv72idk',
					reason : '1swVKZ4gDdSf9032',
					text : 'Mal5K9ewcEZTOWBz',
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
				until_date : 9,
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
				until_date : 95,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 63,
			),
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -2406183631711892037,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : -2858688692819864793,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 51,
			subscription_until_date : 7,
			bot_verification_icon : 4528677588968760946,
			send_paid_messages_stars : 3654197835920280426,
			linked_monoforum_id : -5995383315233028128,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6941782177383048177,
			access_hash : 4515067515247751293,
			title : 'SF2it7fnbcE3QJ4v',
			until_date : 100,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : -8207384619744455632,
			),
			count : 79,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2260794505975118548,
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
			id : 2841663533601857217,
			access_hash : 4663015273925506135,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8tdwLKrhC93c6Y4s',
					reason : 'zK9qZaX82ftWsnRJ',
					text : 'HXkjnbVSN2WqIuy3',
				),
			),
			bot_inline_placeholder : 'cQjTh3HMf4oBn9Ux',
			lang_code : 'lY5Q2dOANgzU38mF',
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
				max_id : 71,
			),
			color : $client->peerColor(
				color : 61,
				background_emoji_id : -5186179610529068152,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -1256904478309429331,
			),
			bot_active_users : 54,
			bot_verification_icon : 4849112217932414342,
			send_paid_messages_stars : -3987805249098954674,
		),
	),
);
```