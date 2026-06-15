# payments.checkedGiftCode

**Description** : *Contains info about a Telegram Premium giftcode link*

**Layer** : 227

```tl
payments.checkedGiftCode#eb983f8f flags:# via_giveaway:flags.2?true from_id:flags.4?Peer giveaway_msg_id:flags.3?int to_id:flags.0?long date:int days:int used_date:flags.1?int chats:Vector<Chat> users:Vector<User> = payments.CheckedGiftCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_giveaway** | [`flags.2?true`](type/true) | Whether this giftcode was created by a giveaway |
| **from_id** | [`flags.4?Peer`](type/Peer) | The peer that created the gift code |
| **giveaway_msg_id** | [`flags.3?int`](type/int) | Message ID of the giveaway in the channel specified in from_id |
| **to_id** | [`flags.0?long`](type/long) | The destination user of the gift |
| <mark>date</mark> | [`int`](type/int) | Creation date of the gift code |
| <mark>days</mark> | [`int`](type/int) | NOTHING |
| **used_date** | [`flags.1?int`](type/int) | When was the giftcode imported, if it was imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[payments.CheckedGiftCode](type/payments.CheckedGiftCode)

---

## Example

```php
$paymentsCheckedGiftCode = $client->payments->checkedGiftCode(
	via_giveaway : true,
	from_id : $client->peerUser(
		user_id : 3340307075120603985,
	),
	giveaway_msg_id : 17,
	to_id : 476675676166640924,
	date : 8,
	days : 36,
	used_date : 3,
	chats : array(
		$client->chatEmpty(
			id : -5863809098991513866,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3535676584922934094,
			title : '9LMVtQfy7G3OSr8m',
			photo : $client->chatPhotoEmpty(),
			participants_count : 98,
			date : 60,
			version : 8,
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
				until_date : 80,
			),
		),
		$client->chatForbidden(
			id : 2848837599314221665,
			title : 'oB4h1GNexvIEjAJU',
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
			id : 5352863333852935068,
			access_hash : -5464896798247546563,
			title : '5s2kOoLrHW1gtm6l',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xkq4ZRCGyeEUuo7O',
					reason : 'TQUbm4rVDIvaphSz',
					text : 'JXUsPViQ4WDSvgAG',
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
				until_date : 57,
			),
			participants_count : 21,
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
				color : 63,
				background_emoji_id : -257523692776765989,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 416358704659580724,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 26,
			bot_verification_icon : 9025133990734366415,
			send_paid_messages_stars : -5440609085995456515,
			linked_monoforum_id : 7800053563098281662,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -2532087927805899424,
			access_hash : -2812614757697309255,
			title : 'iJV39Ogo6jBCIUXu',
			until_date : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6812355069623187266,
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
			id : 3621072480462996530,
			access_hash : 1348792593760440602,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0nKo2Z3ICqNVOTwy',
					reason : '1HMOfoBqikzAdb4t',
					text : 'XoUzyNZD6QBR3ICY',
				),
			),
			bot_inline_placeholder : 'Jj4mEw6tqVgHTuUx',
			lang_code : 'Nkv6tnGc7QUwAigm',
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
				max_id : 26,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -2598444747373922346,
			),
			profile_color : $client->peerColor(
				color : 11,
				background_emoji_id : 6096831760936036039,
			),
			bot_active_users : 67,
			bot_verification_icon : 8838436568768663863,
			send_paid_messages_stars : -5306007268796723707,
		),
	),
);
```