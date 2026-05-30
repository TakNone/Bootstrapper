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
	count : 89,
	gifts : array(
		$client->starGift(
			limited : true,
			sold_out : true,
			birthday : true,
			require_premium : true,
			limited_per_user : true,
			peer_color_available : true,
			auction : true,
			id : 6328248022236354475,
			sticker : $client->documentEmpty(
				id : 5548163526659640618,
			),
			stars : 6705789725064679338,
			availability_remains : 65,
			availability_total : 51,
			availability_resale : 2010361129839097347,
			convert_stars : 523846830202035289,
			first_sale_date : 43,
			last_sale_date : 32,
			upgrade_stars : 2605421286841821173,
			resell_min_stars : 7905226031028185270,
			title : 'nyVCeauvL2pFMw8z',
			released_by : $client->peerUser(
				user_id : -811799706917787106,
			),
			per_user_total : 40,
			per_user_remains : 36,
			locked_until_date : 24,
			auction_slug : 'uPCh0cg6qZYHbFJp',
			gifts_per_round : 17,
			auction_start_date : 0,
			upgrade_variants : 28,
			background : $client->starGiftBackground(
				center_color : 94,
				edge_color : 51,
				text_color : 96,
			),
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			burned : true,
			crafted : true,
			id : -2208940289403366086,
			gift_id : -8751162972059626812,
			title : 'juPrQ9bfRqzpZite',
			slug : 'Kd3S5ujCDb1MkZs8',
			num : 53,
			owner_id : $client->peerUser(
				user_id : 7601553455592453272,
			),
			owner_name : 'uXrUxlSfEF0dI3sJ',
			owner_address : 'lqRtdXYKGmOBwxrc',
			attributes : array(
				$client->starGiftAttributeModel(
					crafted : true,
					name : 'aLlfDbhXqoE0Kcy5',
					document : $client->documentEmpty(
						id : -4636054557450552938,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 90,
					),
				),
				$client->starGiftAttributePattern(
					name : 'we9ycA5dnEfaC6qS',
					document : $client->documentEmpty(
						id : -8587321545019594520,
					),
					rarity : $client->starGiftAttributeRarity(
						permille : 18,
					),
				),
				$client->starGiftAttributeBackdrop(
					name : 'y1urYOptm5zUixnV',
					backdrop_id : 71,
					center_color : 5,
					edge_color : 86,
					pattern_color : 10,
					text_color : 82,
					rarity : $client->starGiftAttributeRarity(
						permille : 61,
					),
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : -8997683224260174381,
					),
					recipient_id : $client->peerUser(
						user_id : -2980111722412617360,
					),
					date : 28,
					message : $client->textWithEntities(
						text : 'WbyhoS7AnECsUZzG',
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
			availability_issued : 78,
			availability_total : 69,
			gift_address : 'WxtvH1euYApC8O7Z',
			resell_amount : array(
				$client->starsAmount(
					amount : -2549235645216946201,
					nanos : 5,
				),
				$client->starsTonAmount(
					amount : -1392424923998518040,
				),
			),
			released_by : $client->peerUser(
				user_id : 3233851200459486606,
			),
			value_amount : 3126339227345874676,
			value_currency : 'eZRbQAaf0zBt42Iy',
			value_usd_amount : -8703351000744897990,
			theme_peer : $client->peerUser(
				user_id : -1658925737759369161,
			),
			peer_color : $client->peerColor(
				color : 75,
				background_emoji_id : -723516012881840317,
			),
			host_id : $client->peerUser(
				user_id : 4988760321004031887,
			),
			offer_min_stars : 49,
			craft_chance_permille : 84,
		),
	),
	next_offset : 'xy76S2bantkqrEJO',
	attributes : array(
		$client->starGiftAttributeModel(
			crafted : true,
			name : 'zBgfmUaqZSkNRvI8',
			document : $client->documentEmpty(
				id : -4482747346847097576,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 23,
			),
		),
		$client->starGiftAttributePattern(
			name : 'F2JDgwf9Nlzceurm',
			document : $client->documentEmpty(
				id : -6989158520657134060,
			),
			rarity : $client->starGiftAttributeRarity(
				permille : 14,
			),
		),
		$client->starGiftAttributeBackdrop(
			name : 'eUESDOhvym7WljLB',
			backdrop_id : 97,
			center_color : 71,
			edge_color : 14,
			pattern_color : 29,
			text_color : 51,
			rarity : $client->starGiftAttributeRarity(
				permille : 84,
			),
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : 2649370976138982209,
			),
			recipient_id : $client->peerUser(
				user_id : -5221332415000275699,
			),
			date : 42,
			message : $client->textWithEntities(
				text : 'E9HiFwqkvsM7Vtzy',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 30,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 12,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 32,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 76,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 45,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 21,
						language : '2E1CkbNZjTGzqAUi',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 82,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : 3582589332777299830,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 37,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 36,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 73,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 82,
						document_id : 4106902030840892052,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 61,
					),
				),
			),
		),
	),
	attributes_hash : 4314862582414970252,
	chats : array(
		$client->chatEmpty(
			id : 352174251471134666,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4380573898303219910,
			title : '3jUCzeVMiZ6pgE8y',
			photo : $client->chatPhotoEmpty(),
			participants_count : 83,
			date : 79,
			version : 6,
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
				until_date : 96,
			),
		),
		$client->chatForbidden(
			id : 1671322173478213632,
			title : 'nsyM3zIVgCBxJLH2',
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
			id : 6913921101490476220,
			access_hash : -4806993427769973485,
			title : 'qAyv5t2CHjP9Zbhw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'L4gGhHXz5iP9bjkO',
					reason : 'baAGkLZE40MthKcH',
					text : '3cvS79WjIuON2HRC',
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
				until_date : 85,
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
				until_date : 32,
			),
			participants_count : 7,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 75,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -2389744354388465563,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : -3867253152271728257,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 63,
			subscription_until_date : 23,
			bot_verification_icon : -4750752227334221144,
			send_paid_messages_stars : -4172208705322719867,
			linked_monoforum_id : 4255690187649873751,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5133675241616771901,
			access_hash : 4783043623204956906,
			title : 'HXC63MwBPcLxY7UJ',
			until_date : 54,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 3565693652188656327,
			),
			count : 11,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5428571524228959853,
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
			id : 407883025204531690,
			access_hash : 1171654303350992980,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TG8XQ3D7LAOPa0m6',
					reason : 'jPyDFREdUmciNs07',
					text : 'ymeIPloQRZux80t1',
				),
			),
			bot_inline_placeholder : 'jlV4g98MF0sfDyxU',
			lang_code : 'c17320KnHRiZzF8O',
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
				max_id : 58,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -2931008194305485104,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : -7136147640839994766,
			),
			bot_active_users : 0,
			bot_verification_icon : -7158772313718219550,
			send_paid_messages_stars : -4300116187611733942,
		),
	),
);
```