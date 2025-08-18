# contacts.blocked

**Description** : *Full list of blocked users*

**Layer** : 211

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
				user_id : -76669342498712432,
			),
			date : 75,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 305672250003809258,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1436697756865409018,
			title : 'o97w8VU52Jd1kMfs',
			photo : $client->chatPhotoEmpty(),
			participants_count : 84,
			date : 77,
			version : 22,
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
				until_date : 32,
			),
		),
		$client->chatForbidden(
			id : -2503116535837074258,
			title : 'zMi5eTbID9Gmk0Uo',
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
			id : -6512656033665925678,
			access_hash : -703643473041246480,
			title : 'CMOSqpR9KhJnXy5a',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IWTKP7bvOCE90isH',
					reason : '3mueL9Jp5rl6kSjV',
					text : '5YLoQkGJ8jFzvOBm',
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
				until_date : 48,
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
				until_date : 89,
			),
			participants_count : 2,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 14,
			color : $client->peerColor(
				color : 64,
				background_emoji_id : 7439404410188574439,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 4809479419216108122,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 34,
			subscription_until_date : 2,
			bot_verification_icon : 7013994649841974852,
			send_paid_messages_stars : 925066317616184776,
			linked_monoforum_id : 206502816544322086,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3525590974169858638,
			access_hash : 4297622813036861774,
			title : '7iKMzO4Gk8HDRFn2',
			until_date : 15,
		),
	),
	users : array(
		$client->userEmpty(
			id : -413766577180000808,
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
			id : -7519824790276970880,
			access_hash : -364789928894771818,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'zZ3ofdiq0mtye5Xw',
					reason : '7HsR5ylXQhv28OE1',
					text : 'gljyD3kM08WoYxvU',
				),
			),
			bot_inline_placeholder : 'xU76Wq3sJ8dgc5Ov',
			lang_code : '0SXlcCPn7IHAgxJW',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 32,
			color : $client->peerColor(
				color : 32,
				background_emoji_id : 4151833804127120609,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -6126410420806206815,
			),
			bot_active_users : 8,
			bot_verification_icon : -2036377130942562615,
			send_paid_messages_stars : 3147922392479753328,
		),
	),
);
```