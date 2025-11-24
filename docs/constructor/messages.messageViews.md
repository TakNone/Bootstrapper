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
			views : 55,
			forwards : 18,
			replies : $client->messageReplies(
				comments : true,
				replies : 66,
				replies_pts : 30,
				recent_repliers : array(
					$client->peerUser(
						user_id : -7464026940048548994,
					),
					$client->peerChat(
						chat_id : -3993765590048595601,
					),
					$client->peerChannel(
						channel_id : -2502832251365867864,
					),
				),
				channel_id : 2629770851127446578,
				max_id : 7,
				read_max_id : 15,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4771090520019386168,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2427333428254855875,
			title : 'H5d4DlAKPhkQYRUO',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 32,
			version : 31,
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
				until_date : 27,
			),
		),
		$client->chatForbidden(
			id : 1643387830648372166,
			title : 'uTMg1yfKCLeJ9IP8',
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
			id : 1815064330053894045,
			access_hash : 3800621502200137946,
			title : 'sY3WMIPRjF6Sp2kJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Yx7PBlbzpvAyLU5c',
					reason : 'Ys01jICNyPvXzc68',
					text : '07KG1zSjx9QfbtHZ',
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
				until_date : 66,
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
				until_date : 70,
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
				max_id : 61,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : -1550117089030342481,
			),
			profile_color : $client->peerColor(
				color : 19,
				background_emoji_id : -2932534229281402312,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 83,
			subscription_until_date : 41,
			bot_verification_icon : 3447831765727012122,
			send_paid_messages_stars : -3077530594228079476,
			linked_monoforum_id : -2458774630595421648,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6439222882064675893,
			access_hash : 8133566924662635745,
			title : 'tqOUrgMJXEARlhQ2',
			until_date : 96,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5138206566145745690,
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
			id : -5380804021832961394,
			access_hash : -7740168987240439314,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ut01n4xA8DNRMeZs',
					reason : 'PXZrmpiTAwxhq9vW',
					text : 'TlKrX8e1yOqDUokE',
				),
			),
			bot_inline_placeholder : 'Qo1smVd4EakHiZ0B',
			lang_code : 'xvzFPDfTYWhy9L8e',
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
				max_id : 53,
			),
			color : $client->peerColor(
				color : 34,
				background_emoji_id : -8913834540441177238,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : 401803735776638498,
			),
			bot_active_users : 89,
			bot_verification_icon : -4118543435115450685,
			send_paid_messages_stars : 6385655377287738929,
		),
	),
);
```