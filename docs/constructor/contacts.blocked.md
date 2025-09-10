# contacts.blocked

**Description** : *Full list of blocked users*

**Layer** : 214

```tl
contacts.blocked#ade1591 blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blocked(
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -8469967968962434902,
			),
			date : 19,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -140489703738475362,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6985872351575588365,
			title : 'z8qDaYkdniMyUveN',
			photo : $client->chatPhotoEmpty(),
			participants_count : 44,
			date : 2,
			version : 96,
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
				until_date : 4,
			),
		),
		$client->chatForbidden(
			id : 6412622329948612818,
			title : 'w398ZthBIQzXgiYA',
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
			id : 6830590254794713849,
			access_hash : 3051856799433193207,
			title : 'MZKlt5qO1pVUe9Pa',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pk0PnaAZjzHIhTFg',
					reason : 'ColaGx2fVWJuP4N1',
					text : 'U6cFwpdTnEoX1yZ9',
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
				until_date : 88,
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
			participants_count : 7,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 13,
			color : $client->peerColor(
				color : 82,
				background_emoji_id : -4736170291977970290,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : 1675668105616835030,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 24,
			subscription_until_date : 31,
			bot_verification_icon : -6308592227605368117,
			send_paid_messages_stars : 8201868050292040054,
			linked_monoforum_id : -5841262887795606576,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2903299218429658758,
			access_hash : 7228463523738120261,
			title : 'hdyLSmIjsn17F28Q',
			until_date : 53,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4591505915889126393,
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
			id : 6165368748601369556,
			access_hash : 7022165218369475125,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dc9ePaYCJzVOvbjA',
					reason : '5Krfj6QCM1bTWO02',
					text : 'pgtRLwUH9bGrhI6D',
				),
			),
			bot_inline_placeholder : 'BJhRu2ztwy1xVKs4',
			lang_code : 'qEnbme4di6BUGc9s',
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
				color : 18,
				background_emoji_id : 4859117094603165887,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : 3985687550280658369,
			),
			bot_active_users : 28,
			bot_verification_icon : -401704630255264169,
			send_paid_messages_stars : 1198973264741617742,
		),
	),
);
```