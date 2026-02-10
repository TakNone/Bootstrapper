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
			views : 31,
			forwards : 33,
			replies : $client->messageReplies(
				comments : true,
				replies : 76,
				replies_pts : 3,
				recent_repliers : array(
					$client->peerUser(
						user_id : -8330198697716500832,
					),
					$client->peerChat(
						chat_id : -7794876638175569602,
					),
					$client->peerChannel(
						channel_id : -6193720554120253995,
					),
				),
				channel_id : -2322838092490132978,
				max_id : 76,
				read_max_id : 24,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -481302275852663082,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4389726279711840984,
			title : '374KPMYvU1FlBkpQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 41,
			date : 38,
			version : 15,
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
				until_date : 72,
			),
		),
		$client->chatForbidden(
			id : 3890801973804326420,
			title : 'C0DVjLWndryTZGcQ',
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
			id : 5636088810234078498,
			access_hash : -8187897951137603196,
			title : 'yE4VZvNhdGH6zOmY',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'POC0eg9KkINtAyzs',
					reason : 'T09NuaMs3pIkGX26',
					text : 'MhdXy4ZuiWDI3zjU',
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
				until_date : 25,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 66,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 9157639676214619116,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : -7838089149440897497,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 64,
			subscription_until_date : 79,
			bot_verification_icon : -5315902851779655083,
			send_paid_messages_stars : -6174086661808400072,
			linked_monoforum_id : 4349852947013429821,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -2115986549230011517,
			access_hash : 8185493990466289958,
			title : 'nRPvetXhm3KUzuJG',
			until_date : 21,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7478008791725622946,
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
			id : 409330084209972541,
			access_hash : -1396951251303110179,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '9ESsbLwfMhBzTAON',
					reason : 'B6zRGxrOF18EfSZN',
					text : '3FDUSmhLRvKfi1jJ',
				),
			),
			bot_inline_placeholder : 'yoxejPgWsJV72aNf',
			lang_code : 'tJV81wEcDLaRkjX7',
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
				max_id : 17,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -4888720130889963160,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 3391952588948254377,
			),
			bot_active_users : 79,
			bot_verification_icon : -9017413784549676259,
			send_paid_messages_stars : -1023303570080082886,
		),
	),
);
```