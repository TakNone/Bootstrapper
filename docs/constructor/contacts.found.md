# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 222

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
			user_id : -5782080317378028739,
		),
		$client->peerChat(
			chat_id : -6922854231673704300,
		),
		$client->peerChannel(
			channel_id : -6605937474754346380,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -7843309698209586518,
		),
		$client->peerChat(
			chat_id : 8483541968187466003,
		),
		$client->peerChannel(
			channel_id : 5191307016139206169,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2149750519764912386,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6282015382083065214,
			title : 'aKjsGI9r7WqUOxf8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 100,
			date : 73,
			version : 86,
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
				until_date : 95,
			),
		),
		$client->chatForbidden(
			id : -7069446699050031812,
			title : 'o8xFbr1E5hm37uWX',
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
			id : -8179643486626573342,
			access_hash : 7507816267521590891,
			title : 'sTboLUWJ2gHtQ41x',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nCKh7L1vwVS9YD0p',
					reason : 'ekX96dtmTBSwQhrg',
					text : '3erKPYfzjtWFEVB5',
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
				until_date : 96,
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
				until_date : 2,
			),
			participants_count : 11,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 18,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -6276047378435406462,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : -6098370475942294258,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 49,
			subscription_until_date : 77,
			bot_verification_icon : -322703732319700426,
			send_paid_messages_stars : -7759135543799210289,
			linked_monoforum_id : -6487324230845676903,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -3586842128939860266,
			access_hash : -1933662645718650815,
			title : 'ihYe78HrcvoOaDq3',
			until_date : 87,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2714548648194244152,
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
			id : -7980212065075859930,
			access_hash : 4980462123233999791,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'IXZiS6WeAnwFO7N3',
					reason : 'g7Q23KuUbeJz9hA1',
					text : 'rJp3Li8UI6VTO4El',
				),
			),
			bot_inline_placeholder : 'hgs48VjyUmlZtGEW',
			lang_code : '2fkR8TwynzXueL15',
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
				max_id : 81,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -3241236873169006773,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -7693084450225253216,
			),
			bot_active_users : 39,
			bot_verification_icon : -3317158575341336090,
			send_paid_messages_stars : -2202614053980906626,
		),
	),
);
```