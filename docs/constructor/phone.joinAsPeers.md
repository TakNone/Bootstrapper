# phone.joinAsPeers

**Description** : *A list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

**Layer** : 222

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
			user_id : 3500557634876042267,
		),
		$client->peerChat(
			chat_id : -6996119676844523952,
		),
		$client->peerChannel(
			channel_id : 6249570614898531839,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3413377628200570353,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3030326036410208432,
			title : 'mVc2oeH3B4XaAftS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 60,
			version : 51,
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
				until_date : 44,
			),
		),
		$client->chatForbidden(
			id : -2295614084548057240,
			title : 'uWoSjUQi2wL3ql5t',
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
			id : -3742355529867257358,
			access_hash : 8200493784928425122,
			title : 'CmkFDoWVXqa7NSUJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LhqGAbkuepzyUmR5',
					reason : '2yGQHtbef7Y0nB6z',
					text : 'jmuNSLMriO9VDlRI',
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
				until_date : 30,
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
			participants_count : 56,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 19,
			),
			color : $client->peerColor(
				color : 48,
				background_emoji_id : 4675994359044656622,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 2473691771161739434,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 94,
			subscription_until_date : 35,
			bot_verification_icon : -8105903684299472773,
			send_paid_messages_stars : 8161230317285772846,
			linked_monoforum_id : 8135142341934830931,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -4470724537249531772,
			access_hash : 3138068236086208898,
			title : '4xuMIzT7JpnityCP',
			until_date : 44,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8459994592447984361,
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
			id : 983335773010846496,
			access_hash : -2014823065332840660,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XsAPMYrLnjdU0fOx',
					reason : 'mncR8vFDhYVUyQWS',
					text : 'Ly08kTwb72p4lg15',
				),
			),
			bot_inline_placeholder : 'BCNblR3fEDZYu0F1',
			lang_code : '2QpBgjzv8qGJPufX',
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
				max_id : 17,
			),
			color : $client->peerColor(
				color : 99,
				background_emoji_id : -2069010182874728090,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 8238455965361375359,
			),
			bot_active_users : 58,
			bot_verification_icon : -6819149336669846049,
			send_paid_messages_stars : -367061217595429309,
		),
	),
);
```