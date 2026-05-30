# channels.adminLogResults

**Description** : *Admin log events*

**Layer** : 222

```tl
channels.adminLogResults#ed8af74d events:Vector<ChannelAdminLogEvent> chats:Vector<Chat> users:Vector<User> = channels.AdminLogResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>events</mark> | [`Vector<ChannelAdminLogEvent>`](type/ChannelAdminLogEvent) | Admin log events |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in events |

---

## Type

[channels.AdminLogResults](type/channels.AdminLogResults)

---

## Example

```php
$channelsAdminLogResults = $client->channels->adminLogResults(
	events : array(
		$client->channelAdminLogEvent(
			id : -8443586565026169173,
			date : 3,
			user_id : -5373517243905564509,
			action : $client->channelAdminLogEventActionChangeTitle(
				prev_value : 'K82GHtCMVRoENxS0',
				new_value : 'qhUElPp8MmZjyeYH',
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4688852343563661744,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1860485244135703525,
			title : '7bCOgvZx3XHF6529',
			photo : $client->chatPhotoEmpty(),
			participants_count : 23,
			date : 6,
			version : 49,
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
				until_date : 99,
			),
		),
		$client->chatForbidden(
			id : 534031729651602064,
			title : 'HSsBlVR8ejmC3PvF',
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
			id : -8264841894855062556,
			access_hash : -1922719622723449580,
			title : 'FZcIJfA5e8P3mXDE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tgMK6jWVyR8OLrnb',
					reason : '5e9zWToUn3RiPBkl',
					text : 'J4BZ8nb2E0Arfycx',
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
				until_date : 4,
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
			participants_count : 49,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 49,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -62860645667347556,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : 3123215043357195912,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 56,
			subscription_until_date : 94,
			bot_verification_icon : 513429606183106699,
			send_paid_messages_stars : 7257116957528756848,
			linked_monoforum_id : 7023725813803709948,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 7838594886462251404,
			access_hash : 2727455414547768828,
			title : 'mECcsnRBYX9JdkLp',
			until_date : 47,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1338347315553290470,
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
			id : 7103078611736164829,
			access_hash : -5011899274832504182,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8pOUeyhDnwcKHqlv',
					reason : 'HjvRm9A4LuM7qWOC',
					text : 'p9RJf3Hsx4eV25KU',
				),
			),
			bot_inline_placeholder : '8HLREwylP75FGKJo',
			lang_code : 'lA6ZaQM3pgbCBmjI',
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
				color : 59,
				background_emoji_id : -5757033101241112404,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 4992873976693091565,
			),
			bot_active_users : 89,
			bot_verification_icon : 7183543374811646855,
			send_paid_messages_stars : 6887354067417285299,
		),
	),
);
```