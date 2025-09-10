# phone.joinAsPeers

**Description** : *A list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

**Layer** : 214

```tl
phone.joinAsPeers#afe5623f peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = phone.JoinAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<Peer>`](type/Peer) | Peers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the peers vector |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the peers vector |

---

## Type

[phone.JoinAsPeers](type/phone.JoinAsPeers)

---

## Example

```php
$phoneJoinAsPeers = $client->phone->joinAsPeers(
	peers : array(
		$client->peerUser(
			user_id : 7814244470054866187,
		),
		$client->peerChat(
			chat_id : 1768385168030449819,
		),
		$client->peerChannel(
			channel_id : 3010815970131853812,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7624292815943008888,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3739085610567883603,
			title : '5ZbYdJ8hSxaVkCNL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 95,
			version : 51,
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
			id : 6179784187635234000,
			title : '1HCopO5bWFtLIjAm',
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
			id : -4392393253339143752,
			access_hash : 6099354583325415517,
			title : 'asdAPqIyVDolpCKb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tQvw3binXDlg8Gks',
					reason : 'LNE7pcuqXeZsFtSI',
					text : '7T3VZIk0dRY9AGnh',
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
				until_date : 16,
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
				until_date : 63,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -9088705105326839415,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -121333982663572647,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 76,
			bot_verification_icon : -852154252468672020,
			send_paid_messages_stars : 518091537468927493,
			linked_monoforum_id : 2714761353895383810,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3597068682741933102,
			access_hash : -3098690861988982838,
			title : 'hcPQNyOCXJjoGf1k',
			until_date : 23,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7240486831467465505,
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
			id : 6302168727496652464,
			access_hash : 243461376161454629,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6lInDT0b5WL2xZCk',
					reason : 'wcadZFm3tjDgyiBz',
					text : 'DNxw5r36vHI1LcUh',
				),
			),
			bot_inline_placeholder : 'wMr8QpXmOg4tcsAZ',
			lang_code : 'av5uR8biEWD4dmK9',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 81,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -5338973414295384248,
			),
			profile_color : $client->peerColor(
				color : 3,
				background_emoji_id : 2900058264203220243,
			),
			bot_active_users : 32,
			bot_verification_icon : -1083259977792558881,
			send_paid_messages_stars : 3436455055546011619,
		),
	),
);
```