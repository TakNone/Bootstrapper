# payments.savedStarGifts

**Description** : *Represents a list of gifts*

**Layer** : 222

```tl
payments.savedStarGifts#95f389b1 flags:# count:int chat_notifications_enabled:flags.1?Bool gifts:Vector<SavedStarGift> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 21,
	chat_notifications_enabled : false,
	gifts : array(
		$client->savedStarGift(
			name_hidden : true,
			unsaved : true,
			refunded : true,
			can_upgrade : true,
			pinned_to_top : true,
			upgrade_separate : true,
			from_id : $client->peerUser(
				user_id : -2529466683695673704,
			),
			date : 73,
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -3962896640141527237,
				sticker : $client->documentEmpty(
					id : 6139754825790345119,
				),
				stars : 722908680401891904,
				availability_remains : 32,
				availability_total : 99,
				availability_resale : -6545161505995440620,
				convert_stars : -4585029391707470680,
				first_sale_date : 33,
				last_sale_date : 49,
				upgrade_stars : -7160077788896105205,
				resell_min_stars : -405267034168627936,
				title : 'Yieuj4dFqLOaDmb2',
				released_by : $client->peerUser(
					user_id : -7296376132280106949,
				),
				per_user_total : 35,
				per_user_remains : 51,
				locked_until_date : 34,
				auction_slug : '6NLa0M2vdhRjCwli',
				gifts_per_round : 56,
				auction_start_date : 31,
				upgrade_variants : 34,
				background : $client->starGiftBackground(
					center_color : 12,
					edge_color : 50,
					text_color : 38,
				),
			),
			message : $client->textWithEntities(
				text : '0cHvA2qdhywr9ZCL',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 69,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 93,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 61,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 60,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 56,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 31,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 32,
						language : 'MTtH1f25LWV37BZm',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 79,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 65,
						user_id : -2103776441880534697,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 98,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 26,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 6,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 47,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 38,
						document_id : 7869390969978710660,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 90,
					),
				),
			),
			msg_id : 33,
			saved_id : 1738616059288505808,
			convert_stars : 6741687015230004245,
			upgrade_stars : 8840458086836562604,
			can_export_at : 61,
			transfer_stars : 2474739601955694450,
			can_transfer_at : 78,
			can_resell_at : 17,
			collection_id : array(29),
			prepaid_upgrade_hash : 'Amtb2U46LqG8I0hW',
			drop_original_details_stars : -2027187176808520322,
			gift_num : 5,
			can_craft_at : 17,
		),
	),
	next_offset : '3zFjwlWGtcCZkr4m',
	chats : array(
		$client->chatEmpty(
			id : 433515272151144677,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1066671695876358670,
			title : 'IKvbJM6OexRGSg5y',
			photo : $client->chatPhotoEmpty(),
			participants_count : 83,
			date : 11,
			version : 24,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : -495258982409366467,
			title : 'RiIofzmDNP1gFT2S',
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
			id : 8097079550440101910,
			access_hash : 830807894815298596,
			title : 'S9iyRjWAv6M5hFk3',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2CgpmwxTURQEMfr6',
					reason : 'yJU4B7aej5OcSHWb',
					text : 'dLqGQRiMr2FZ5gvn',
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
				until_date : 23,
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
				until_date : 51,
			),
			participants_count : 66,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 26,
			),
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -2259588476633856028,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 4341503730557145575,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 47,
			subscription_until_date : 85,
			bot_verification_icon : 5342012274637788754,
			send_paid_messages_stars : 6768443965116547606,
			linked_monoforum_id : 1910609183387174099,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -1014243027255717571,
			access_hash : 6837491514158071219,
			title : 'CYuxsO9vortJkpzV',
			until_date : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1880970487841462889,
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
			id : 3110171922319208824,
			access_hash : 3092988853589241873,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8tLjH9rCWwnd4Dvy',
					reason : 'Wq2u0a4IksrF5eol',
					text : 'oXI9vA1WeqL2RirY',
				),
			),
			bot_inline_placeholder : 'nDs0RYJMv5ouHpK2',
			lang_code : 'njBqkvXQuGI3rxl2',
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
				max_id : 24,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : 8032424805962852243,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : 3279176425983339356,
			),
			bot_active_users : 57,
			bot_verification_icon : -6460895617095148585,
			send_paid_messages_stars : 5761121410322306887,
		),
	),
);
```