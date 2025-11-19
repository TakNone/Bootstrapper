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
		id : -799274720085526044,
		access_hash : -8871260805838937751,
		duration : 93,
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
				user_id : 6444792538408379757,
			),
			date : 74,
			active_date : 2,
			source : 67,
			volume : 6,
			about : 'sF8oaSfAn9PQzOcI',
			raise_hand_rating : -1606920554311275664,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'tfkY2NxQFWnagTsc',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'bfTUhp0a9PtRHxlc',
						sources : array(35),
					),
				),
				audio_source : 70,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'gQrAxYWpKliT1J84',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'jQy70K6qepfhmEbY',
						sources : array(17),
					),
				),
				audio_source : 1,
			),
			paid_stars_total : -623306100506383690,
		),
	),
	participants_next_offset : 'VTMg0XpGDYCj2xRe',
	chats : array(
		$client->chatEmpty(
			id : 8024431671669717669,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8509500606596953399,
			title : 'zu1Hp28YcKf5PXtb',
			photo : $client->chatPhotoEmpty(),
			participants_count : 29,
			date : 49,
			version : 24,
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
				until_date : 91,
			),
		),
		$client->chatForbidden(
			id : 156088095869941519,
			title : 'PsAVEpZQb6a0ztmr',
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
			id : -24391362621770088,
			access_hash : -4971350075729911341,
			title : '93HNDuZCxW1qAEMX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yl7IY5HgpxkM3u1A',
					reason : 'qfodVehrpJWvMjsE',
					text : 'QhrDWAu479Mm2pnK',
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
				until_date : 8,
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
				until_date : 41,
			),
			participants_count : 45,
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
				color : 21,
				background_emoji_id : 8025143334900458439,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 7103468043436628762,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 19,
			subscription_until_date : 98,
			bot_verification_icon : 238652030390457574,
			send_paid_messages_stars : -5169713721065074519,
			linked_monoforum_id : 4561616564426696501,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2542495361556042539,
			access_hash : -5253541560044619850,
			title : 'gZuTEXzyBCmjFn6b',
			until_date : 65,
		),
	),
	users : array(
		$client->userEmpty(
			id : -364456015972584565,
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
			id : 4514043250197112243,
			access_hash : 348205437372882663,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bYAfe2tx3yMO6Cj0',
					reason : 'TProvLxZCISku3q2',
					text : 'DpfB46Pk0mwsUlOW',
				),
			),
			bot_inline_placeholder : 'NwgtlunZBQKXiqk6',
			lang_code : 'YyLuEh1tlpANkofG',
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
				max_id : 48,
			),
			color : $client->peerColor(
				color : 3,
				background_emoji_id : 4970721676251408177,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : 3681158027921549047,
			),
			bot_active_users : 53,
			bot_verification_icon : -4771718286108351229,
			send_paid_messages_stars : -7210099277509433506,
		),
	),
);
```