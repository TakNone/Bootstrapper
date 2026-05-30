# payments.starGiftAuctionAcquiredGifts

**Layer** : 222

```tl
payments.starGiftAuctionAcquiredGifts#7d5bd1f0 gifts:Vector<StarGiftAuctionAcquiredGift> users:Vector<User> chats:Vector<Chat> = payments.StarGiftAuctionAcquiredGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gifts</mark> | [`Vector<StarGiftAuctionAcquiredGift>`](type/StarGiftAuctionAcquiredGift) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | NOTHING |

---

## Type

[payments.StarGiftAuctionAcquiredGifts](type/payments.StarGiftAuctionAcquiredGifts)

---

## Example

```php
$paymentsStarGiftAuctionAcquiredGifts = $client->payments->starGiftAuctionAcquiredGifts(
	gifts : array(
		$client->starGiftAuctionAcquiredGift(
			name_hidden : true,
			peer : $client->peerUser(
				user_id : 131315549206027017,
			),
			date : 74,
			bid_amount : -1633228583719051538,
			round : 84,
			pos : 27,
			message : $client->textWithEntities(
				text : 'c9yoLFPNwevEVMZA',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 84,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 33,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 46,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 75,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 49,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 50,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 44,
						language : '1KS35YZMHzwuAFgk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 88,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : -5192694501234570246,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 99,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 60,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 52,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 96,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 68,
						document_id : 8015810989733208097,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 66,
					),
				),
			),
			gift_num : 88,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5493873802174917962,
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
			id : 8714580888439267484,
			access_hash : 5351598585330773242,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RjgI6tG78EQ2WyoU',
					reason : 'EWkYaBduHv70mNjl',
					text : '1uMj9DUsqTCLpWZE',
				),
			),
			bot_inline_placeholder : 'dlpsThw2mFq1kyYc',
			lang_code : 'ZI9i0aXTA4uBD82F',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : -409299818173636513,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -721204555221330794,
			),
			bot_active_users : 50,
			bot_verification_icon : -838878536838286954,
			send_paid_messages_stars : -2210594900653437547,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3973108959860396756,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6683511326444753329,
			title : 'E2FbIzrDpg14RGvQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 64,
			date : 10,
			version : 19,
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
				until_date : 79,
			),
		),
		$client->chatForbidden(
			id : -801460511989970865,
			title : 'o3naiZXtg2wmG76p',
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
			id : 9132446860279439578,
			access_hash : 7211828366831237998,
			title : 'LdW0ukfl9PV4bs7w',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'PEK10vwDYXd6STyh',
					reason : 'OY4agIkGh2SLrEuz',
					text : 'rB9RuY2KX8AOyg3w',
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
				until_date : 12,
			),
			participants_count : 97,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 61,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 8687605715317925519,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 1804489132179466571,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 76,
			subscription_until_date : 38,
			bot_verification_icon : 3813318819686371543,
			send_paid_messages_stars : 3108917966703389579,
			linked_monoforum_id : -4780989149927303276,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -7250221022899372708,
			access_hash : 5770646496063314398,
			title : 'XdTaw0jOH46F7SJ8',
			until_date : 51,
		),
	),
);
```