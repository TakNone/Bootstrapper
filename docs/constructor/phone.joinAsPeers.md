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
			user_id : -5651896767925214678,
		),
		$client->peerChat(
			chat_id : 644380956059538166,
		),
		$client->peerChannel(
			channel_id : 5799238324099100190,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8737221991447555129,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6703674338555277631,
			title : '0g5lQvk1NRoJGhx2',
			photo : $client->chatPhotoEmpty(),
			participants_count : 30,
			date : 12,
			version : 9,
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
				until_date : 74,
			),
		),
		$client->chatForbidden(
			id : 379648631929350916,
			title : '8FU6RHncw1ZQjxst',
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
			id : -7336684777020545684,
			access_hash : 1998213853394434558,
			title : '47yKakPfcGtiTYxr',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 3,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'APgQZcfst5w2CS8T',
					reason : 'NoyJOxqE6cD3zHk4',
					text : 'bfAwQJ4Zp7lB5s28',
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
				until_date : 23,
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
				until_date : 70,
			),
			participants_count : 82,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 56,
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -1803717766055053865,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -4152038848408827654,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 36,
			bot_verification_icon : 3984019407606700748,
			send_paid_messages_stars : -263058075096703518,
			linked_monoforum_id : 4878041347531033052,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7971598719961181216,
			access_hash : -4635743954446361111,
			title : 'ohQTcJgfrMP1iVvW',
			until_date : 19,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8303166974680764999,
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
			id : 8416318810616932651,
			access_hash : -5970853357126540690,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CT83y5K9m6kDBlRd',
					reason : 'zGgebd8LyoaHrtJA',
					text : 'B41RpmfFXqCsP9KV',
				),
			),
			bot_inline_placeholder : 'D7St9Jdoq1zIfcg5',
			lang_code : 'TqaGB1VyxXUkwg2N',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 65,
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 917341913936142398,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : 2429382128827387459,
			),
			bot_active_users : 37,
			bot_verification_icon : 1932482295253566043,
			send_paid_messages_stars : 2330350831052632333,
		),
	),
);
```