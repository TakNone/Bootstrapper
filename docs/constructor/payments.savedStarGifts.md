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
	count : 29,
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
				user_id : 1866528182173824934,
			),
			date : 88,
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				can_upgrade : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -6440458233237224728,
				sticker : $client->documentEmpty(
					id : 8159646503517135366,
				),
				stars : -3233400447622825029,
				availability_remains : 49,
				availability_total : 97,
				availability_resale : -8925325917884071110,
				convert_stars : -725092447503912704,
				first_sale_date : 17,
				last_sale_date : 29,
				upgrade_stars : -2729476500141505609,
				resell_min_stars : -7708785164702221508,
				title : 'RVsMmqYHbdE2y35e',
				released_by : $client->peerUser(
					user_id : 690067401480660255,
				),
				per_user_total : 14,
				per_user_remains : 88,
				locked_until_date : 49,
				auction_slug : 'Sm5cD02Zb7gaqMUL',
				gifts_per_round : 68,
			),
			message : $client->textWithEntities(
				text : '9j5pfGgwd61DUL3l',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 4,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 75,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 32,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 62,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 50,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 86,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : 'ILVb2T0GgqfR8ywZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 46,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : -3858714577542257269,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 80,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 16,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 100,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 82,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 25,
						document_id : -7720312545657920479,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 55,
					),
				),
			),
			msg_id : 2,
			saved_id : 8066079378984269689,
			convert_stars : 5352385218976674577,
			upgrade_stars : -2758915064477259075,
			can_export_at : 29,
			transfer_stars : 7675994701532739195,
			can_transfer_at : 77,
			can_resell_at : 14,
			collection_id : array(83),
			prepaid_upgrade_hash : 'vQ8hk30ZgWx179jH',
			drop_original_details_stars : -7461565961503378187,
		),
	),
	next_offset : 'OhmXlWvNUzrG2ajq',
	chats : array(
		$client->chatEmpty(
			id : 1821106503457138837,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7102390364879733440,
			title : 'ntS2b3MTyKiuWpDJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 12,
			date : 92,
			version : 86,
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
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : 7848401207703290057,
			title : '2by4L9NdiJVFzloj',
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
			id : 5051185250685871862,
			access_hash : 8625699577990287439,
			title : 'yLnYVa6xF3rU0gJd',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '68MknUXCdPY09Gyu',
					reason : 'mkYDzaiuQwTAfr0q',
					text : 'eFQCqMdHmlTLPgyY',
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
				until_date : 70,
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
			participants_count : 41,
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
				color : 9,
				background_emoji_id : -455449890130074928,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -956293916782252721,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 35,
			subscription_until_date : 20,
			bot_verification_icon : 2017098670375356344,
			send_paid_messages_stars : -7912737178906537385,
			linked_monoforum_id : 6061581303363948536,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7816824346538470082,
			access_hash : 8519350283799631172,
			title : 'LMIH1ZuJjSKqv0UO',
			until_date : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6717697933889184718,
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
			id : -2814012647973623098,
			access_hash : 2430838812851845992,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 41,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AKxqsn5d39awmTp0',
					reason : '41ifcXD6Qq7MUF2j',
					text : 'MjIJXSPBWivZe6tr',
				),
			),
			bot_inline_placeholder : 'GracwjfhxYoVNKXe',
			lang_code : 'BhZ0LNy6fmTbVGYn',
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
				max_id : 81,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : -4484542596052810473,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -2293758466497728178,
			),
			bot_active_users : 75,
			bot_verification_icon : 89671056792336237,
			send_paid_messages_stars : 1829281952393701687,
		),
	),
);
```