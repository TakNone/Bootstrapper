# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 214

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 9,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -8401411227305268974,
			),
			date : 63,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7728121920480513606,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2601383232982455433,
			title : 'aTYcAmMlXbpQ83CZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 79,
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
				until_date : 22,
			),
		),
		$client->chatForbidden(
			id : -5645795543511394408,
			title : 'Z2WUzm3LBQvnaR5K',
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
			id : -7706569920602013802,
			access_hash : 8751836316311642256,
			title : 'XqSk3HhP08WroDjp',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yQhZqwfWCkVGNO3p',
					reason : 'umdwXO0o4h6fZQkB',
					text : 'V0pJ75bOhfGwzDMK',
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
				until_date : 82,
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
				until_date : 92,
			),
			participants_count : 79,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : 6618089349917804216,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : -6108450369126386740,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 49,
			bot_verification_icon : 7431724832514038581,
			send_paid_messages_stars : -6771565784888598604,
			linked_monoforum_id : -1222986062307073783,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8329771793346017795,
			access_hash : 8861193656316736641,
			title : 'QuUGS2RBwgNE5CPq',
			until_date : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2875394537635637257,
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
			id : -4163174258289502185,
			access_hash : -2159984357491326221,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OXsPSYGpJW1AMZVE',
					reason : 'EBulXNh7dTvZV4HJ',
					text : 'JHRpl1cNzWo84EGS',
				),
			),
			bot_inline_placeholder : 'AqCUmbK8N3RJZWuc',
			lang_code : 'CuXBS1Qv6mcFDPZy',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 4413083926357939602,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -7253965140429656727,
			),
			bot_active_users : 23,
			bot_verification_icon : 7908730166918009121,
			send_paid_messages_stars : 3196589771259856083,
		),
	),
);
```