# payments.checkedGiftCode

**Description** : *Contains info about a Telegram Premium giftcode link*

**Layer** : 211

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
		user_id : 1443170314464964511,
	),
	giveaway_msg_id : 23,
	to_id : 1737071122955454316,
	date : 0,
	months : 43,
	used_date : 79,
	chats : array(
		$client->chatEmpty(
			id : 3179353417470103161,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 613204677380977670,
			title : 'Lb3PzZd6yq90When',
			photo : $client->chatPhotoEmpty(),
			participants_count : 52,
			date : 48,
			version : 54,
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
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : -2128864924013341955,
			title : 'y2v9o30aRBgeDKk8',
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
			id : 8295786816309055824,
			access_hash : -4832961151593586115,
			title : 'hHqmbxXE9cyIlw18',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3ZPexiL9YfAoa6d8',
					reason : 'oPA2iGagrMU9tBJE',
					text : 'z2upU6hCvMr1BeHf',
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
				until_date : 51,
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
				until_date : 86,
			),
			participants_count : 65,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 75,
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 111280364095880784,
			),
			profile_color : $client->peerColor(
				color : 50,
				background_emoji_id : 431901772038597299,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 73,
			subscription_until_date : 48,
			bot_verification_icon : 7603942434582292804,
			send_paid_messages_stars : 8784968084470609343,
			linked_monoforum_id : -7336693844879874404,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 832173934311238268,
			access_hash : 7201171174989307033,
			title : 'xIld6LSCD8BKcRfv',
			until_date : 87,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7949134783289293564,
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
			id : -5151752711546344003,
			access_hash : -6415366434247814479,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nJioIKE1Y3smr70g',
					reason : 'UeYNK2gfzMIOELZC',
					text : '7PqgOF1YxoSVbXrT',
				),
			),
			bot_inline_placeholder : '2cwIPhgpy13Vb6mJ',
			lang_code : '0WLN2zVtYai3Ko97',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 83,
			color : $client->peerColor(
				color : 19,
				background_emoji_id : 8412992536311362658,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -4831005635015999386,
			),
			bot_active_users : 21,
			bot_verification_icon : -6376511618330718261,
			send_paid_messages_stars : -6336487221336981865,
		),
	),
);
```