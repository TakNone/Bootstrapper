# payments.checkedGiftCode

**Description** : *Contains info about a Telegram Premium giftcode link*

**Layer** : 216

```tl
payments.checkedGiftCode#284a1096 flags:# via_giveaway:flags.2?true from_id:flags.4?Peer giveaway_msg_id:flags.3?int to_id:flags.0?long date:int months:int used_date:flags.1?int chats:Vector<Chat> users:Vector<User> = payments.CheckedGiftCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_giveaway** | [`flags.2?true`](type/true) | Whether this giftcode was created by a giveaway |
| **from_id** | [`flags.4?Peer`](type/Peer) | The peer that created the gift code |
| **giveaway_msg_id** | [`flags.3?int`](type/int) | Message ID of the giveaway in the channel specified in from_id |
| **to_id** | [`flags.0?long`](type/long) | The destination user of the gift |
| <mark>date</mark> | [`int`](type/int) | Creation date of the gift code |
| <mark>months</mark> | [`int`](type/int) | Duration in months of the gifted Telegram Premium subscription |
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
		user_id : 5294429159192636457,
	),
	giveaway_msg_id : 35,
	to_id : -1864859022311389658,
	date : 83,
	months : 28,
	used_date : 68,
	chats : array(
		$client->chatEmpty(
			id : -198051239231423726,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8719580677599372705,
			title : 'Ll1xXAfaT0Hn3bjp',
			photo : $client->chatPhotoEmpty(),
			participants_count : 92,
			date : 66,
			version : 49,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 52,
			),
		),
		$client->chatForbidden(
			id : 7540326758105094189,
			title : 'EXCfIHz2iTl0jcFm',
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
			id : 1442719991260228967,
			access_hash : -8107554877354369078,
			title : 'vVO93NlB8UnfAxmi',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TNkumGVFHSapO0iK',
					reason : 'dyiH1O48qVcXFtu3',
					text : 'wOIUJsntAp3RLCWX',
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
				until_date : 52,
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
				until_date : 34,
			),
			participants_count : 30,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 19,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : 5413917432067062330,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 5996374160519884309,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 63,
			subscription_until_date : 89,
			bot_verification_icon : 2863139976582471262,
			send_paid_messages_stars : 5613110414202078476,
			linked_monoforum_id : 1991750876892722655,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6770581482716066877,
			access_hash : 5652595833972285552,
			title : 'X1kOy9q3G8daVs2e',
			until_date : 66,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4735099141161373315,
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
			id : -322389590928435030,
			access_hash : 7357506627377606074,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O0NfRG2sIUlEt1FT',
					reason : 'Pt4sdybU9D6BHZYv',
					text : 'XIKq0e7WpyCjtRdJ',
				),
			),
			bot_inline_placeholder : 'TS5PG0bVao2UIv7x',
			lang_code : '0bRBXHgMN6P3nFzV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 1145256118628918020,
			),
			profile_color : $client->peerColor(
				color : 25,
				background_emoji_id : 5212835203049867878,
			),
			bot_active_users : 41,
			bot_verification_icon : 4011258625393624408,
			send_paid_messages_stars : -2026552120994479300,
		),
	),
);
```