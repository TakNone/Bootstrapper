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
	count : 65,
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
			id : 7481939616794399871,
			sticker : $client->documentEmpty(
				id : -1098996537420243987,
			),
			stars : 7541460621033107183,
			availability_remains : 16,
			availability_total : 81,
			availability_resale : 7640365780586210781,
			convert_stars : -8965873372786355687,
			first_sale_date : 78,
			last_sale_date : 29,
			upgrade_stars : -6942744676201219914,
			resell_min_stars : -9006519672329851743,
			title : 'lqzMgOLJpv7rEHkC',
			released_by : $client->peerUser(
				user_id : 1741004717159078158,
			),
			per_user_total : 35,
			per_user_remains : 88,
			locked_until_date : 11,
			auction_slug : 'c6gTfCn7qbEVywZa',
			gifts_per_round : 5,
		),
		$client->starGiftUnique(
			require_premium : true,
			resale_ton_only : true,
			theme_available : true,
			id : 5106226091968749057,
			gift_id : 275018026794269617,
			title : 'iVXjw5pNHWKdvY82',
			slug : 'DgUJeks7B2bARxFl',
			num : 53,
			owner_id : $client->peerUser(
				user_id : -3147163992405609442,
			),
			owner_name : 'Xy5eSCp9QPGUHnoO',
			owner_address : 'tO8vBFUQwXurP2K0',
			attributes : array(
				$client->starGiftAttributeModel(
					name : '51PwfDebmS3sBrGY',
					document : $client->documentEmpty(
						id : 4275919885854770728,
					),
					rarity_permille : 57,
				),
				$client->starGiftAttributePattern(
					name : 'bpFurhfxidV1Wzy8',
					document : $client->documentEmpty(
						id : -4031957495948776542,
					),
					rarity_permille : 11,
				),
				$client->starGiftAttributeBackdrop(
					name : 'Otk0hNSYLTcqZ9Qx',
					backdrop_id : 27,
					center_color : 30,
					edge_color : 68,
					pattern_color : 100,
					text_color : 1,
					rarity_permille : 74,
				),
				$client->starGiftAttributeOriginalDetails(
					sender_id : $client->peerUser(
						user_id : -1430684314840485725,
					),
					recipient_id : $client->peerUser(
						user_id : 5643280841407784958,
					),
					date : 95,
					message : $client->textWithEntities(
						text : 'iDa7vubeIB23Rj8A',
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
			availability_issued : 22,
			availability_total : 19,
			gift_address : 'rvt8RcnPEO9Xewuf',
			resell_amount : array(
				$client->starsAmount(
					amount : 2019812219631784685,
					nanos : 64,
				),
				$client->starsTonAmount(
					amount : 2037438810467691481,
				),
			),
			released_by : $client->peerUser(
				user_id : -3444266744564372897,
			),
			value_amount : -3857901790115900797,
			value_currency : 'OXoItPv2YJWHpKD8',
			theme_peer : $client->peerUser(
				user_id : 5880451720694389696,
			),
			peer_color : $client->peerColor(
				color : 92,
				background_emoji_id : -432026943558634007,
			),
			host_id : $client->peerUser(
				user_id : -7619393909855878723,
			),
		),
	),
	next_offset : 'Vz4hCJO9GDd1etUK',
	attributes : array(
		$client->starGiftAttributeModel(
			name : 'HnU1ZkRPFdti0I43',
			document : $client->documentEmpty(
				id : 1018738775059729716,
			),
			rarity_permille : 33,
		),
		$client->starGiftAttributePattern(
			name : 'wdmv0frqLV3UDTnB',
			document : $client->documentEmpty(
				id : 661679320301887667,
			),
			rarity_permille : 34,
		),
		$client->starGiftAttributeBackdrop(
			name : 'iQfjOJpFmGCRtA1S',
			backdrop_id : 28,
			center_color : 39,
			edge_color : 67,
			pattern_color : 88,
			text_color : 46,
			rarity_permille : 73,
		),
		$client->starGiftAttributeOriginalDetails(
			sender_id : $client->peerUser(
				user_id : -1815766736102019018,
			),
			recipient_id : $client->peerUser(
				user_id : 36302010177113835,
			),
			date : 43,
			message : $client->textWithEntities(
				text : 'prAKBfhcXsFQnbmg',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 26,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 70,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 43,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 94,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 8,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 59,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 62,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 76,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 81,
						language : 'zLHoYfcFnlm4QvaE',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 22,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : -4839636089390451637,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 68,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 1,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 65,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 92,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 81,
						document_id : -4111779963530904708,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 81,
					),
				),
			),
		),
	),
	attributes_hash : -3841155452836152225,
	chats : array(
		$client->chatEmpty(
			id : -7603828747665792585,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6916887351925339490,
			title : 'bGlrfWOc0Y5XTCLw',
			photo : $client->chatPhotoEmpty(),
			participants_count : 45,
			date : 35,
			version : 20,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 58,
			),
		),
		$client->chatForbidden(
			id : -276482185922537151,
			title : 'u67Vlw2cKm4BIDto',
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
			id : 4209250168042329491,
			access_hash : -8620028058629981071,
			title : 'QWckIeFdmqbfnXl4',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'L7qWrCVFTYPnJHb0',
					reason : '5gP90XKNsEkChbSt',
					text : 'KXahmFlgdY0HErqo',
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
				until_date : 30,
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
				until_date : 1,
			),
			participants_count : 60,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 53,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : 4207297247751426834,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 6110889866270697052,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 24,
			subscription_until_date : 96,
			bot_verification_icon : -3866962368547622417,
			send_paid_messages_stars : -8356052199014428175,
			linked_monoforum_id : 1673713987791638688,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2249972010666590599,
			access_hash : 492191930774280671,
			title : 'tVgsBUuPpvyzex47',
			until_date : 50,
		),
	),
	counters : array(
		$client->starGiftAttributeCounter(
			attribute : $client->starGiftAttributeIdModel(
				document_id : 5432461124073213539,
			),
			count : 58,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4404177919012552902,
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
			id : -7101236403248389093,
			access_hash : 8921092913893141920,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qwPWmisMOybHUFRj',
					reason : 'usYvRmpEA83LDb72',
					text : 'XecxkgStVHhRmIqC',
				),
			),
			bot_inline_placeholder : 'iak25uZWRI70mEe4',
			lang_code : 'OfTvslU0aC1K9ye7',
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
				max_id : 93,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -3010361860548396196,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : -7733491380331897960,
			),
			bot_active_users : 6,
			bot_verification_icon : -8315964202139340237,
			send_paid_messages_stars : 8714841422813754225,
		),
	),
);
```