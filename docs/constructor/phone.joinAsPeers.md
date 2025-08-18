# phone.joinAsPeers

**Description** : *A list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

**Layer** : 211

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
			user_id : 556429068706060683,
		),
		$client->peerChat(
			chat_id : 2817280367135487798,
		),
		$client->peerChannel(
			channel_id : -1311474130620999168,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7245136262304977466,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3424169822807644512,
			title : 'vmPY5eNrAQo4MTug',
			photo : $client->chatPhotoEmpty(),
			participants_count : 52,
			date : 16,
			version : 5,
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
				until_date : 1,
			),
		),
		$client->chatForbidden(
			id : 2906946122597257277,
			title : '5g2Io1PpFSDL7v6i',
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
			id : -2962954264067261966,
			access_hash : -886353877753587416,
			title : 'pB64FtkYqWbVirfy',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qf057FnXx3OzIcE1',
					reason : 'TAz6CMQkrLqPwVFO',
					text : '73szBKQgalWVowrZ',
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
				until_date : 45,
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
				until_date : 77,
			),
			participants_count : 59,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 11,
			color : $client->peerColor(
				color : 18,
				background_emoji_id : -8881233969289154427,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : 2372139607317947814,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 35,
			subscription_until_date : 83,
			bot_verification_icon : -7443815626716720867,
			send_paid_messages_stars : 5028626156084161782,
			linked_monoforum_id : 2846276668027961505,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5393935377697325584,
			access_hash : -920390533855359090,
			title : 'AgQM5ZLFbs41OfeG',
			until_date : 41,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7212763842085195246,
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
			id : 3905833879736122440,
			access_hash : 3940478615055142646,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 's4t1veTALSauBwgi',
					reason : 'zaYStyAW3vV0hpui',
					text : 'Dn3CPU4hvwacm79I',
				),
			),
			bot_inline_placeholder : 'ZWxIDNJ3jtlVcm7r',
			lang_code : 'K6tXBMSqE1g5mFHk',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 61,
				background_emoji_id : 5760471353190293523,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -4318256180805119442,
			),
			bot_active_users : 76,
			bot_verification_icon : -8980667430172489497,
			send_paid_messages_stars : -3392040787456787976,
		),
	),
);
```