# phone.groupCall

**Description** : *Contains info about a group call, and partial info about its participants*

**Layer** : 222

```tl
phone.groupCall#9e727aad call:GroupCall participants:Vector<GroupCallParticipant> participants_next_offset:string chats:Vector<Chat> users:Vector<User> = phone.GroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`GroupCall`](type/GroupCall) | Info about the group call |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | A partial list of participants |
| <mark>participants_next_offset</mark> | [`string`](type/string) | Next offset to use when fetching the remaining participants using phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in the participants vector |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in the participants vector |

---

## Type

[phone.GroupCall](type/phone.GroupCall)

---

## Example

```php
$phoneGroupCall = $client->phone->groupCall(
	call : $client->groupCallDiscarded(
		id : -4162233615557143900,
		access_hash : -5730851267262645250,
		duration : 61,
	),
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
				user_id : -333871548219551324,
			),
			date : 98,
			active_date : 37,
			source : 69,
			volume : 1,
			about : 'oaUqGyFY8XDWmPdn',
			raise_hand_rating : -3121019064555263039,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'RmwVWDoXEeTMIqlH',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'zLtihkb2JqUvxpgy',
						sources : array(29),
					),
				),
				audio_source : 58,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'HDUjlW5kxq84s0LZ',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'RYIEubiOVm7rSGkL',
						sources : array(58),
					),
				),
				audio_source : 66,
			),
			paid_stars_total : 757904501432116571,
		),
	),
	participants_next_offset : 'mpwJL6IEY8SuNg0z',
	chats : array(
		$client->chatEmpty(
			id : 8079143076409475660,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3183436034425020979,
			title : 'OfLNs4MltWQYiCmv',
			photo : $client->chatPhotoEmpty(),
			participants_count : 44,
			date : 80,
			version : 48,
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
				until_date : 65,
			),
		),
		$client->chatForbidden(
			id : -5199930037988165304,
			title : 'iSc1Wd7GlgVZEQqD',
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
			id : -5343646797378305407,
			access_hash : 3059918379285580962,
			title : 'IBLlU4xA2yRE0bNj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YqAxHeh6OGtCRnfa',
					reason : '3hJgevoxKXpfjA1k',
					text : 'OE8MztSZwKbBsfm6',
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
				until_date : 44,
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
				until_date : 6,
			),
			participants_count : 68,
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
				color : 30,
				background_emoji_id : 4027665127566052253,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -2241768291080996976,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 66,
			subscription_until_date : 53,
			bot_verification_icon : 3912281133943096412,
			send_paid_messages_stars : 5753078923092425603,
			linked_monoforum_id : 3700877984617977080,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 49681061224870614,
			access_hash : 8163549509247312135,
			title : 'nV30LkyoAj5w6gmu',
			until_date : 90,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5756021259896057237,
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
			id : -7357373069363043835,
			access_hash : -8416525932915846164,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 73,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AeFLc82xGgBbCRDm',
					reason : '60FHTd4t1jprEwXM',
					text : 'KQ1d6N7YhIuHtqXA',
				),
			),
			bot_inline_placeholder : 'WXEQlReJNVPpCS38',
			lang_code : 'VRCD3dHSLqvZxEQT',
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
				max_id : 61,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 7474059408407202152,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -1998595701972567392,
			),
			bot_active_users : 63,
			bot_verification_icon : -4270919587177297643,
			send_paid_messages_stars : 2784835677605768362,
		),
	),
);
```