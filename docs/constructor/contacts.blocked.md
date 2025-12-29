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
				user_id : -4565344689832675147,
			),
			date : 85,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 3551928387887335177,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -9124341260162058345,
			title : 'dWjXmur6ph5Filb1',
			photo : $client->chatPhotoEmpty(),
			participants_count : 34,
			date : 47,
			version : 47,
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
				until_date : 42,
			),
		),
		$client->chatForbidden(
			id : 8095654564619081080,
			title : 'RYMp4sbrSxDfFEOe',
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
			id : 6993331598453827096,
			access_hash : 2109918951217147124,
			title : 'H4y1YAejr6uCz0Fo',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 32,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9qwZgA40UpKMGrE5',
					reason : 'REmQtgsH4ODxcUZT',
					text : 'miJ5TRDQPlaGy3Ss',
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
				until_date : 27,
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
				until_date : 65,
			),
			participants_count : 100,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 80,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -3761160977511748990,
			),
			profile_color : $client->peerColor(
				color : 67,
				background_emoji_id : 1807663758871656020,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 71,
			subscription_until_date : 80,
			bot_verification_icon : 1469812988775336615,
			send_paid_messages_stars : 1422271197842741869,
			linked_monoforum_id : 4371908455688290386,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4104418673524992989,
			access_hash : -2589257321955406453,
			title : 'lmzF8ISs1WTXVYxM',
			until_date : 14,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1970886593263011678,
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
			id : -4329842687584674875,
			access_hash : -966613337515912246,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tSGJnMHYLcDPdZ60',
					reason : 'AJBu04UP7NHhzREq',
					text : 'IvnU4MPqA8jG5WNz',
				),
			),
			bot_inline_placeholder : 'G3NsxoVEkqTLpSmh',
			lang_code : 'ZivkVlK9mhbWoeF6',
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
				max_id : 61,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 3368696362909191809,
			),
			profile_color : $client->peerColor(
				color : 51,
				background_emoji_id : 7059045234775759682,
			),
			bot_active_users : 10,
			bot_verification_icon : 7534981250225131397,
			send_paid_messages_stars : 75599106681183091,
		),
	),
);
```