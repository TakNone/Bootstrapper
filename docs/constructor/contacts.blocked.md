# contacts.blocked

**Description** : *Full list of blocked users*

**Layer** : 218

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
				user_id : 3789371797366256174,
			),
			date : 43,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 926647647797854826,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1564051618890939480,
			title : 'bLY950Bdo1RyeWtm',
			photo : $client->chatPhotoEmpty(),
			participants_count : 0,
			date : 65,
			version : 68,
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
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : 6355401606995360807,
			title : 'HUwoVpJFsalbi6R2',
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
			id : -3702604721071110388,
			access_hash : 1491347780610959225,
			title : 'Vb3HqCD0lkv2aWBi',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'urq1ndk8xAsLE7lj',
					reason : 'DXvhtrwi4ePVRM8o',
					text : '67r0fviQ9dpO1X8q',
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
				until_date : 13,
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
			participants_count : 96,
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
				color : 5,
				background_emoji_id : -5503485096707475816,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -3413213079273159648,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 1,
			subscription_until_date : 28,
			bot_verification_icon : -8243979561732966848,
			send_paid_messages_stars : -2977828177903229621,
			linked_monoforum_id : 3734323789943103133,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1466139574458438999,
			access_hash : -6295998612898539244,
			title : 'raehq32nF0U57IBw',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6170138289948442299,
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
			id : 5395297044919498121,
			access_hash : 5415639802800156268,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'xSDRId4XAeLGfEUk',
					reason : 'LDkgpZ5OvJVdAGlu',
					text : 'wb5fn9RcmDXhTs1F',
				),
			),
			bot_inline_placeholder : 'dCaRBfjucL8kmgsv',
			lang_code : 'kfYET8ZxaNWPS2iA',
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
				max_id : 39,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -5237854126867797233,
			),
			profile_color : $client->peerColor(
				color : 73,
				background_emoji_id : -5279144149741691914,
			),
			bot_active_users : 54,
			bot_verification_icon : -2923025927654881452,
			send_paid_messages_stars : 1062057045657264267,
		),
	),
);
```