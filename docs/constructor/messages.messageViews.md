# messages.messageViews

**Description** : *View, forward counter \+ info about replies*

**Layer** : 218

```tl
messages.messageViews#b6c4f543 views:Vector<MessageViews> chats:Vector<Chat> users:Vector<User> = messages.MessageViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<MessageViews>`](type/MessageViews) | View, forward counter + info about replies |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in constructor |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in constructor |

---

## Type

[messages.MessageViews](type/messages.MessageViews)

---

## Example

```php
$messagesMessageViews = $client->messages->messageViews(
	views : array(
		$client->messageViews(
			views : 47,
			forwards : 95,
			replies : $client->messageReplies(
				comments : true,
				replies : 7,
				replies_pts : 96,
				recent_repliers : array(
					$client->peerUser(
						user_id : -3019608465125768469,
					),
					$client->peerChat(
						chat_id : -7738290607436494841,
					),
					$client->peerChannel(
						channel_id : -8882007758413819098,
					),
				),
				channel_id : 6550462317465315308,
				max_id : 68,
				read_max_id : 100,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4821357436554759802,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1081540056815105833,
			title : 'CKF7QiAWd58EXlZw',
			photo : $client->chatPhotoEmpty(),
			participants_count : 87,
			date : 64,
			version : 57,
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
				until_date : 72,
			),
		),
		$client->chatForbidden(
			id : -899882987022565543,
			title : 'zm8SpBvhP0HnjNxr',
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
			id : -1198837261205196465,
			access_hash : -1882761027791769414,
			title : 'pxjIO0t6L3sMn2bY',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'a4FRutvgUnqwLe7c',
					reason : 'OzSyNLq2KbB4nUj8',
					text : 'Nm3DW2hJZxzkYLcf',
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
				until_date : 25,
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
				until_date : 98,
			),
			participants_count : 66,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 63,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -6757329315295193183,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : -5536005561678240088,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 54,
			subscription_until_date : 31,
			bot_verification_icon : 2345510143045441990,
			send_paid_messages_stars : -1988300235061490845,
			linked_monoforum_id : -5652293924591404728,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3525299140300108120,
			access_hash : -4444360543484933506,
			title : 'ayZu0owdPO1In5zU',
			until_date : 67,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8407787777394675988,
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
			id : -2652400152460397971,
			access_hash : 9035634658099725952,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 71,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SrwBE1mzFADMjhJy',
					reason : 'rVaAQP9cOClnv8Ww',
					text : 'tbVgYLmHaDzrSApe',
				),
			),
			bot_inline_placeholder : 'wRfuiCj4K9xNWEL6',
			lang_code : 'hSnCXZ83w6HIapJN',
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
				max_id : 51,
			),
			color : $client->peerColor(
				color : 54,
				background_emoji_id : 8586846305078770564,
			),
			profile_color : $client->peerColor(
				color : 48,
				background_emoji_id : 4669272575183517729,
			),
			bot_active_users : 90,
			bot_verification_icon : -5969560962881669052,
			send_paid_messages_stars : -3422440771414158407,
		),
	),
);
```