# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 214

```tl
phone.groupParticipants#f47751b6 count:int participants:Vector<GroupCallParticipant> next_offset:string chats:Vector<Chat> users:Vector<User> version:int = phone.GroupParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of participants |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | List of participants |
| <mark>next_offset</mark> | [`string`](type/string) | If not empty, the specified list of participants is partial, and more participants can be fetched specifying this parameter as offset in phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>version</mark> | [`int`](type/int) | Version info |

---

## Type

[phone.GroupParticipants](type/phone.GroupParticipants)

---

## Example

```php
$phoneGroupParticipants = $client->phone->groupParticipants(
	count : 86,
	participants : array(
		$client->groupCallParticipant(
			muted : true,
			left : true,
			can_self_unmute : true,
			just_joined : true,
			versioned : true,
			min : true,
			muted_by_you : true,
			volume_by_admin : true,
			self : true,
			video_joined : true,
			peer : $client->peerUser(
				user_id : -8452098683292586156,
			),
			date : 99,
			active_date : 10,
			source : 85,
			volume : 40,
			about : 'MydIJF3Zq9jiB0Wh',
			raise_hand_rating : -5961874934602596624,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'u4Xi5LId981pFEAt',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 93,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'owSDZWsRGUQJVbl3',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 59,
			),
		),
	),
	next_offset : '3NExvgZiheS6uJtY',
	chats : array(
		$client->chatEmpty(
			id : -6674699316634465154,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6805843043909479103,
			title : 'kjhKZ0yJY31CLf9l',
			photo : $client->chatPhotoEmpty(),
			participants_count : 20,
			date : 23,
			version : 92,
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
				until_date : 68,
			),
		),
		$client->chatForbidden(
			id : -2630087816619508720,
			title : 'vuAPOMeqHapE5b0l',
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
			id : -647301249163918633,
			access_hash : 6399748285987115904,
			title : 'MzAGorWO7cDf3Zyb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 30,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lu3SXV9UK0N7cq6I',
					reason : 'u2DwQxsUohSq9ibG',
					text : 'd42i7BOt59SXgpVJ',
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
				until_date : 29,
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
				until_date : 21,
			),
			participants_count : 67,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 20,
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 4198320329952101773,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 2533654332787019102,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 70,
			subscription_until_date : 72,
			bot_verification_icon : 4134492415876601882,
			send_paid_messages_stars : -9066027368967422799,
			linked_monoforum_id : 2213484391418289225,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 505664366958648243,
			access_hash : 5077910038270206448,
			title : 'gZRoPmwA58sHJeEF',
			until_date : 61,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6222457316311937335,
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
			id : 3006590613110525881,
			access_hash : 7926948639553381214,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '24UjmlEWGQvYP8uO',
					reason : 'duIhao8EzSVPJ3l7',
					text : 'QJGbW8BVvs3wxLyc',
				),
			),
			bot_inline_placeholder : '4XlHoh7T6Icbz9CA',
			lang_code : '30MGrOvfLQJxPhe7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 767907960668194631,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : 7018684699695781420,
			),
			bot_active_users : 12,
			bot_verification_icon : 7603495736644324186,
			send_paid_messages_stars : -5115717971942706881,
		),
	),
	version : 41,
);
```