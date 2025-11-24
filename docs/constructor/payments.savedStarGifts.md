# payments.savedStarGifts

**Description** : *Represents a list of gifts*

**Layer** : 218

```tl
payments.savedStarGifts#95f389b1 flags:# count:int chat_notifications_enabled:flags.1?Bool gifts:Vector<SavedStarGift> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results (can be less than the returned gifts, in which case next_offset will be set) |
| **chat_notifications_enabled** | [`flags.1?Bool`](type/Bool) | Ternary value: can be not set, set&true, set&false. Can only be set for channels we own: the value indicates whether we enabled gift notifications for this channel |
| <mark>gifts</mark> | [`Vector<SavedStarGift>`](type/SavedStarGift) | Gifts |
| **next_offset** | [`flags.0?string`](type/string) | Offset to pass to payments.getSavedStarGifts to fetch the next page of results |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Channels mentioned in gifts |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in gifts |

---

## Type

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->savedStarGifts(
	count : 79,
	chat_notifications_enabled : true,
	gifts : array(
		$client->savedStarGift(
			name_hidden : true,
			unsaved : true,
			refunded : true,
			can_upgrade : true,
			pinned_to_top : true,
			upgrade_separate : true,
			from_id : $client->peerUser(
				user_id : 375645395567097,
			),
			date : 47,
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				can_upgrade : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -576928149690269671,
				sticker : $client->documentEmpty(
					id : -376690577006628442,
				),
				stars : 3736550145073548713,
				availability_remains : 20,
				availability_total : 94,
				availability_resale : -5354572654035634412,
				convert_stars : -9096953329439297790,
				first_sale_date : 31,
				last_sale_date : 21,
				upgrade_stars : -899305731233835905,
				resell_min_stars : -5458003910907743036,
				title : 'MeguDQnljyS57R6c',
				released_by : $client->peerUser(
					user_id : -1864598204873611567,
				),
				per_user_total : 32,
				per_user_remains : 76,
				locked_until_date : 67,
				auction_slug : '2lyc0neLXhpJU7AZ',
				gifts_per_round : 33,
			),
			message : $client->textWithEntities(
				text : 'E5yo3Q4pC08XzKbt',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 69,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 75,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 23,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 5,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 43,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 48,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 37,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : 'pFkyZ2OQVzhW6fLc',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 80,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : 5467366572503625689,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 9,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 72,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 11,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 42,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : -3654470351370951422,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 4,
					),
				),
			),
			msg_id : 24,
			saved_id : 3881020370139559984,
			convert_stars : -3312243211522605205,
			upgrade_stars : 6542939776979972550,
			can_export_at : 56,
			transfer_stars : -1337060163536636219,
			can_transfer_at : 42,
			can_resell_at : 15,
			collection_id : array(75),
			prepaid_upgrade_hash : 'irsJSebFA403azt1',
			drop_original_details_stars : 4872113288217957181,
		),
	),
	next_offset : 'Q6x9A3BJDai1nIjs',
	chats : array(
		$client->chatEmpty(
			id : 1228602676953349725,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6191201429875032919,
			title : 'C86FEy1j3Y4NtiVM',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 93,
			version : 71,
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
				until_date : 90,
			),
		),
		$client->chatForbidden(
			id : -9215208184691451195,
			title : 'Se1kqR7j8CyWTHxw',
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
			id : -5333151128574210636,
			access_hash : -3472800891920983218,
			title : 'ySIwXdLr83o0g2uA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pudxRBeO1qGcEN6v',
					reason : 'zg8sjQy9bFBW4tmw',
					text : 'YF4MaiQwI56lUtAS',
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
				until_date : 4,
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
				until_date : 54,
			),
			participants_count : 39,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 70,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -2727860679080643527,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : -8474653528645505477,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 19,
			subscription_until_date : 29,
			bot_verification_icon : -4405557700763071984,
			send_paid_messages_stars : -3266376566905611204,
			linked_monoforum_id : 8973555226801522084,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1368137206641221810,
			access_hash : -9045804629611400869,
			title : 'PhwLDQfNeZxtrWSj',
			until_date : 1,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2785828924839172469,
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
			id : 3352802017733296379,
			access_hash : 7322477197805803127,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eE4inOGqjlxDzfcy',
					reason : 'TuKrZ1NPMtb4gR6U',
					text : 'yjVpPbt20ovG4WTc',
				),
			),
			bot_inline_placeholder : 'cIOChonKaY3NR029',
			lang_code : 'R3MrA29IychElVJq',
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
				max_id : 40,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -6341480643303880059,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : 770378321817364816,
			),
			bot_active_users : 41,
			bot_verification_icon : -8007717299079970613,
			send_paid_messages_stars : -5359526275615380361,
		),
	),
);
```