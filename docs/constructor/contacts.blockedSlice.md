# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 211

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
	count : 45,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -352185505681944000,
			),
			date : 28,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4821531117882849485,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2329830400678075345,
			title : 'Csk0noLmS34yl7MW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 8,
			version : 2,
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
				until_date : 37,
			),
		),
		$client->chatForbidden(
			id : 4730160539416577806,
			title : 'QPjWI8ZKVXtx63cU',
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
			id : 5079998788877082196,
			access_hash : -601210940203112578,
			title : 'bpcER3jlGAZ12rPz',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9GZPH13SEduqwjID',
					reason : 'wqYMnCcBtUTJxD4F',
					text : 'SMWqf0QL6UkJ5otv',
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
				until_date : 11,
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
			participants_count : 76,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 84,
			color : $client->peerColor(
				color : 34,
				background_emoji_id : 6544232405711162117,
			),
			profile_color : $client->peerColor(
				color : 65,
				background_emoji_id : -2975106890104622130,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 14,
			bot_verification_icon : 2225273094178924215,
			send_paid_messages_stars : 9036185320782053393,
			linked_monoforum_id : 8870672981147256328,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6430716536569175763,
			access_hash : -6480091117529036064,
			title : 'EGJsYpxbPyv8Ff5e',
			until_date : 82,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7428686720246303458,
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
			id : 2041725587128421849,
			access_hash : 3047468808874761700,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LZfDvSdF5PHbQ0lI',
					reason : 'vNTEpQIfDtmsWyi7',
					text : 'NZv7Q4gYlEMuSC6y',
				),
			),
			bot_inline_placeholder : 'GHlxi5nqhRuQDNTc',
			lang_code : '1Qdf0Z9LHRaN5xiY',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : -5694910341980956138,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : 8724842903044717345,
			),
			bot_active_users : 63,
			bot_verification_icon : 7647608004173012216,
			send_paid_messages_stars : 1477516362909615593,
		),
	),
);
```