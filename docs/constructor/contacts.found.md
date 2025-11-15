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
			user_id : 5756307479593851741,
		),
		$client->peerChat(
			chat_id : 3092180114324665463,
		),
		$client->peerChannel(
			channel_id : 3864110092971052990,
		),
	),
	results : array(
		$client->peerUser(
			user_id : 5106007406875075992,
		),
		$client->peerChat(
			chat_id : 3546084798753346327,
		),
		$client->peerChannel(
			channel_id : 6243930623449637113,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 2130249435207172952,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6427365842949321167,
			title : 'U78ZnstkcV1xJ2Dv',
			photo : $client->chatPhotoEmpty(),
			participants_count : 62,
			date : 45,
			version : 62,
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
				until_date : 26,
			),
		),
		$client->chatForbidden(
			id : -862592159082510428,
			title : 'dfPTY4MbhSIjUa6H',
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
			id : 5712115374606744711,
			access_hash : 4964309720845196416,
			title : '6yAtSI0C1OuDPc9a',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ql6LZb7UBehvXVi8',
					reason : 'YlQfHq3NAe4u5pOU',
					text : 'N1tF2o93cRO6a8Cs',
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
				until_date : 83,
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
				until_date : 19,
			),
			participants_count : 97,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 52,
			),
			color : $client->peerColor(
				color : 89,
				background_emoji_id : 1794709678100702551,
			),
			profile_color : $client->peerColor(
				color : 77,
				background_emoji_id : -5622224517309474086,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 88,
			subscription_until_date : 26,
			bot_verification_icon : -9071867790341466242,
			send_paid_messages_stars : -5992587863787112622,
			linked_monoforum_id : 6712703377942642438,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3380266093210688584,
			access_hash : -895238613430904658,
			title : 'qINc14RY3rBWakK6',
			until_date : 3,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6961529424302103419,
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
			id : 7128959632960412966,
			access_hash : -1107062776938285658,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jC0wVxQeS68Ufqoz',
					reason : 'L2MkKI5wnj0QJepz',
					text : 'dQ6uUjmbNpclFsvo',
				),
			),
			bot_inline_placeholder : 'zI09GyqeXBsxvwiO',
			lang_code : 'V4rGSMN6EQ0D7sti',
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
				max_id : 98,
			),
			color : $client->peerColor(
				color : 5,
				background_emoji_id : -4607764471631697615,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : 8883656314148374843,
			),
			bot_active_users : 82,
			bot_verification_icon : 3059770648378599927,
			send_paid_messages_stars : -6782850882222419931,
		),
	),
);
```