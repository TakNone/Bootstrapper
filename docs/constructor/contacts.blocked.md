# contacts.blocked

**Description** : *Full list of blocked users*

**Layer** : 222

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
				user_id : -3264899451080946403,
			),
			date : 14,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1106864911281595185,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8976515955730475338,
			title : 'V4oILN6mO1MS38QB',
			photo : $client->chatPhotoEmpty(),
			participants_count : 60,
			date : 26,
			version : 44,
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
				until_date : 34,
			),
		),
		$client->chatForbidden(
			id : 2888555192434304771,
			title : 'k4CU063tQ9WS2luz',
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
			id : -8362481560562943005,
			access_hash : -6397612281923817490,
			title : 'HL98loDc4N7mfXPE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EoGIksLUipXS1VTe',
					reason : 'b2vKzyfiwc86QlHR',
					text : 'PrgztoRAKGaZXBHY',
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
				until_date : 1,
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
				until_date : 84,
			),
			participants_count : 93,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 8,
			),
			color : $client->peerColor(
				color : 65,
				background_emoji_id : 7114577772351448268,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : -4807823085073699825,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 85,
			subscription_until_date : 53,
			bot_verification_icon : 4331899436099776833,
			send_paid_messages_stars : -1004444553950705499,
			linked_monoforum_id : 6423378328438930744,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3635909235778904387,
			access_hash : -368434677960681389,
			title : 'z4i5WehVm3LnlsCp',
			until_date : 86,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2095749306941254649,
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
			id : 385184029659216729,
			access_hash : -1106145978574257429,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '85ySiQmaYVjPOuBv',
					reason : 'IJ0i4ZEHryq2lMFe',
					text : '3ftNgh4uTyUjLRse',
				),
			),
			bot_inline_placeholder : 'qdWObZMXl3KSvAYt',
			lang_code : 'p64WrPNC5YA8T9IS',
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
				max_id : 13,
			),
			color : $client->peerColor(
				color : 71,
				background_emoji_id : -467548291584525234,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -6720951057286006184,
			),
			bot_active_users : 10,
			bot_verification_icon : 6785265334349790346,
			send_paid_messages_stars : 4082699311877226610,
		),
	),
);
```