# phone.groupCall

**Description** : *Contains info about a group call, and partial info about its participants*

**Layer** : 218

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
		id : 3199716117058300385,
		access_hash : 6125842748413202180,
		duration : 75,
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
				user_id : 4050664880774052297,
			),
			date : 24,
			active_date : 96,
			source : 49,
			volume : 36,
			about : 'vN4IWHei8pKXjQLb',
			raise_hand_rating : -8141506964703196604,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : '5dZwRMrPUxm27Jnt',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'xM8rq7mHitA4aORD',
						sources : array(72),
					),
				),
				audio_source : 51,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'kvE4xCuVwe0X83RO',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'DFtbLcgAjOeXafSy',
						sources : array(83),
					),
				),
				audio_source : 76,
			),
			paid_stars_total : 3619104742271043951,
		),
	),
	participants_next_offset : '3cwRHFgvzNq091Ao',
	chats : array(
		$client->chatEmpty(
			id : -6596219102462438637,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8948813439601907046,
			title : 'yu2fMnPNwxWJYAB8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 91,
			date : 53,
			version : 25,
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
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : -1194229970710909870,
			title : 'VbusBhUj9rNKMZES',
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
			id : -1315394315695867700,
			access_hash : -2098197026280658998,
			title : 'bleZTUMh3sHXKrmc',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'x0g1ShDAkbfTsVdB',
					reason : '3nZPiU0qyxjf9GpQ',
					text : 'VDgTh8Fx4oLP6WQU',
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
				until_date : 40,
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : -5405439892435873,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 7899098647304146801,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 40,
			subscription_until_date : 68,
			bot_verification_icon : -2841145450619214066,
			send_paid_messages_stars : 1300613996657685471,
			linked_monoforum_id : 3064397489483609381,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6961593797668130061,
			access_hash : -1939077241766532011,
			title : 'Xuvm7Dz0FVRYknsg',
			until_date : 29,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1929561067350740666,
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
			id : 6932470660714094097,
			access_hash : -4577430443360140952,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wMvVrt5RCu2xb48j',
					reason : 'OCNWjD6i7GgBoyYh',
					text : 'dO0ExYl4q1wQhso9',
				),
			),
			bot_inline_placeholder : 'jObF03Y2GWveKoZI',
			lang_code : 'fawPTO1B8ibtkUFR',
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
				color : 27,
				background_emoji_id : -2860667931134254863,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 1034932515665236018,
			),
			bot_active_users : 79,
			bot_verification_icon : 5932136283187160017,
			send_paid_messages_stars : -6671813535498636249,
		),
	),
);
```