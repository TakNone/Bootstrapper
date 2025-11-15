# phone.joinAsPeers

**Description** : *A list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

**Layer** : 218

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
			user_id : -6910928965780257604,
		),
		$client->peerChat(
			chat_id : -1200147457361948667,
		),
		$client->peerChannel(
			channel_id : -169095796945426804,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1081447419509471876,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 734069892737038620,
			title : '8YBGA3iyn6DvgFfx',
			photo : $client->chatPhotoEmpty(),
			participants_count : 81,
			date : 39,
			version : 73,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 5,
			),
		),
		$client->chatForbidden(
			id : -3406947848515952338,
			title : 'hUH4qQCepL31KAI2',
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
			id : 7102071702731967537,
			access_hash : 1102277209950470223,
			title : 'ZOFR9rbsqzQCmEJw',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'B6PT792trYpAnuVo',
					reason : 'pQNeGdfDTHvzMIVy',
					text : 'C7QIJewug3KTfcXa',
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
				until_date : 73,
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
				until_date : 94,
			),
			participants_count : 57,
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
				color : 32,
				background_emoji_id : -6800930992801746485,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -9143519774721511514,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 23,
			subscription_until_date : 1,
			bot_verification_icon : -7035790584702005717,
			send_paid_messages_stars : -4633217247132648419,
			linked_monoforum_id : -416149640575555812,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6062845480956276242,
			access_hash : 8106482938703734004,
			title : 'K10yAMwhEbHtUJ2F',
			until_date : 42,
		),
	),
	users : array(
		$client->userEmpty(
			id : -814028812368199793,
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
			id : -5318307679132901298,
			access_hash : -5520542865406121929,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'In0ryAoYOwM9EUbC',
					reason : 'bGEV5Zc6tudoSf8i',
					text : 'JPLFOYamiHoDhZxg',
				),
			),
			bot_inline_placeholder : 'PGv6k1dHgDXBeCiJ',
			lang_code : 'kQWfJKInDm9CAx3y',
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
				max_id : 92,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -3461394385022636212,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 882850372368928323,
			),
			bot_active_users : 66,
			bot_verification_icon : -7957877879348349936,
			send_paid_messages_stars : 6803416057661699374,
		),
	),
);
```