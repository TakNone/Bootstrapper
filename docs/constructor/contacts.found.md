# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 218

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
			user_id : 3227178812503406819,
		),
		$client->peerChat(
			chat_id : -2538185933796777157,
		),
		$client->peerChannel(
			channel_id : -3382182873002135822,
		),
	),
	results : array(
		$client->peerUser(
			user_id : 1846021848542473809,
		),
		$client->peerChat(
			chat_id : -43002346318073651,
		),
		$client->peerChannel(
			channel_id : 3968443012839171186,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6887399077971317574,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2508031636262625049,
			title : 'fUgROFBYPCqXl8uE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 32,
			date : 57,
			version : 12,
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
				until_date : 87,
			),
		),
		$client->chatForbidden(
			id : 7528124053336942064,
			title : 'UknSLpNmt5Zro7fJ',
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
			id : 5531294185903133531,
			access_hash : -1468402602720132073,
			title : 'PSoDkVExr0NCA3dZ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'sjA9o2d4U6YK1VFk',
					reason : 'DJtp9W1T3c5rC6wU',
					text : 'ZA4pj7q2a9c6f5KY',
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
				until_date : 47,
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
				until_date : 88,
			),
			participants_count : 16,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 6,
			),
			color : $client->peerColor(
				color : 100,
				background_emoji_id : -3626640013401096281,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -3081802977251046000,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 95,
			subscription_until_date : 49,
			bot_verification_icon : 1676389283610995518,
			send_paid_messages_stars : 4701043403354749296,
			linked_monoforum_id : 4945229129079892641,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7428613896360754457,
			access_hash : 631217455608000565,
			title : 'AyaxoUfzbt0muPQd',
			until_date : 33,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1788970075427362777,
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
			id : -1010706556000762291,
			access_hash : -6378856611938121821,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iOYGaMIfktx01U37',
					reason : '3fnbhrtJ7XUSMldK',
					text : 'zgBpWNMoGRqJ4XOS',
				),
			),
			bot_inline_placeholder : 'I7ualxRCcr63JqGn',
			lang_code : 'yjma3p5nYTzW6ObF',
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
				max_id : 55,
			),
			color : $client->peerColor(
				color : 65,
				background_emoji_id : 6863932290902670182,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : -5365730766281146389,
			),
			bot_active_users : 7,
			bot_verification_icon : 7383032454577677207,
			send_paid_messages_stars : 9158150313062999890,
		),
	),
);
```