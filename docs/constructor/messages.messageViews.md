# messages.messageViews

**Description** : *View, forward counter \+ info about replies*

**Layer** : 222

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
			views : 5,
			forwards : 42,
			replies : $client->messageReplies(
				comments : true,
				replies : 45,
				replies_pts : 74,
				recent_repliers : array(
					$client->peerUser(
						user_id : 9179310984068373476,
					),
					$client->peerChat(
						chat_id : 8150162781229170774,
					),
					$client->peerChannel(
						channel_id : -3776509779333493487,
					),
				),
				channel_id : -705138422911460938,
				max_id : 38,
				read_max_id : 5,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5864244385459443606,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4769918342002566424,
			title : 'ySwZ23a4vQ1NojpE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 61,
			date : 63,
			version : 13,
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
				until_date : 62,
			),
		),
		$client->chatForbidden(
			id : -502177472183364492,
			title : 'UcjbidQwl2kuzP5q',
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
			id : -1172961405163698400,
			access_hash : 1070951710556018196,
			title : 'dnuapZbXI8Q3UxNj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 72,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KhxClpP8NR914fsr',
					reason : 'lKJqYMRuXOPwc7bI',
					text : 'HCVBAnM4Nt6IZUie',
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
				until_date : 62,
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
				until_date : 11,
			),
			participants_count : 37,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 12,
			),
			color : $client->peerColor(
				color : 77,
				background_emoji_id : 885422625230562606,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 3719694353023955256,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 35,
			subscription_until_date : 16,
			bot_verification_icon : -1689138596390632771,
			send_paid_messages_stars : 7546585344540752019,
			linked_monoforum_id : -4705027092145487127,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5841107628665821135,
			access_hash : 8921791421749820939,
			title : 'VdGFyhRLkqMUPQ70',
			until_date : 89,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6902203909085984079,
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
			id : 7791822327168391193,
			access_hash : -469673234158468732,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 22,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WwoV9d3m4Cl7GY1b',
					reason : 'JGTqgnOzuAowHkFM',
					text : 'lBiPunDE0WUGI3yg',
				),
			),
			bot_inline_placeholder : 'gFAj1HbpiD8CtXYo',
			lang_code : '19c5kKaXEq4QMTWA',
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
				max_id : 3,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 3382721599409123048,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : 5872631403664269133,
			),
			bot_active_users : 88,
			bot_verification_icon : 4989165809994464845,
			send_paid_messages_stars : -3031188884086735567,
		),
	),
);
```