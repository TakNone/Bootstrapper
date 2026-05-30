# contacts.resolvedPeer

**Description** : *Resolved peer*

**Layer** : 222

```tl
contacts.resolvedPeer#7f077ad9 peer:Peer chats:Vector<Chat> users:Vector<User> = contacts.ResolvedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.ResolvedPeer](type/contacts.ResolvedPeer)

---

## Example

```php
$contactsResolvedPeer = $client->contacts->resolvedPeer(
	peer : $client->peerUser(
		user_id : -8224453100630539782,
	),
	chats : array(
		$client->chatEmpty(
			id : -2046168746738075409,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4865562075793314224,
			title : 'aBJnNFAWvCpiUyuq',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 86,
			version : 53,
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
				until_date : 69,
			),
		),
		$client->chatForbidden(
			id : 687667849861337458,
			title : 'GN5DyxwJWRUuH3Qz',
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
			id : 5883164344661252848,
			access_hash : 6396901015213258421,
			title : 'Wipdz0aqhjJvkR2s',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gMt4pCYjRvf6Uxkb',
					reason : 'XpkCGH45YeZUKPmT',
					text : 'szECQlBPm1NZMkOL',
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
				until_date : 81,
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
				until_date : 30,
			),
			participants_count : 31,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 28,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : -6146365452722789032,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -3702513160132694855,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 30,
			bot_verification_icon : 3279979410974392617,
			send_paid_messages_stars : 7852955085815602797,
			linked_monoforum_id : -6084223228256558061,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 9006740113647428351,
			access_hash : 1802788375324451362,
			title : 'qdQgK7tGcyJRIXEv',
			until_date : 99,
		),
	),
	users : array(
		$client->userEmpty(
			id : 2023593993130158414,
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
			id : 4589415201154553699,
			access_hash : 5829116939309644135,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UL1PW7RbBHj4NGfZ',
					reason : 'Oj0fG1gSdmnAzlUF',
					text : 'k5rVjDviMPpIyBT7',
				),
			),
			bot_inline_placeholder : 'sy5hcalMHeBq7Wop',
			lang_code : 'ICm3XtULzKsFPORD',
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
				max_id : 19,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : -9078970238114679344,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : 5782930659338956640,
			),
			bot_active_users : 4,
			bot_verification_icon : -923788749919988386,
			send_paid_messages_stars : 8317419859881080464,
		),
	),
);
```