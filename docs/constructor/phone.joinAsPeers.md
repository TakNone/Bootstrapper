# phone.joinAsPeers

**Description** : *A list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

**Layer** : 216

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
			user_id : -7540130831617098828,
		),
		$client->peerChat(
			chat_id : -7994576963915993689,
		),
		$client->peerChannel(
			channel_id : 8876653292671201066,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7557645113509360572,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4244361331362306458,
			title : 'YgfFaydTIHrmCxSz',
			photo : $client->chatPhotoEmpty(),
			participants_count : 52,
			date : 48,
			version : 70,
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
				until_date : 56,
			),
		),
		$client->chatForbidden(
			id : 2271731577799870155,
			title : 'O1Mlfb3AaZQ5RxJy',
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
			id : 5182392068896365065,
			access_hash : -7500524038279674831,
			title : 'sygtBnh4Q8SiwW9e',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5LRuKTo1dJ6FNQiq',
					reason : 'CJruB3XEOAKYRflD',
					text : 'UnkdSDWuiFbXm7Bv',
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
				until_date : 39,
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
				until_date : 44,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 50,
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -3280326730355549938,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 6366480915829300615,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 61,
			subscription_until_date : 6,
			bot_verification_icon : -7275697806700386729,
			send_paid_messages_stars : 7973100461884656677,
			linked_monoforum_id : 5344166163854761763,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3838199578874980439,
			access_hash : 9221225265645283014,
			title : 'EjlxMYNCIuW07gTk',
			until_date : 99,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3543011516896189487,
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
			id : 64613523964617384,
			access_hash : -7383829670004026141,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ksSI4aV7ErQmpfvi',
					reason : 'F2nL8fTerds3EuJ9',
					text : 'rux0SsZWTk4dnelQ',
				),
			),
			bot_inline_placeholder : 'AULx4mvNihrdjG6B',
			lang_code : 'NCZ7twy9QWvSaMhT',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -8430163825121622524,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 3038975268135149403,
			),
			bot_active_users : 4,
			bot_verification_icon : -7257472313887643077,
			send_paid_messages_stars : 5933531837810034804,
		),
	),
);
```