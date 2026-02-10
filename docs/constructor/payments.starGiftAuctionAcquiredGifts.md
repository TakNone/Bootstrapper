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
				user_id : -4028130853457165355,
			),
			date : 13,
			bid_amount : 7919479298220218150,
			round : 16,
			pos : 80,
			message : $client->textWithEntities(
				text : 'vGQgLHCz5dmKaASb',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 83,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 51,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 51,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 95,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 32,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 96,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 69,
						language : '5lvyAbHkVuCxPRzK',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 76,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : -8099726404981496063,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 49,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 84,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 46,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 100,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 26,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 48,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : 1715497361413365851,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 90,
					),
				),
			),
			gift_num : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8120014083227528207,
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
			id : -8144818877541009746,
			access_hash : -8721667873686680347,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xjPHGBz7o9qwnbYX',
					reason : 'UgVdXoGtQ8ckArP3',
					text : 'ca9K3WCD5lr6U0ZL',
				),
			),
			bot_inline_placeholder : 'wxk3bOu2aMr0y9A1',
			lang_code : '3RFhlo8OpfyeYNtG',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 28,
				background_emoji_id : 3455732839929024553,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : 1011584422297650013,
			),
			bot_active_users : 76,
			bot_verification_icon : -3936505456690841983,
			send_paid_messages_stars : -4151064355646114982,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4336724096385709518,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1752037880327262956,
			title : 'HtVbMr17d5TAOfWJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 9,
			version : 58,
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
				until_date : 17,
			),
		),
		$client->chatForbidden(
			id : 3414407961802483266,
			title : 'n9DX5HA4cfMZV8Sl',
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
			id : -4267316155033393750,
			access_hash : -5710389808336775486,
			title : 'n6eBhbE7T3lfcA5K',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Hui8kdxj3Z4pMmgC',
					reason : 'dQnpkt7AVlUyKS8E',
					text : 'yzoG52ERmJteF7kP',
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
				until_date : 83,
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
				until_date : 60,
			),
			participants_count : 90,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 27,
			),
			color : $client->peerColor(
				color : 99,
				background_emoji_id : -8918915528480409677,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 92270239166373125,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 60,
			subscription_until_date : 63,
			bot_verification_icon : -4755199360591182085,
			send_paid_messages_stars : 6655808676320497580,
			linked_monoforum_id : 7574870654679040669,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -7272000255607472801,
			access_hash : -8149466920059263494,
			title : 'FXl4c1DqWa0TofwI',
			until_date : 23,
		),
	),
);
```