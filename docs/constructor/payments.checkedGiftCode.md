# payments.checkedGiftCode

**Description** : *Contains info about a Telegram Premium giftcode link*

**Layer** : 222

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
		user_id : -2522077475284103648,
	),
	giveaway_msg_id : 19,
	to_id : 1792093018814461977,
	date : 97,
	days : 5,
	used_date : 2,
	chats : array(
		$client->chatEmpty(
			id : 3478690239080131790,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3404853016935379186,
			title : 'cDjn3LCzduFIK2Ry',
			photo : $client->chatPhotoEmpty(),
			participants_count : 55,
			date : 69,
			version : 82,
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
				until_date : 74,
			),
		),
		$client->chatForbidden(
			id : -7274800384855967955,
			title : 'WFh2n0wgrDYzCIa1',
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
			id : -7637696789006045055,
			access_hash : 5061536795343365006,
			title : 'ZM4p8AQBJf5uV1kr',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'd0Vf6FBpGZYIrHDg',
					reason : 'c0l4fa1wgdIsDoTt',
					text : 'XyKRFoOdgBkiuhSE',
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
				until_date : 49,
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
				until_date : 42,
			),
			participants_count : 15,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 9,
			),
			color : $client->peerColor(
				color : 48,
				background_emoji_id : -2864926156480191182,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : -95688286144132901,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 78,
			subscription_until_date : 94,
			bot_verification_icon : 7382244065334191967,
			send_paid_messages_stars : -8220356675636883871,
			linked_monoforum_id : -9148236105788427170,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 3256712807235529391,
			access_hash : -3112496343799987904,
			title : '867aVKLUscbGCATB',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1041610374735442249,
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
			id : 3142132251097553781,
			access_hash : 7952502178385303071,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sJfKlzb9XYTSZRpG',
					reason : 'cLI5mVEhv6xuJMj3',
					text : 'DvP3jE8qIwLW5gps',
				),
			),
			bot_inline_placeholder : 'WtsCxQc19HdgzbkT',
			lang_code : 'HoiT7rjqgn0GZ48y',
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
				max_id : 38,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -5576654394211678396,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : 4861057903091653479,
			),
			bot_active_users : 26,
			bot_verification_icon : 3212113069155357349,
			send_paid_messages_stars : 5778996639849553947,
		),
	),
);
```