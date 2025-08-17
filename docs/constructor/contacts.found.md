# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 211

```tl
contacts.found#b3134d9d my_results:Vector<Peer> results:Vector<Peer> chats:Vector<Chat> users:Vector<User> = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_results</mark> | [`Vector<Peer>`](type/Peer) | Personalized results |
| <mark>results</mark> | [`Vector<Peer>`](type/Peer) | List of found user identifiers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Found chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Found](type/contacts.Found)

---

## Example

```php
$contactsFound = $client->contacts->found(
	my_results : array(
		$client->peerUser(
			user_id : -640818047858277861,
		),
		$client->peerChat(
			chat_id : 3566095377391460635,
		),
		$client->peerChannel(
			channel_id : 592278650611191849,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -170740363719697371,
		),
		$client->peerChat(
			chat_id : -7937835733539190015,
		),
		$client->peerChannel(
			channel_id : -5878274718164287788,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2650569672864668172,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6235238525803158421,
			title : 'HfBVIqCZSPRO9zYj',
			photo : $client->chatPhotoEmpty(),
			participants_count : 38,
			date : 83,
			version : 42,
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
				until_date : 84,
			),
		),
		$client->chatForbidden(
			id : -7490438391958783102,
			title : 'KOdcL3gRNZy1EQBb',
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
			id : -6688430574926232558,
			access_hash : -8364062981972606348,
			title : '5HmTVustXxiQN3ny',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UjYoCe6suabAw0cT',
					reason : 'O7YWPpNtvq4TJAb5',
					text : 'XqoE7by3li94pRD2',
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
				until_date : 8,
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
				until_date : 51,
			),
			participants_count : 38,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -6898626314675563709,
			),
			profile_color : $client->peerColor(
				color : 40,
				background_emoji_id : 3493201658921037351,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 53,
			subscription_until_date : 77,
			bot_verification_icon : 7015944328970898088,
			send_paid_messages_stars : -7421435331731066146,
			linked_monoforum_id : -6832907410138957936,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -4046136453523088636,
			access_hash : 7976015722578184438,
			title : 'CR0BrWI3ezxu1jEP',
			until_date : 58,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2708182925091889614,
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
			id : 5437968813325091809,
			access_hash : 2477003736210085081,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'VSO0yWl6aTbgLvUu',
					reason : 'Vxnb7FkMzYc0AlSr',
					text : 'r4yeb3qVOm1RcpPo',
				),
			),
			bot_inline_placeholder : 'v96IgMbOWSJqyXPd',
			lang_code : 'BHfNE4Ynvb7Oo2g1',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 7,
				background_emoji_id : 6889875058451505215,
			),
			profile_color : $client->peerColor(
				color : 79,
				background_emoji_id : -6315730143915585789,
			),
			bot_active_users : 10,
			bot_verification_icon : -7979857164666296671,
			send_paid_messages_stars : -6675404091303632846,
		),
	),
);
```